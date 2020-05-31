@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">

    <h3 class="center">Lista de treinos</h3>

    <div class="row">
      <div class="col s4 m1">
        <div class="card">
          <div class="card-image">
            <img src="img/logo.jpg" alt="" class="circle responsive-img">
          </div>
        </div>
      </div>  
    </div>


    <div class="row">
      
      @foreach($treinos as $treino)

        <div class="col s12 m4">
          <div class="card">
            <div class="card-content">
              <h4>{{$treino->nometreino}}</h4>
              <p>{{$treino->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">Ver o treino</a>
            </div>
          </div>
        </div>
      
      @endforeach

    </div>

  </div>

@endsection
