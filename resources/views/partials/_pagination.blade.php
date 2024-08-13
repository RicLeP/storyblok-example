@if ($paginator->hasPages())
    <div class="u-mb-100 pagination">
        <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination__content">
            @if ($paginator->onFirstPage())
                <span class="pagination__link pagination__link--disabled">
					&lt;
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination__link">
                    &lt;
                </a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span aria-disabled="true" class="pagination__skip">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page" class="pagination__page pagination__page--current">
							{{ $page }}
						</span>
                        @else
                            <a href="{{ $url }}" class="pagination__page" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination__link">
                    &gt;
                </a>
            @else
                <span class="pagination__link pagination__link--disabled">
					&gt;
                </span>
            @endif
        </nav>
    </div>
@endif
