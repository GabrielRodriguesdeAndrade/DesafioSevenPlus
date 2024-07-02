
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/planos-style.css">
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <title>Seven+ - Planos</title>
</head>
<body>
    <header class="cabecalho">
        <?php include_once("headerEfooter/header.html"); ?>
    </header>
        <div class="form-container">
            <p class=escolha-plano>Escolha seu Plano</p>
            <div class="cards">
                <div class="card" onclick="escolherPlano('Premium 4K + HDR', 'R$ 59,90/mês')">
                    <div class="card-header">Premium 4K + HDR</div>
                    <div class="card-body">
                        <p>Preço/mês</p>
                        <h3>R$ 59,90</h3>
                        <p>Qualidade de vídeo e áudio</p>
                        <h3>Excepcional</h3>
                        <p>Resolução</p>
                        <h3>4K (Ultra HD) + HDR</h3>
                        <p>Áudio espacial (som imersivo)</p>
                        <h3>Incluso</h3>
                        <p>Aparelhos compatíveis</p>
                        <h3>TV, computador, celular, tablet</h3>
                        <p>Aparelhos para assistir ao mesmo tempo na sua residência</p>
                        <h3>4</h3>
                        <p>Aparelhos de download</p>
                        <h3>6</h3>
                        <p>Anúncios</p>
                        <h3>Sem anúncios</h3>
                    </div>
                </div>
                <div class="card" onclick="escolherPlano('Padrão 1080p', 'R$ 44,90/mês')">
                    <div class="card-header">Padrão 1080p</div>
                    <div class="card-body">
                        <p>Preço/mês</p>
                        <h3>R$ 44,90</h3>
                        <p>Qualidade de vídeo e áudio</p>
                        <h3>Boa</h3>
                        <p>Resolução</p>
                        <h3>1080p (Full HD)</h3>
                        <p>Aparelhos compatíveis</p>
                        <h3>TV, computador, celular, tablet</h3>
                        <p>Aparelhos para assistir ao mesmo tempo na sua residência</p>
                        <h3>2</h3>
                        <p>Aparelhos de download</p>
                        <h3>2</h3>
                        <p>Anúncios</p>
                        <h3>Sem anúncios</h3>
                    </div>
                </div>
                <div class="card" onclick="escolherPlano('Padrão com anúncios 1080p', 'R$ 20,90/mês')">
                    <div class="card-header">Padrão com anúncios 1080p</div>
                    <div class="card-body">
                        <p>Preço/mês</p>
                        <h3>R$ 20,90</h3>
                        <p>Qualidade de vídeo e áudio</p>
                        <h3>Boa</h3>
                        <p>Resolução</p>
                        <h3>1080p (Full HD)</h3>
                        <p>Aparelhos compatíveis</p>
                        <h3>TV, computador, celular, tablet</h3>
                        <p>Aparelhos para assistir ao mesmo tempo na sua residência</p>
                        <h3>2</h3>
                        <p>Aparelhos de download</p>
                        <h3>2</h3>
                        <p>Anúncios</p>
                        <h3>Menos do que você pensa</h3>
                    </div>
                </div>
            </div>
        </div>
    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>










