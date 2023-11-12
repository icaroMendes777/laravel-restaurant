<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<script src="{{url('commonjs/common.js')}}"></script>
<link rel="stylesheet" href="{{url('css/common.css')}}">

{{--
{!!\App\Helper\MessageHelper::alertMessages()!!} --}}

<div class='container-sm'>
<br/><br/>
<h1>Restaurante</h1>
<br/>

<ul class="nav nav-tabs m-2">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('admin/produto/*') ? 'active' : '' }}"
                    href="{{ URL::route('product.list') }}">Produtos</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/categoria/*') ? 'active' : '' }}"
                      href="{{ URL::route('category.list') }}">Categorias</a>
      </li>

</ul>




  @yield('content')


  <div class="bg-light p-3">

    Ficus&copy; Company.

  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
