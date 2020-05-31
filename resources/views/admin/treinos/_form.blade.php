    
    <!-- Form -->
    <label>Objetivo</label>
    <div class="input-field">
        <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
        <input type="text" name="objetivo" required="" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
    </div>
    <label>Número treino</label>
    <div class="input-field">
        <input type="number" name="numerotreino" required="" value="{{isset($registro->numerotreino) ? $registro->numerotreino : ''}}">
        
    </div>
    
    <div class="input-field">
        <input type="hidden" name="aluno" required="" value="{{isset($registro->aluno) ? $registro->aluno : ''}}">
    </div>
    <label>Nome do treino</label>
    <div class="input-field">
        <input type="text" name="nometreino" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
    </div>
    <!-- Não esquecer de colocar os mesmos name do BD -->
    <label>Descrição do treino</label>
    <div class="input-field">
        <!-- <input type="text" name="descricao" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"> -->
        <!--<textarea type="text" name="descricao" style="width: 20em; height: 15em;" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"></textarea>-->
        <textarea type="textarea" id="textarea1" class="materialize-textarea" name="descricao" style="width: 20em; height: 15em;" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
        <!--<label for="textarea1">Textarea</label>-->
    </div>
    
    
    
    
    