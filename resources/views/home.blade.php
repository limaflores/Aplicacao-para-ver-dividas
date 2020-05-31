@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">

    <h3 class="center">Lista de treinos</h3>

    <div class="row">
      <div class="col s6 m2">
        <div class="card">
          <div class="card-image">
            <img src="img/logo.jpg" alt="" class="circle responsive-img">
          </div>
        </div>
      </div>  
    </div>


    <div class="row">
      
      @foreach($treinos as $treino)

        <div class="collection">
          <a href="#!" class="collection-item">{{$treino->nometreino}}<p>{{$treino->descricao}}</p></a>
        </div>
            
      @endforeach

    </div>

  </div>

@endsection
