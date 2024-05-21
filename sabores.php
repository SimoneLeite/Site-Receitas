<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Receitas :: sabores</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"/>

   
</head>
<body>
    <div class="container">
        <?php 
            require_once("./_menu.php"); 
        ?>
        <img src="./img/logo.png" alt="logo" class="logo">
    </div>
   
    <div class="fundoTitulo">
        <h1 class="titulo">Sabores de Minas</h1>
    </div>
    
    <div class ="conteudo"

        <div class="escopo">
             <?php
                 require_once("./saboresbd.php");
                if($totalRegistros > 0){
                    foreach($dados as $linha){
            
            ?>

            <div class="card">

                <div class="foto">
                    <img src="./imagem/<?=$linha['foto'];?>" alt="foto" class="foto" width="250">
                </div>

                <div class="info">
                    <h2><?=$linha["titulo"];?></h2>
                    <p><strong>Ingredientes:</strong> <?= nl2br($linha["ingredientes"]);?></p>
                    <p><strong>Modo de Preparo:</strong> <?= nl2br($linha["modo_preparo"]);?></p>
                    <p><strong>Quantidade de Pessoas:</strong> <?=$linha["qtde_pessoas"];?></p>
                    <p><strong>Tempo de Preparo:</strong> <?=$linha["tempo_preparo"];?></p>
                 </div>  
            
                

                <div class="btnDireita">
                    <form action="./editar.php?id=<?=$linha['id'];?>" method="post">
                        <button type="submit" class="btnEditar">Editar</button>
                    </form>

                    <form action="./excluir.php?id=<?=$linha['id'];?>" method="post">
                        <button type="submit" class="btnExcluir">Excluir</button>
                    </form>
                </div>
            </div>

            <?php
                }
            } else{
                echo "<p>Nenhuma receita encontrada.</p>";
            } 
            ?> 
        
        
        </div>
    </div>
</body>
</html>

