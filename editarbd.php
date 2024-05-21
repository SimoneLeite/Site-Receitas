<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $foto = "";

        if(!empty($_FILES["foto"]["name"])){
            
            $pasta = "./imagem/";
            
            $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);
    
            $foto = $nomeOriginal;
        }
    
        //pegando os dados vindo do formulário]
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $titulo       = filter_input(INPUT_POST, "titulo" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ingredientes    = filter_input(INPUT_POST, "ingredientes" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $modo_preparo = filter_input(INPUT_POST, "modo_preparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qtde_pessoas = filter_input(INPUT_POST, "qtde_pessoas", FILTER_SANITIZE_NUMBER_INT);
        $tempo_preparo   = filter_input(INPUT_POST, "tempo_preparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        //$foto   = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
        try {
            require_once("./_conexao/conexao.php");

            if (empty($foto)) {
                $comandoSQL = $conexao->prepare("
                    UPDATE cadastro1 SET
                        id= :id,
                        titulo = :titulo,
                        ingredientes = :ingredientes,
                        qtde_pessoas =  :qtde_pessoas,
                        modo_preparo = :modo_preparo,
                        tempo_preparo= :tempo_preparo
                    WHERE id = :id
                ");

                $comandoSQL->execute(array(
                    ":id"  => $id = intval($id),
                    ":titulo"        => $titulo,
                    ":ingredientes"  =>  $ingredientes,
                    ":qtde_pessoas"  => $qtde_pessoas = intval($qtde_pessoas),
                    ":modo_preparo"  => $modo_preparo,
                    ":tempo_preparo" => $tempo_preparo
                ));
                
                
            } else {
            
                $comandoSQL = $conexao->prepare("
                    UPDATE cadastro1 SET
                        id= :id,
                        titulo = :titulo,
                        ingredientes = :ingredientes,
                        qtde_pessoas =  :qtde_pessoas,
                        modo_preparo = :modo_preparo,
                        tempo_preparo= :tempo_preparo,
                        foto= :foto
                    WHERE id = :id
            
            ");

            $comandoSQL->execute(array(
                ":id"  => $id = intval($id),
                ":titulo"        => $titulo,
                ":ingredientes"  =>  $ingredientes,
                ":qtde_pessoas"  => $qtde_pessoas = intval($qtde_pessoas),
                ":modo_preparo"  => $modo_preparo,
                ":tempo_preparo" => $tempo_preparo,
                ":foto" => $foto
            ));

            }
    
    
            if($comandoSQL->rowCount() >= 0){

                if(!empty($_FILES["foto"]["name"])){
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                }
                
                header("location: sabores.php");
                exit();
            }
            else{
                echo ("Erro ao editar dados");
                echo($foto);
            }
        }catch (PDOException $erro) {
             echo("Entre em contato com o suporte!");
        }
    }
    else{
         echo("Entre em contato com o suporte!");
    }