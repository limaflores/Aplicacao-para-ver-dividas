@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
<div class="container">
    
    <h3 class="center">Editar treino</h3>

    <div class="row">
        <form class="" action="{{route('admin.treinos.atualizar',$registro->id)}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.treinos._form')
            <button class="btn deep-orange">Atualizar'</button>

        </form>
    </div>

</div>




@endsection
