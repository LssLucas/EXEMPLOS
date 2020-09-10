<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ei=edge">
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <title>Mensagem</title>
</head>
<!-- http://localhost/PHP/AGENDA 3/EXEMPLOS//desvioSimples.php -->
<body>
    <div class="w3-container w3-teal" >
        <h1>
            <?php
                echo "Nome do Usuário".$_POST['txtNome']." ! <br>";
                //echo"Valor total da Compra: R$ ".$_POST['txtValorTotal']."<br>";
                $frete = "R$30,00";
                if($_POST['cmbRegiao'] == "Sudeste")
                {
                    echo "Em nosso mês estamos dando frete grátis para a região SUDESTE";
                    $frete = "Grátis";
                }
                echo "<br>Valor total da compra R$".$_POST['txtValorTotal']." + Frete: ".$frete.".<br>";
            ?>
        <h1>
    </div>
</body>
</html>
