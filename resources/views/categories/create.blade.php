
@extends('layouts.crud')


@section('content')

<div class="d-flex justify-content-between">
<br/>
<h2>Novo Produto</h2>

    <div>
    <a class="btn btn-success m-2" href="{{ URL::route('product.list')}}">Voltar</a>
    </div>
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


</style>

<br/>
<form action="{{ route('category.store') }}" method="POST">


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




        <button type="submit">Cadastrar</button>
</form>



@endsection
