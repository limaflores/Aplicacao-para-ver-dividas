@extends('layout.site')

@section('titulo','Alunos')

@section('conteudo')
<div class="container">
    
    <h3 class="center">Editar Aluno</h3>

    <div class="row">
        <form class="" action="{{route('admin.alunos.atualizar',$registrosAlunos->id)}}" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.alunos._form')
            <button class="btn deep-orange">Atualizar</button>

        </form>
    </div>

</div>




@endsection
