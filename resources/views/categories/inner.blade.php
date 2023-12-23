



<div class="container p-3">

<a class="btn btn-success m-2" href="{{ URL::route('page.list')}}">Voltar</a>


<div class="card m-2" style="width: 30rem;">
    <div class="card-body">
      <h5 class="card-title">{{$page->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$page->slug}}</h6>
      <p class="card-text">{{$page->text}}</p>
    </div>
  </div>
</div>
