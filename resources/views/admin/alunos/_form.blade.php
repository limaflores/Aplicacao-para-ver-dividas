<div class="input-field">
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text" name="nome" value="{{isset($registrosAlunos->nome) ? $registrosAlunos->nome : ''}}" required="">
    <label>Nome</label>
</div>


<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="input-field">
    <input type="text" name="email" value="{{isset($registrosAlunos->email) ? $registrosAlunos->email : ''}}" required="">
    <label>E-mail</label>
</div>

<div class="input-field">
    <input type="text" name="telefone" value="{{isset($registrosAlunos->telefone) ? $registrosAlunos->telefone : ''}}" required="">
    <label>Telefone</label>
</div>

<div class="input-field">
    <input type="text" name="objetivo" value="{{isset($registrosAlunos->objetivo) ? $registrosAlunos->objetivo : ''}}" required="">
    <label>Objetivo</label>
</div>

<div class="input-field">
    <input type="number" name="vo2" value="{{isset($registrosAlunos->vo2) ? $registrosAlunos->vo2 : ''}}" required="">
    <label>Vo2</label>
</div>

<div class="input-field">
    <input type="text" name="usuario" value="{{isset($registrosAlunos->usuario) ? $registrosAlunos->usuario : ''}}" required="">
    <label>Usuário</label>
</div>

<div class="input-field">
    <input type="password" name="senha" value="{{isset($registrosAlunos->senha) ? $registrosAlunos->senha : ''}}" required="">
    <label>Senha</label>
</div>

<div class="input-field">
    <input type="text" name="observacoes" value="{{isset($registrosAlunos->observacoes) ? $registrosAlunos->observacoes : ''}}" required="">
    <label>Observações</label>
</div>


