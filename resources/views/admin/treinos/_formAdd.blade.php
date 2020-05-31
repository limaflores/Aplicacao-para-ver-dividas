
<!-- Form -->
<label>Objetivo</label>
<div class="input-field">
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text" name="objetivo" required="" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
</div>
<!-- Não esquecer de colocar os mesmos name do BD -->
<label>Descrição</label>
<div class="input-field">
    <input type="text" name="descricao" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
</div>
<label>Número treino</label>
<div class="input-field">
    <input type="number" name="numerotreino" required="" value="{{isset($registro->numerotreino) ? $registro->numerotreino : ''}}">
</div>

<div class="input-field">
    <input type="hidden" name="aluno" value="{{$id}}">
</div>
<label>Nome do treino</label>
<div class="input-field">
    <input type="text" name="nometreino" required="" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
</div>




