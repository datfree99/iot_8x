@if ($paginator->hasPages())

    <nav class="woocommerce-pagination" style="margin-bottom: 40px">
        <ul class="page-numbers nav-pagination links text-center">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a class="prev page-number" href="{{ $paginator->previousPageUrl() }}">
                        <i class="icon-angle-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span aria-current="page" class="page-number current">{{ $page }}</span></li>
                        @else
                            <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a class="next page-number" href="{{ $paginator->nextPageUrl() }}">
                        <i class="icon-angle-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
