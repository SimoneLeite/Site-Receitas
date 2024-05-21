<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas :: Cadastro</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

    <div class="container">
        <?php  require_once("./_menu.php"); ?>
        <img src="./img/logo.png" alt="logo"class="logo">
    </div>

        <?php
            require_once("./excluirbd_view.php");
        ?>

    <div class="fundoTitulo">
        <h1 class="titulo">Deseja excluir?</h1>
    </div>
        <div class="formulario">
            <form action="excluirbd.php" method="post">
            <input type="hidden" name="id" value="<?php echo $retorno['id'];?>">
        

        <div class="row">
            <div class="col">
                <label for="titulo" >Titulo</label>
                <input
                    type="text" 
                    name="titulo" 
                    id ="titulo" 
                    placeholder="titulo"
                    value="<?=$retorno['titulo'];?>"
                    disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="ingredientes">ingredientes</label>
                <input
                    type="text" 
                    name="ingredientes" 
                    id ="ingredientes" 
                    placeholder="ingredientes"
                    value="<?=$retorno['ingredientes'];?>"
                    disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="modo_preparo">modo_preparo</label>
                <input
                    type="text" 
                    name="modo_preparo" 
                    id ="modo_preparo" 
                    placeholder="Modo de Preparo"
                    value="<?=$retorno['modo_preparo'];?>"
                    disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="qtde_pessoas">qtde_pessoas</label>
                <input
                    type="text" 
                    name="qtde_pessoas" 
                    id ="qtde_pessoas" 
                    placeholder="Quantidade de Pessoas"
                    value="<?=$retorno['qtde_pessoas'];?>"
                    disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="tempo_preparo">tempo_preparo</label>
                <input
                    type="text" 
                    name="tempo_preparo" 
                    id ="tempo_preparo" 
                    placeholder="Tempo de Preparo"
                    value="<?=$retorno['tempo_preparo'];?>"
                    disabled>
            </div>
        </div>
        
                <div class="row">
                    <input 
                        type="button" 
                        value="VOLTAR"
                        onclick="javascript:history.go(-1)">
                    <input 
                        type="submit"
                        value="E X C L U I R">
                </div>
            </form>   

        </div>
       
    
    </div>
    
    
</body>
</html>