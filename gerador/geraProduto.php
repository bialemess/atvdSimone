<?php
/* Geração de arquivo CSV */
include("../conexaoBD.php");

try {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("select * from Produto");
    $stmt->execute();

    $fp = fopen('arquivoProduto.csv', 'w');
    
    $colunasTitulo = array("id", "nome", "setor", "unidademedida, quantidadeEstoque");

    fputcsv($fp, $colunasTitulo);

    while ($row = $stmt->fetch()) {

        $id = $row["id"];
        $nome = $row["nome"];
        $setor = $row["setor"];
        $unidademedida = $row["unidademedida"];
        $quantidadeEstoque = $row["quantidadeEstoque"];

        $lista = array (
            array($id, $nome, $setor, $unidademedida, $quantidadeEstoque)
        );
        
        foreach ($lista as $linha) {
            fputcsv($fp, $linha);
        }        
    }

    $msg = "Arquivo gerado: arquivoProduto.csv";    
    fclose($fp);

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        
        body{
            background-color: gainsboro;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        
       
        input{
            background-color: gray;
            color: lightcyan;
            padding: 10px;
            margin: 5px;
            border-radius: 20%;
            border-color: darkcyan;

        }
        
        h1{
            color: white;
        }

       
        
        .divCentro{
            width: 400px;
            background-color: darkcyan;
            margin: 30px auto auto auto;
            text-align: center;
            padding: 20px;
            border: 1px solid darkcyan;
            border-radius: 2%;   
            margin-top: 15%;
        }

        
        
    </style>

    <title>Listagem de Produtos em CSV</title>
</head>

<body>

<div class="divCentro">
<h1>Listagem de Produtos em CSV</h1>
    <?= $msg ?>
    
<br>
    <input type="button" id="btnVoltar" value="Voltar ao menu"  onClick="window.open('../index.php', '_top')">

</div>
    
</body>
</html>