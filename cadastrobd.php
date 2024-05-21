<?php
//echo "<pre>";
 //  print_r($_POST);
 //  print_r($_SERVER["REQUEST_METHOD"]);
//echo "</pre>";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_FILES["foto"]["name"])){

        $pasta = "./imagem/";

        $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);

        $foto = $nomeOriginal;
    }
    else{
        $foto = "_perfil.jpg";
    }
    
    //pegando os dados vindo do formulário
    $titulo = filter_input(INPUT_POST, "titulo" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $ingredientes = filter_input(INPUT_POST, "ingredientes", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $modo_preparo = filter_input(INPUT_POST, "modo_preparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $qtde_pessoas = filter_input(INPUT_POST, "qtde_pessoas", FILTER_SANITIZE_NUMBER_INT);
    $tempo_preparo = filter_input(INPUT_POST, "tempo_preparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    try {
        require_once("./_conexao/conexao.php");

        $comandoSQL = $conexao->prepare("
        
            INSERT INTO cadastro1 (
                `titulo`,
                `ingredientes`,
                `modo_preparo`,
                `qtde_pessoas`,
                `tempo_preparo`,
                `foto`)
                VALUES (
                    :titulo,
                    :ingredientes,
                    :modo_preparo,
                    :qtde_pessoas,
                    :tempo_preparo,
                    :foto
                )    
        
        ");

        $comandoSQL->execute(array(
            ":titulo"        => $titulo,
            ":ingredientes"  => $ingredientes,
            ":modo_preparo"  => $modo_preparo,
            ":qtde_pessoas"  => $qtde_pessoas = intval($qtde_pessoas), 
            ":tempo_preparo" => $tempo_preparo,
            ":foto" => $foto

        ));

        if($comandoSQL->rowCount() > 0){

            if(!empty($_FILES["foto"]["name"])){
                move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
            }
            
            header("location: sabores.php");
            exit();
        }
        else{
            echo ("Erro na gravação");
        }

    } catch (PDOException $erro) {
        echo("Entre em contato com o suporteeeeee!") . $erro->getMessage();
        
    }

}else{
    echo("Entre em contato com o suporte!") . $erro->getMessage();;
}


