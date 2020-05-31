@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de treinos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <th>Objetivo</th>
            <th>Descrição</th>
            <th>Número do treino</th>
            <th>Aluno</th>
            <th>Nome do treino</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <!-- <td>{{ $registro->id }}</td> -->
              <td>{{ $registro->objetivo }}</td>
              <td>{{ $registro->descricao }}</td>
              <td>{{ $registro->numerotreino }}</td>
              <td>{{ $registro->aluno }}</td>
              <td>{{ $registro->nometreino }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.treinos.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.treinos.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <!-- <a class="btn blue" href="{{ route('admin.treinos.adicionar') }}">Adicionar</a> -->

    </div>

  </div>




@endsection
