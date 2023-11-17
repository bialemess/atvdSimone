<?php
/* Geração de arquivo CSV */
include("../conexaoBD.php");

try {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("select * from Pedidos");
    $stmt->execute();

    $fp = fopen('arquivoPedidos.csv', 'w');
    
    $colunasTitulo = array("idPedido", "cliente", "produto", "quantidade, data");

    fputcsv($fp, $colunasTitulo);

    while ($row = $stmt->fetch()) {

        $idPedido = $row["idPedido"];
        $cliente = $row["cliente"];
        $produto = $row["produto"];
        $quantidade = $row["quantidade"];
        $data = $row["data"];

        $lista = array (
            array($idPedido, $cliente, $produto, $quantidade, $data)
        );
        
        foreach ($lista as $linha) {
            fputcsv($fp, $linha);
        }        
    }

    $msg = "Arquivo gerado: arquivoPedidos.csv";    
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

    <title>Listagem de Pedidos em CSV</title>
</head>

<body>

<div class="divCentro">
<h1>Listagem de Pedidos em CSV</h1>
    <?= $msg ?>

    <br>
    <input type="button" id="btnVoltar" value="Voltar ao menu"  onClick="window.open('../index.php', '_top')">
</div>
    
</body>
</html>