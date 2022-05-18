@if ($paginator->hasPages())

<nav>
  <ul class="pagination justify-content-center">
  @if ($paginator->onFirstPage())
            <li class="disabled page-item" hidden><span><</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" class="btn btn-success" rel="prev"><</a></li>
        @endif

        @foreach ($elements as $element)
           
           @if (is_string($element))
               <li class="disabled page-item"><span>{{ $element }}</span></li>
           @endif
    
           @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="btn btn-success" style="background-color: #548b0b!important;" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" class="btn btn-success" >{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="btn btn-success " rel="next">></a></li>
        @else
            <li class="disabled page-item" hidden><span>></span></li>
        @endif
</nav>
@endif 