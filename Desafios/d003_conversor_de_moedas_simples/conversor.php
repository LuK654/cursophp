<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            //Cotação dólar 21/07/25
            $dolar_atual = 5.56;    

            //Quanto $$ eu tenho
            $real = $_REQUEST["carteira"] ?? 0;       

            //Equivalência em dólar
            $dolar = $real / $dolar_atual;

            //"number_format() formata casas com virgula com quantidade após e com ordem dos separadores (Abaixo um codigo simples e um mais profissional)

            //echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");
            
            
            //Formatação de moedas com internacionalização! (Deixando mais profissional!) [Biblioteca intl {Internalization PHP}]
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD" ) . "</strong></p>";
            
        ?>
        <!-- Cria um botão de retorno para a pagina anterior -->
        <button onclick="javascript:history.go(-1)">Voltar</button> 
    </main>
</body>
</html>