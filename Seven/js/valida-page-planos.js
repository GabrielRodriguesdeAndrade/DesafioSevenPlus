function escolherPlano(plano, preco) {
    fetch('planos.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'tipo_plano=' + encodeURIComponent(plano) + '&preco=' + encodeURIComponent(preco)
    })
        .then(response => response.text())
        .then(data => {
            window.location.href = 'pagamento.php';
        });
}