<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cadastro-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Seven+ - Cadastro</title>
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div class="form-opacidade"></div>
        <div class="form-container">
            <form id="cadastro" method="post" action="cadastro_process.php">
                <h2><strong>Cadastro</strong></h2>
                <label>Nome</label>
                <input type="text" name="nome" required>
                <label>E-mail</label>
                <input type="email" name="email" required>
                <label>Senha</label>
                <input type="password" name="senha" required>
                <label>Confirme a Senha</label>
                <input type="password" name="confirmar_senha" required>
                <button type="submit">Próxima Etapa</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>
