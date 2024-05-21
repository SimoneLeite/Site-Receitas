<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        //pegando os dados vindo do formulário
        $id       = filter_input(INPUT_POST, "id" ,FILTER_SANITIZE_NUMBER_INT);
        
    
        try {
            require_once("./_conexao/conexao.php");
    
            $comandoSQL = $conexao->prepare("
            
               DELETE FROM cadastro1 WHERE id = :id

            
            ");
    
            $comandoSQL->execute(array(
                ":id"        => $id,
            
            ));
    
            if($comandoSQL->rowCount() > 0){
               // echo ("Inserido com sucesso!");
               header("location:./sabores.php");
                exit();
            }
            else{
                echo ("Erro na gravação");
            }
    
        } catch (PDOException $erro) {
            echo("Entre em contato com o suporte!");
            
        }
    
    
    
    }else{
        echo("Entre em contato com o suporte!");
    }
    