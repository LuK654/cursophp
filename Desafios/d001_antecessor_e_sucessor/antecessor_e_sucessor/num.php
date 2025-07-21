<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
        $numero = $_REQUEST["numero"] ?? 0;
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>O número escolhido foi <strong>$numero</strong>";
        echo "<p>O seu <i>antecessor</i> é $antecessor";
        echo "<p>O seu <i>sucessor</i> é $sucessor</strong>";
        ?>

        <p><a href="javascript:history.go(-1)">🔙Voltar para a página anterior</a></p>
    </main>

</body>
</html>