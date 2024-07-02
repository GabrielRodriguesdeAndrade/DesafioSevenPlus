<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/pagamento-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Seven+ - Pagamento</title>
</head> 
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div class="form-opacidade"></div>
        <div class="form-container">
            <form id="pagamento_form" method="post" action="pagamento_process.php" onsubmit="return validarForm()">
                <h2><strong>Dados de Pagamento</strong></h2>
                <label>Nome no Cartão</label>
                <input type="text" name="nome_cartao" required>
                <label>Número do Cartão</label>
                <input type="text" name="numero_cartao" id="numero_cartao" placeholder="0000 0000 0000 0000" maxlength="19" required>
                <label>Código de Validação</label>
                <input type="text" name="codigo_validacao" required>
                <label>Vencimento</label>
                <input type="text" name="vencimento" id="vencimento" placeholder="MM/AA" maxlength="5" required>
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" required>
                <button type="submit">Próxima Etapa</button>
            </form>
        </div>
    </main>
    <footer class=rodape>
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
    <script src="js/js-aula07.js" lang="javaScript" type="text/javaScript" charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>