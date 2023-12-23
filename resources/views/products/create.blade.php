
@extends('layouts.crud')


@section('content')

<style>
    .form{
        background-color: rgb(192, 230, 255);
        padding:1.5rem;
        display: grid;
        grid-template-columns: auto auto;
        gap: 3rem;
    }
</style>

<div class="d-flex justify-content-between">
<br/>
<h2>Novo Produto</h2>

    <div>
    <a class="btn btn-success m-2" href="{{ URL::route('product.list')}}">Voltar</a>
    </div>
</div>
<br/>


<br/>
<form action="{{ route('product.store') }}" method="POST">


    @csrf


    <div class="form">

        <label>
            Nome:
            <input type="text" maxlength="255"
                    name="name" class="form-control
                        @error('name') is-invalid @enderror"
                    value="{{old('name')}}" >

            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <label>
            Código:
            <input type="text" maxlength="5"
                    style="width:5rem"
                    name="code" class="form-control
                        @error('code') is-invalid @enderror"
                    value="{{old('code')}}" >

            @error('code')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>


        <label>
            Descrição:

            <textarea maxlength="2000"
                    style="height:7rem"
                    name="description" class="form-control
                        @error('description') is-invalid @enderror"
                    >{{old('description')}}</textarea>

            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>
        <label>
            Ingredientes:

            <textarea maxlength="2000"
                    style="height:7rem"
                    name="ingredients" class="form-control
                        @error('ingredients') is-invalid @enderror"
                    >{{old('ingredients')}}</textarea>

            @error('ingredients')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>


        <label>
            Preço:

                    R$<input type="text" name="price"
                                maxlength="5"
                                style="width:5rem"
                                class="form-control
                                @error('price') is-invalid @enderror"
                                            value="{{old('price')}}" />


            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <label>
            Sessão do menu:

            <div class="input-group mb-3">

                    <select
                        style="font-size: 1.3rem;
                                background-color:white;
                                border:1px solid grey;
                                border-radius:0.3rem;
                                padding:0.4rem"
                            name="category_id"
                            class="custom-select" id="inputGroupSelect01">

                        @foreach($categories as $cat)
                            <option value="{{$cat->id}}"


                                @if (old('category_id')==$cat->id)
                                 selected
                                 @endif
                                >
                                {{$cat->name}}

                                @if(!$cat->active)
                                    (inativo)
                                @endif

                            </option>

                        @endforeach
                    </select>
              </div>


        </label>

    </div>



        <button type="submit">Cadastrar</button>
</form>



@endsection
