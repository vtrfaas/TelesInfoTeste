<?php
    //Contem todas as funções necessárias para o crud
    //Assim o código fica mais fácil de ser mantido


    function insereProduto($conexao, $nome, $preco, $descricao, $qtde) {
        $query = "INSERT INTO PRODUTOS (nome, descricao, qtde, preco) VALUES ('{$nome}', '{$descricao}', {$qtde}, {$preco})"; //As chaves só funcionam se forem a string for declarada com aspas duplas
        $resultadoDaInsercao = mysqli_query($conexao, $query); //usa da nova função mysqli que foi melhorado. "i" de improved
        return $resultadoDaInsercao;
    }

    function listaProdutos($conexao){
        $produtos = array(); //$produtos = [] questões de compatibilidade;
        $resultado = mysqli_query($conexao, "SELECT * FROM produtos"); 
        while($produto = mysqli_fetch_assoc($resultado)) { //Como podemos ter varios produtos, usei a funcao mysqi_fetch_assoc para capturar os resultados da query
            array_push($produtos, $produto);
        }
        return $produtos;
    }
    function removeProduto($conexao, $id){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaProduto($conexao, $id){
        $query = "SELECT * FROM produtos WHERE id = {$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }
