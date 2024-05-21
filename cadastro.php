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
        <?php 
            require_once("./_menu.php"); 
        ?>
        <img src="./img/logo.png" alt="logo"class="logo">
    </div>

    <div class="fundoTitulo">
        <h1 class="titulo">Cadastro</h1>
    </div>

    <div class="formulario">
        <form action="cadastrobd.php" method="post" enctype="multipart/form-data">
            <div class="row">
                    <label for="titulo" >Título da Receita</label>
                    <input
                        type="text" 
                        name="titulo" 
                        id ="titulo" 
                        placeholder="Título da Receita">
                
            </div>

            <div class="row">
               
                    <label for="ingredientes">Ingredientes</label>
                    <textarea name="ingredientes" id="ingredientes" rows="4" cols="1"></textarea>
               
            </div>

            <div class="row">
                
                    <label for="modo_preparo">Modo de preparo</label>
                    <textarea name="modo_preparo" id="modo_preparo" rows="4" cols="1"></textarea>
                
            </div>

            <div class="row">
                
                    <label for="qtde_pessoas">Quantidade de Pessoas</label>
                    <input
                        type="text" 
                        name="qtde_pessoas" 
                        id ="qtde_pessoas" 
                        placeholder="Digite a quantidade de pessoas">
            
            </div>

            <div class="row">
               
                    <label for="tempo_preparo">Tempo de Preparo</label>
                    <input 
                        type="text"
                        name="tempo_preparo"
                        id="tempo_preparo"
                        placeholder="Digite o tempo de preparo(ex: 30minutos)">
                
            </div>
            
            <div class="row">
                <input type="file" name="foto" id="foto" class="foto">
            </div>
            
            <div class="row">
                <input 
                    type="button" 
                    value="VOLTAR"
                    onclick="javascript:history.go(-1)">
                <input 
                    type="submit"
                    value="S A L V A R">
            </div>

        </form>
    </div>
    
</body>
</html>