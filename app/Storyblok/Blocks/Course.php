<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;
use Riclep\Storyblok\Traits\SchemaOrg;
use Spatie\SchemaOrg\Schema;

/**
 * Class representation for Storyblok course component.
 *
 * @property-read string statement
 * @property-read string title
 * @property-read array pills
 * @property-read string description
 * @property-read array buttons
 * @property-read string image
 */
class Course extends BaseBlock
{
    use SchemaOrg;

    protected function schemaOrg()
    {
        $offers = $this->pills->filter(function ($pill) {
            return $pill->type === 'price';
        })->map(function ($pill) {

            $pill->price = number_format(str_replace('£', '', $pill->text), 2);

            return $pill;
        });

        $schema = Schema::course()
            ->name($this->title)
            ->description(strip_tags($this->description))
            ->aggregateRating(
                Schema::aggregateRating()
                    ->ratingValue(4.8)
                    ->reviewCount(4)
            )
            ->provider(
                Schema::organization()
                    ->name('GSD Solutions (Guernsey) Limited')
            )
            ->image($this->image);

        if ($offers) {
            foreach ($offers as $offer) {
                $schema->offers(
                    Schema::offer()
                        ->category('Paid')
                        ->price($offer->price)
                        ->priceCurrency('GBP')
                );

                $schema->hasCourseInstance(
                    Schema::courseInstance()
                        ->instructor(
                            Schema::person()
                                ->name('Vicky Le Poidevin')
                        )
                        ->courseWorkload('PT16H')
                        ->courseMode('onsite')
                        ->offers(
                            Schema::offer()
                                ->category('Paid')
                                ->price($offer->price)
                                ->priceCurrency('GBP')
                        )
                );
            }
        }

        return $schema;
    }
}
