
@extends('layouts.crud')


@section('content')

<div class="d-flex flex-row-reverse">
    <div>
        <a href="{{ URL::route('category.create') }}" class="btn btn-success ">Nova categoria</a>
    </div>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        {{-- <th scope="col">slug</th>
        <th scope="col">Detalhes</th> --}}

            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>

      </tr>
    </thead>
    <tbody>

    @foreach($data as $d)
        <tr>
            <div>

                <th scope="row">{{$d->id}}</th>
                <td>{{$d->name}}</td>

                <td><a href="{{URL::route('category.edit', $d->id)}}" class="btn btn-success">Editar</a></td>

                <td><div class="btn btn-danger">Desativar</div></td>


            </div>
        </tr>
    @endforeach


    </tbody>


  </table>

  @endsection

