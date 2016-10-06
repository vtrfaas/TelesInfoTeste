<?php
    include("cabecalho.php");
    include("conecta.php");
    include("banco-produtos.php");
    
    $id = $_POST['id']; //Captura o id vindo da pagina de produto-lista ao clicar no botao de remover
    removeProduto($conexao, $id);
    //vamos fazer o PHP devolver 302(redicionamento) para o browser
    header("Location: produto-lista.php?removido=true"); //parametro removido para exibir a mensagem ao usuario da remoção
    die(); //sempre colocar após o HEADER - PARAR O PROCESSAMENTO
    include("rodape.php");
?>