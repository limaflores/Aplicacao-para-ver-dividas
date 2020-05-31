@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de treinos</h3>
    @foreach($registrosAlunos as $registroAluno)
      <h5>{{ $registroAluno->nome }}</h5>
    @endforeach
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <!-- <th>IdAluno</th> -->
            <!-- <th>Objetivo</th> -->
            <!-- <th>Descrição</th> -->
            <th>Número do treino</th>
            <!-- <th>Aluno</th> -->
            <th>Nome do treino</th>
          </tr>
        </thead>
        <tbody>

          @foreach($registros as $registro)
          
        
            <tr>
              <!-- <td>{{ $id }}</td> -->
              <!-- <td>{{ $registro->id }}</td> -->
              <!-- <td>{{ $registro->objetivo }}</td> -->
              <!-- <td>{{ $registro->descricao }}</td> -->
              <td>{{ $registro->numerotreino }}</td>
              <!-- <td>{{ $registro->aluno }}</td> -->
              <td>{{ $registro->nometreino }}</td>
              

              <td>
                <a class="btn deep-orange" href="{{ route('admin.treinos.editar',$registro->id) }}">Editar</a>
                <!-- <a class="btn red" href="{{ route('admin.treinos.deletar',$registro->id) }}">Deletar</a> -->

                <div class="row section">
                  <div class="col">
                    <!-- Modal Trigger -->
                    <a class="btn red modal-trigger" style="width: 90%;" href="#modal1">Deletar</a>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Confirma?</h4>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancela</a>
                    <a href="{{ route('admin.treinos.deletar',$registro->id) }}" class=" modal-action modal-close waves-effect waves-green btn-flat">Sim</a>
                  </div>
                </div>
                        
              </td>
            </tr>
            
          
     
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">

      <a class="btn blue" href="{{ route('admin.treinos.adicionar', $id) }} ">Adicionar</a>
      


    </div>

  </div>




@endsection
