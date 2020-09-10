<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Operador Ternario</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>
            Valor Final da Compra
        </h2>
    </div>
    <form class="w3-container" method="post" action="operadorTernario_acao.php">
        <labal class="w3-text-teal">
            <b>
                Nome do Usuário
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey" name="txtName" type="text">
        <label>
            <b>
                Valor Total da Compra
            </b>
        </label>
        <input class="w3-input w3-border w3-light-grey" name="txtValorTotal" type="number">
        <br>
        <button class="w3-btn w3-blue-grey">
            Enviar
        </button>
    </form>
</body>
</html>