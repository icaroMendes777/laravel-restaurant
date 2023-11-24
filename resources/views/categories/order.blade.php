
@extends('layouts.crud')


@section('content')

<div class="d-flex justify-content-between">
<br/>
<h2>Reordenar Categorias:</h2>


</div>
<br/>
<style>

.ordering_icon{
    display: inline-block
}

.categories_ordering{
    display: grid;
    grid-template-columns: auto
}

.categories_ordering{
    margin:1rem;
    padding:2rem;
    background-color: rgb(203, 212, 218);
}

</style>

    @if(!$categories || count($categories)==0)

        <div>
            <p>
                Você ainda não cadastrou nenhum produto nessa categoria
            </p>
        </div>

    @else

    <div >




        <form action="{{ URL::route('category.reorder') }}"
             method="POST"
             class="categories_ordering"
             >


        <h3>Ordenar Produtos</h3>
            @method('patch')

            @csrf

            @foreach($categories as $c)

            <div class="ordering_icon">
                    <input type="text" maxlength="255"
                        name="order.{{$c->id}}"

                        style="width:2rem"
                    value="{{$c->order}}" >

                - {{$c->name}}
            </div>

        @endforeach

        <button type="submit">Salvar Nova Ordem das categorias</button>



        </form>


    </div>
    @endif



@endsection
