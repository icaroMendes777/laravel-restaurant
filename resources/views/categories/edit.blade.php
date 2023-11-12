
@extends('layouts.crud')


@section('content')

<div class="d-flex justify-content-between">
<br/>
<h2>Editando Categoria: {{$category->name}}</h2>


</div>
<br/>
<style>
.form{
    background-color: rgb(192, 230, 255);
    padding:1.5rem;
    display: grid;
    grid-template-columns: auto auto;
    gap: 3rem;
}

.ordering_icon{
    display: inline-block
}

.products_ordering{
    display: grid;
    grid-template-columns: auto
}


</style>

<br/>
<form action="{{ URL::route('category.update', $category->id) }}" method="POST">
    @method('patch')

    @csrf


    <div class="form">

        <label>
            Nome:
            <input type="text" maxlength="255"
                    name="name" class="form-control
                        @error('name') is-invalid @enderror"
                    value="{{old('name')??$category->name}}" >

            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>


        <label>
            Ordem:
            <input type="text" maxlength="2"

                    style="width:2rem"

                    name="order" class="form-control
                        @error('order') is-invalid @enderror"
                    value="{{old('order')??$category->order}}" >

            @error('order')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>


    </div>



        <button type="submit">Salvar</button>
    </form>
    @if(!$products || count($products)==0)

        <div>
            <p>
                Você ainda não cadastrou nenhum produto nessa categoria
            </p>
        </div>

    @else

    <div class="products_ordering">

        @foreach($products as $p)

            <div class="ordering_icon">
                    <input type="text" maxlength="255"
                        name="order.{{$p->id}}"

                        style="width:2rem"
                    value="{{$p->order}}" >

                - {{$p->name}}
            </div>

        @endforeach


    </div>
    @endif




@endsection
