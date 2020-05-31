@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">
    <div class="container">
      <div class="section"> 
        <h3 class="center">Entrar</h3>
        <div class="section">     
          <div class="row">
            <form class="" action="{{route('site.login.entrar')}}" method="post" >
              {{ csrf_field() }}

              <div class="input-field">
                <input type="text" name="email" placeholder="E-mail">
                
              </div>
              <div class="input-field">
                <input type="password" name="senha" placeholder="Senha">
              </div>

              <button class="btn deep-orange">Entrar</button>
            </form>
            <!--
            <div class="section">
              <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="#">Esqueceu a sua senha?</a>
                </div>
              </div>
            </div>
          
            <div class="container">
              <form action="" id="loginForm">
                <h2>Login</h2>
                <p><label for="username">Username</label><input type="text" name="username" id="username" placeholder="username" /></p>
                <p><label for="password">Password</label><input type="password" name="password" id="password" placeholder="password" /> <input type="button" id="showPassword" value="show" class="button" /></p>
                <p><input type="submit" value="Login" class="button" /></p>
              </form>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
