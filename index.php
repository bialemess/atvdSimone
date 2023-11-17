<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de arquivo CSV - Bianca Lemes Costa</title>
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

        img{
            width: 400px;
        }
        
        .divCentro{
            width: 400px;
            background-color: darkcyan;
            margin: 30px auto auto auto;
            text-align: center;
            padding: 20px;
            border: 1px solid darkcyan;
            border-radius: 2%;   
            margin-top: 10%;
        }

       
        
    </style>
</head>
<body>
    <div class="divCentro">
        <h1>Gerador de arquivo CSV</h1>
        <br>
        <img src="https://img.freepik.com/vetores-gratis/composicao-isometrica-de-entrega-logistica-de-entrega-com-caracteres-humanos-sem-rosto-de-dois-trabalhadores-do-sexo-masculino-e-ilustracao-de-rack-de-encomendas_1284-29116.jpg">
        <br>
       
        <br>
        <input type="button" id="btnGerarProdutos" value="Gerar arquivo referente a Produtos"  onClick="window.open('gerador/geraProduto.php', '_top')">
        <br>
        <br>
        <input type="button" id="btnGerarClientes" value="Gerar arquivo referente a Clientes"  onClick="window.open('gerador/geraCliente.php', '_top')">
        <br>
        
        <br>
        <input type="button" id="btnGerarPedidos" value="Gerar arquivo referente a Pedidos"  onClick="window.open('gerador/geraPedido.php', '_top')">
        <br>
        
    </div>
</body>
</html>