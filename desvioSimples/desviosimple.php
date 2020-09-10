<!DOCTYPE html>
<html lang = "pt-BR">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Mensagem</title>
    </head>
    <body>
        <div class="w3-containerw3-teal">
            <h1>
            <?php
                echo "".$_POST['txtNome']."!<br>";
                $frete = "R$30reais";
                if($_POST['cmbRegiao'] == "Sudeste"){
                    echo "Em nosso mês estamos com frete grátis para a região SUDESTE";
                    $frete = "Gratis";
                }
                echo "<br>Valor total da Compra R$".$_POST['txtValorTotal']." + Frete:".$frete."!!<br>";]
            ?>
            </h1>
        </div>
    </body>
</html>