<?php 
include("cabecalho.php"); 
include("conecta.php");
?>
        <!-- Formulário criado utilizando novas tags e atributos do HTML5 e tentando manter sempre a semântica -->
        <!-- Uso também das classes do Bootstrap para melhor estilização -->
        <h1>Formulário de cadastro de produtos</h1>
        <form action="adiciona-produto.php" method="post"> <!-- Uso do POST para o envio dos dados, pois fica inviavel mandar vários parametros junto ao link-->
            <fieldset>
                <legend>Dados do Produto</legend>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" placeholder="nome do produto aqui" name="nome" class="form-control" autofocus />
                </div>
                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <input id="preco" type="number" placeholder="preço do produto aqui" name="preco" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea id="description" name="descricao" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade:</label>
                    <input id="quantidade" type="number" placeholder="quantidade aqui" name="qtde" class="form-control"/> 
                </div>
            </fieldset>
            <br/>
            <button type="submit" value="enviar" class="btn btn-primary">Cadastrar</button>
        </form>
<?php include("rodape.php"); ?>