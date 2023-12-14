 <!--begin::Pagination-->
 <div class="d-flex flex-stack flex-wrap pt-10">
    <div class="fs-6 fw-bold text-gray-700"></div>
        @if ($paginator->hasPages())
            <ul class="pagination">
            
                @if ($paginator->onFirstPage())
                    <li class="disabled"><i class="previous"></i></li>
                @else
                    <li class="page-item previous">
                        <a  class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                @endif
                @foreach ($elements as $element)
                
                    @if (is_string($element))
                        <li class="page-item"><span>{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><span class="active">{{ $page }}</span></li>
                            @else
                                <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach


                
                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-chevron-right"></i></a></li>
                @else
                    <li class="disabled"><i class="fas fa-chevron-right"></i></li>
                @endif
            </ul>
        @endif 
</div>