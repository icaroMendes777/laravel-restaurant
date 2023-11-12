
    <div style="width:100%; text-align:right">

        @if($data->currentPage()!=1)
            <a href="{{$data->previousPageUrl()}}">Página anterior</a>
            ||
        @endif

        @if($data->hasMorePages())
            <a href="{{$data->nextPageUrl()}}">Próxima página</a>
        @endif

    </div>
