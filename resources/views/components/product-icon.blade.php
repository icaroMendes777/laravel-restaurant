<tr
@if(!$product->active)

style="background-color:#ffd1cb;"
title="Produto desativado"

@endif
>

    <th scope="row">{{$product->id}} {{$product->active}}</th>
    <td>{{$product->name}}</td>
    <td>R$ {{$product->price}}</td>
    <td
        @if(isset($product->category->active))
            @if(!$product->category->active)
                style="color:red"
                title="Categoria inativa!"
            @endif
        @endif
        >
        {{isset($product->category->name)?$product->category->name:''}}
    </td>

    {{-- <td><a href="{{ URL::route('page.edit', $p->id) }}" class="btn btn-success">Editar</a></td>

    <td><div class="btn btn-danger" onclick="confirmDelete('{{ URL::route('page.delete', $p->id) }}','{{$p->name}}')">Deletar</div></td>
 --}}



    <td><a href="{{URL::route('product.edit', $product->id)}}" class="btn btn-success">Editar</a></td>



    @if($product->active)

    <td>
        <a href="{{ URL::route('product.deactivate', $product->id) }}"
        class="btn btn-danger">
            Desativar
        </a>
    </td>

    @else

    <td>
        <a href="{{ URL::route('product.activate', $product->id) }}"
        class="btn btn-primary">
            Ativar
        </a>
    </td>

    @endif




</tr>
