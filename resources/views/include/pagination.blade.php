@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12">
            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    @if($paginator->onFirstPage())
                    @else
                        <li class="page-item">
                            <a href="{{$paginator->previousPageUrl()}}" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="ti-angle-left"></i>
                                    </span>
                            </a>
                        </li>
                        <li class="page-item"><a href="{{$paginator->previousPageUrl()}}" class="page-link">{{ $paginator->currentPage()	- 1 }}</a></li>
                    @endif
                    <li class="page-item active"><a href="#" class="page-link">{{$paginator->currentPage()}}</a></li>
                    @if($paginator->onLastPage())
                    @else
                        <li class="page-item"><a href="{{$paginator->nextPageUrl()}}" class="page-link">{{$paginator->currentPage() + 1}}</a></li>
                        <li class="page-item">
                        <a href="{{$paginator->nextPageUrl()}}" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="ti-angle-right"></i>
                                    </span>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endif
