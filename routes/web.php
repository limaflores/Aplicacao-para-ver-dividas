<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* //Foi substituido pelo "Route::get('/',['as'=>'site.home', 'uses'=>'Site\HomeController@index']);".
Route::get('/', function () {
    return view('home');
});
*/
//Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);

Route::get('/',['as'=>'site.login','uses'=>'Site\LoginController@index']);
/*
Route::get('/teste', function(){
    echo "Ola!";
});
*/

//Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

//Rota para o login.
Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

//Protege as rotas para serem usadas somente por usuário logado.
Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/admin/alunos',['as'=>'admin.alunos', 'uses'=>'Admin\AlunoController@index']);
    Route::get('/admin/alunos/adicionar',['as'=>'admin.alunos.adicionar', 'uses'=>'Admin\AlunoController@adicionar']);
    Route::post('/admin/alunos/salvar',['as'=>'admin.alunos.salvar', 'uses'=>'Admin\AlunoController@salvar']);
    Route::get('/admin/alunos/editar{id}',['as'=>'admin.alunos.editar', 'uses'=>'Admin\AlunoController@editar']);
    Route::put('/admin/alunos/atualizar{id}',['as'=>'admin.alunos.atualizar', 'uses'=>'Admin\AlunoController@atualizar']);
    Route::get('/admin/alunos/deletar{id}',['as'=>'admin.alunos.deletar', 'uses'=>'Admin\AlunoController@deletar']);
    Route::get('/admin/alunos/visualizar{id}',['as'=>'admin.alunos.visualizar', 'uses'=>'Admin\AlunoController@visualizar']);
//    Route::get('/admin/alunos/visualizar{id}',['as'=>'admin.alunos.vertreinos', 'uses'=>'Admin\AlunoController@vertreinos']);


//    Route::get('/admin/treinos',['as'=>'admin.vertreinos', 'uses'=>'Admin\TreinoController@vertreinos']);
    Route::get('/admin/treinos/visualizarlista{id}',['as'=>'admin.treinos.visualizarlista', 'uses'=>'Admin\TreinoController@visualizarlista']);

    Route::get('/admin/treinos',['as'=>'admin.treinos', 'uses'=>'Admin\TreinoController@index']);

//    Route::get('/admin/treinos/adicionar',['as'=>'admin.treinos.adicionar', 'uses'=>'Admin\TreinoController@adicionar']);
    //Route::get('/admin/treinos/adicionar',['as'=>'admin.treinos.adicionar', 'uses'=>'Admin\TreinoController@adicionar']);
    
    Route::get('/admin/treinos/adicionar{id}',['as'=>'admin.treinos.adicionar', 'uses'=>'Admin\TreinoController@adicionar']);

    Route::post('/admin/treinos/salvar',['as'=>'admin.treinos.salvar', 'uses'=>'Admin\TreinoController@salvar']);

    Route::get('/admin/treinos/editar{id}',['as'=>'admin.treinos.editar', 'uses'=>'Admin\TreinoController@editar']);

    Route::put('/admin/treinos/atualizar{id}',['as'=>'admin.treinos.atualizar', 'uses'=>'Admin\TreinoController@atualizar']);

    Route::get('/admin/treinos/deletar{id}',['as'=>'admin.treinos.deletar', 'uses'=>'Admin\TreinoController@deletar']);
    Route::get('/admin/treinos/visualizar{id}',['as'=>'admin.treinos.visualizar', 'uses'=>'Admin\TreinoController@visualizar']);

});