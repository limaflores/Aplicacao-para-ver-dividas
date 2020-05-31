@extends('layout.site')

@section('titulo','Aluno')

@section('conteudo')
  <div class="container">
    <h3 class="center">Perfil do aluno</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <div>
                <th>Nome</th>
                <div>
                    <td>{{ $registrosAlunos->nome }}</td>
                </div>
            </div>
          </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td>{{ $registrosAlunos->id }}</td> -->
                <div>
                    <td>E-mail</td>
                    <td>{{ $registrosAlunos->email }}</td>
                </div>
                <div>
                    <tr>
                        <td>Telefone</td>
                        <td>{{ $registrosAlunos->telefone }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Objetivo</td>
                        <td>{{ $registrosAlunos->objetivo }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Vo2</td>
                        <td>{{ $registrosAlunos->vo2 }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Usuário</td>
                        <td>{{ $registrosAlunos->usuario }}</td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>Observações</td>
                        <td>{{ $registrosAlunos->observacoes }}</td>
                    </tr>
                </div>
                <tr>
                    <td>
                        <a class="btn gray"style="padding:0 1.55rem; width:100%;" href="{{ route('admin.treinos.visualizarlista',$registrosAlunos->id) }}">Treinos</a>
                    </td>
                </tr>
                <td>
                    <a class="btn deep-orange" href="{{ route('admin.alunos.editar',$registrosAlunos->id) }}">Editar</a>
                </td>
                <td>
                    <!-- <a class="btn red"style="padding:0 1.55rem;" href="{{ route('admin.alunos.deletar',$registrosAlunos->id) }}">Deletar</a> -->
                    
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
                        <a href="{{ route('admin.alunos.deletar',$registrosAlunos->id) }}" class=" modal-action modal-close waves-effect waves-green btn-flat">Sim</a>
                        </div>
                    </div>
                    
                </td>
                <td>
                    
                    <!-- Modal Trigger -->
                    <!--
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                    -->

                    <!-- Modal Structure -->
                    <!--
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                    -->                            
                </td>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="row">

    </div>

  </div>



@endsection
