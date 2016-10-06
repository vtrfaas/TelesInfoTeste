<?php 
  include("cabecalho.php"); 
  include("conecta.php"); 
  include("banco-produtos.php");  

    //== Se os dois tipos forem diferentes o PHP tentará fazer a conversão
    //=== Não faz a conversão

   //se o produto for removido (capturado por meio do GET que vem da requisição do remove-produto.php) mostra a mensagem de remoção  
   if(array_key_exists("removido", $_GET) && $_GET['removido']==true){
    ?>
       <div class="panel panel-default">
            <div class="panel-body">
                <p class="alert alert-success">Produto removido com sucesso!</p>
            </div>
        </div>
<?php   
    }
   $produtos = listaProdutos($conexao);
?>
<table class="table table-striped table-bordered"> <!--Tabela estilizada com boostrap para ficar "zebrada"-->
    <?php
        foreach($produtos as $produto) : //loop para percorrer todo o array do resultado da função listaProdutos
    ?>
    <tr>
        <td><?= $produto['nome']?></td>
        <td><?= $produto['preco']?></td>
        <td><?= substr($produto['descricao'], 0, 40)?></td> <!-- Se a descrição for muito grande, somente uma parte dela é mostrada -->
        <td><?=$produto['qtde']?></td>
        <td class="text-center">
            <form action="remove-produto.php?" method="post"> <!-- Como se trata de uma deleção é melhor usar o POST -->
              <input type="hidden" name="id" value="<?=$produto['id']?>" /> <!-- Captura o id mantendo o campo escondido -->
              <button class="btn btn-danger">Remover</button> <!-- Botão de remoção estilizado com o bootstrap -->
            </form>
        </td>
    </tr>
    <?php     
       endforeach
    ?>
</table>
<?php include("rodape.php"); ?>