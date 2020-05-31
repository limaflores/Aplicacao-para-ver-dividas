@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
<div class="container">
    
    <h3 class="center">Adicionar treino</h3>

    <div class="row">
        <form class="" action="{{route('admin.treinos.salvar')}}" method="post">
            {{ csrf_field()}}
            @include('admin.treinos._formAdd')
            <button class="btn deep-orange">Salvar</button>
        </form>
    </div>

</div>




@endsection
