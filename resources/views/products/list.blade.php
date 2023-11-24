
@extends('layouts.crud')


@section('content')

<div class="d-flex flex-row-reverse">

    <div class="m-3">
        <a href="{{ URL::route('product.create') }}" class="btn btn-success ">Novo produto</a>
    </div>
</div>




<div>
    <form>
        <br/>
        <label>Buscar produto por nome:
            <input type="text" name="search"
            value="{{isset($search)? $search : ''}}">
        </label>

        <button type="submit" class="btn btn-success ">Buscar</button>
        <br/>
        <br/>
        <br/>
    </form>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        {{-- <th scope="col">slug</th>
        <th scope="col">Detalhes</th> --}}

            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>

      </tr>
    </thead>
    <tbody>

    @foreach($data as $d)


            <x-product-icon :product="$d" />


    @endforeach


    </tbody>


  </table>

  @endsection

