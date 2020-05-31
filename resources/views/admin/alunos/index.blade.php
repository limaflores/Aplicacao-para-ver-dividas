@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de alunos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <th>Nome</th>
            <!-- <th>E-mail</th> -->
            <!-- <th>Telefone</th> -->
            <!-- <th>Objetivo</th> -->
            <!-- <th>Vo2</th> -->
            <!-- <th>Usuário</th> -->
            <!-- <th>Observações</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($registrosAlunos as $registroAluno)
            <tr>
              <!-- <td>{{ $registroAluno->id }}</td> -->
              <td>{{ $registroAluno->nome }}</td>
              <!-- <td>{{ $registroAluno->email }}</td> -->
              <!-- <td>{{ $registroAluno->telefone }}</td> -->
              <!-- <td>{{ $registroAluno->objetivo }}</td> -->
              <!-- <td>{{ $registroAluno->vo2 }}</td> -->
              <!-- <td>{{ $registroAluno->usuario }}</td> -->
              <!-- <td>{{ $registroAluno->observacoes }}</td> -->
              <td>
                <a class="btn green" style="padding:0 1.8rem;" href="{{ route('admin.alunos.visualizar',$registroAluno->id) }}">Ver</a>
                <a class="btn deep-orange" style="padding:0 1rem;" href="{{ route('admin.alunos.editar',$registroAluno->id) }}">Editar</a>
                <!-- <a class="btn red" href="{{ route('admin.alunos.deletar',$registroAluno->id) }}">Deletar</a> -->
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.alunos.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection
