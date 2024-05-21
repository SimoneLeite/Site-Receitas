<?php
    require_once("./_conexao/conexao.php");

    try {
        // variável que contém a instrução SQL a ser executado
        $comandoSQL = "SELECT * FROM cadastro1 ORDER BY id DESC";

        // comando para executar a instrução SQL no bando
        $dadosSelecionados = $conexao->query($comandoSQL);

        // transforma os dados vindo do banco em uma matriz
        $dados = $dadosSelecionados->fetchAll();

        //total de registros retornardos da consulta
        $totalRegistros = $dadosSelecionados->rowCount();

    } catch (PDOException $erro) {
      // echo $erro->getMessage()
      echo("Entre em contato com o suporte!");
    }