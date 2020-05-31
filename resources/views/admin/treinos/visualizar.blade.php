@extends('layout.site')

@section('titulo','Treino')

@section('conteudo')
  <div class="container">
    <h3 class="center">Perfil do treino</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <div>
                <th>Objetivo</th>
                <div>
                    
                    <td>{{ $registros->objetivo }}</td>
                </div>
            </div>
          </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td>{{ $registros->id }}</td> -->
                <div>
                    <tr>
                        <td>Descrição</td>
                        <td>{{ $registros->descricao }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Número treino</td>
                        <td>{{ $registros->numerotreino }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Aluno</td>
                        <td>{{ $registros->aluno }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Nome treino</td>
                        <td>{{ $registros->nometreino }}</td>
                    </tr>
                </div>
                <td>
                    <a class="btn deep-orange" href="{{ route('admin.treinos.editar',$registros->id) }}">Editar</a>
                </td>
                <td>
                    <a class="btn red"style="padding:0 1.55rem;" href="{{ route('admin.treinos.deletar',$registros->id) }}">Deletar</a>
                </td>
                <td>
                    
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                            
                </td>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="row">

    </div>

  </div>



@endsection
