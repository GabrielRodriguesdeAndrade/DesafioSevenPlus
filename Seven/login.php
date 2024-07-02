<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Seven+ - Login</title>
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
    <main>
        <div class="form-container"></div>
        <div class = "form-opacidade">
                <form id="cadastro" method="post" action="cadastro_process.php">
                    <h2><strong>Login</strong></h2>
                    <label>E-mail</label>
                    <input type="email" name="email" required>
                    <label>Senha</label>
                    <input type="password" name="senha" required>
                    <p>Esqueceu sua senha? <a href="esqueci-senha.html"><b>Clique aqui</b></a></p>
                    <button type="submit">Entrar</button>
                </form>
    </main>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>
