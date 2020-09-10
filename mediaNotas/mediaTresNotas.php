<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="http://w3schools.com/w3css/4/w3.css">
    <title>Desvio Condicional composto</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Calculo de Média e Resultado Final</h2>
    </div>
    <form class="w3-container" method="post" action="mediaTresNotas_acao.php">
        <label class="w3-text-teal">
            <b>
                Nome do Aluno
            </b>
        </label>
        <input class="w3-input w3-border w3-light-gray" name="txtNome" type="text">
        <label class="w3-text-leal">
            <b>
                1ª Nota
            </b>
        </label>
        <input class="w3-input w3-border w3-light-gray" name="txtN1" type="number">
        <label class="w3-text-leal">
        <b>
            2ª Nota
        </b>
        </label>
        <input class="w3-input w3-border w3-light-gray" name="txtN2" type="number">
        <label class="w3-text-leal">
        <b>
            3ª Nota
        </b>
        </label>
        <input class="w3-input w3-border w3-light-gray" name="txtN3" type="number">
        <br>
        <button class="w3-btn w3-blue-grey">
            Calcular Média
        </button>
    </form>
</body>
</html>