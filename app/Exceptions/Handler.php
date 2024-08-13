<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
        });

        if (!config('app.debug')) {
            $this->renderable(function (Throwable $e, $request) {
                if (view()->exists('errors.' . $e->getCode())) {

                    $code = $e->getCode();

                    $message = match ($code) {
                        404 => 'This page doesn’t exist',
                        default => $e->getMessage()
                    };

                    return response()->view('errors.' .  $code, [
                        'code' => $code,
                        'message' => $message,
                    ], $code);
                } else {
                    return response()->view('errors.404', [
                        'code' => '404',
                        'message' => 'An error occurred',
                    ], 404);
                }
            });
        }
    }
}
