<?php

    // Incluindo arquivos url e connection para caminho de arquivos e conexão com Banco de Dados
    include_once("url.php");
    include_once("connection.php");

    // Executa uma consulta sql obtendo todos os dados dos produtos inseridos na tabela do sql
    $produtos = "SELECT * FROM produtos";
    $result = mysqli_query($conn, $query);

    // Verifica se a consulta teve êxito
    if($result){

        // Cria um array para armazenar os produtos
        $produtos = array();

        // Cria um loop baseado nos resultados da consulta
        while($row = mysqli_fetch_assoc($result)){

            // Adiciona cada produto ao array
            $produtos[] = $row;
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($conn);

        // Verifica se há produtos no array antes de processar
        if(!empty($produtos)){
            // Loop de busca através de cada produto
            foreach ($produtos as $key => $value) {
        }
    }
?>

