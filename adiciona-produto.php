<?php include("cabecalho.php"); 
    include("conecta.php");          //Reaproveitar o código
    include("banco-produtos.php")
?>
    <?php 
        //Lê o array de POST que vem da página de produto-formulário e atribui as suas respectivas variaveis, invocando assim a função para inserção no BD
        $nome = $_POST["nome"];  
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $qtde = $_POST["qtde"];
        //Se der certo mostra msg de sucesso, senão msg de erro ao usuário e os termos técnicos do erro.
        if(insereProduto($conexao, $nome, $preco, $descricao, $qtde)) {
    ?>
                <p class="text-success text-center">Produto <?= $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!</p>          
    <?php  
        }else {
    ?>
                $msg = mysqli_error($conexao);
                <p class="text-danger">Produto <?= $nome; ?>, não foi adicionado: <?= $msg ?></p>          
    <?php
        }
        mysqli_close($conexao) //o mysql fecha a conexao automaticamente, sendo opcional essa declaração
    ?>
<?php include("rodape.php"); ?>