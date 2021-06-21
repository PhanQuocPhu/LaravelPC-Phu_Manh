<style>


</style>
@if ($paginator->hasPages())
    <div class="container">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="btn btn-outline-secondary disabled"><span>&laquo; Previous</span></li>
            @else
                <li><a class="btn btn-outline-success" href="{{ $paginator->previousPageUrl() }}"
                        rel="prev">&laquo; Previous</a>
                </li>
            @endif

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="pl-1">
                    <a class="btn {{ $paginator->currentPage() == $i ? 'btn-primary' : 'btn-outline-primary' }}"
                        href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pl-1"><a class="btn btn-outline-success" href="{{ $paginator->nextPageUrl() }}"
                        rel="next">Next &raquo; </a></li>
            @else
                <li class="btn btn-outline-secondary pl-1 disabled"><span>Next &raquo;</span></li>
            @endif
        </ul>
    </div>
@endif
