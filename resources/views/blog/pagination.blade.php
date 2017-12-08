<nav aria-label="Page navigation">
    @if ($paginator->lastPage() > 1)
    <ul class="pagination pagination-plain">
        <li class="{{ ($paginator->currentPage() == 1) ? ' page-item disabled' : 'page-item' }}">
            <a class="page-link" href="{{ $paginator->url(1) }}"><span aria-hidden="true">«</span></a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        @if($i > 3 && $i < ($paginator->lastPage() -1))
        @continue 
        @endif
        <li class="{{ ($paginator->currentPage() == $i) ? ' active page-item' : 'page-item' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'page-item disabled' : 'page-item' }}">
            <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" ><span aria-hidden="true">»</span></a>
        </li>
    </ul>
    @endif

</nav>
