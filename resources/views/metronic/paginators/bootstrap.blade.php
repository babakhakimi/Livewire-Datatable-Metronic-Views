<nav class="rounded-pill" aria-label="pagination-boostrap">
    <ul class="pagination pagination-sm justify-content-center">
        
        <!-- Previous Page Link -->
        <li class="page-item @if ($paginator->onFirstPage()) {{ 'disabled' }} @else {{ '' }} @endif" aria-disabled='true'>
            <a @if (!$paginator->onFirstPage()) wire:click="previousPage" @endif class="page-link">{{ __('LivewireDatatableMetronic::datatable.prev') }}</a>
        </li>

        <!-- Elements/Pages/Links -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item">
                    <button class="page-link disabled">{{ $element }}</button>
                </li>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page === $paginator->currentPage() ? 'active' : '' }}">
                        <button class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                    </li>
                @endforeach
            @endif
        @endforeach
        
        <!-- Next Page Link -->
        <li class="page-item @if ($paginator->hasMorePages()) {{ '' }} @else {{ 'disabled' }} @endif">
            <a @if ($paginator->hasMorePages()) wire:click="nextPage" @endif class="page-link">{{ __('LivewireDatatableMetronic::datatable.next') }}</a>
        </li>

    </ul>
</nav>
