<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $jogo['titulo'] ?> - G-Max</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/jogoPage.css') ?>?v=<?= time() ?>">
    <script>
    function mudarQnt(id_item, delta) {
        window.location.href = '<?= base_url("carrinho/mudarQuantidade") ?>/' + id_item + '/' + delta;
    }
    </script>
</head>
<body>
    <header id='mainHeader'>
        <nav id='mainNav'>
            <div>
                <img id='logoHeader' src="<?php echo base_url('assets/img/icon_Gmax.ico') ?>" alt="Logo G-Max">
                <p>Carrinho</p>
            </div>
            <a href="https://help.steampowered.com/pt/" target="_blank">Precisa de ajuda?</a>
            <a href="<?= base_url('carrinho') ?>">Carrinho</a>
        </nav>
    </header>
    <main class="mainJogo">
        <div class="heading">
            <h1 class="nomeJogo"><?= $jogo['titulo'] ?></h1>
            <p class="nota"><?= number_format($jogo['preco'], 2, ',', '.') ?> BRL</p>
        </div>
        <div class="wrapLeft">
            <div class="imgDiv">
                <img src="<?= $jogo['url'] ?>" alt="<?= $jogo['titulo'] ?>" class="imgJogo">
            </div>
            <p class="descricao"><?= $jogo['descricao'] ?></p>
            <div class="categorias">
                <h4 class="categoriasTitulo">Categoria</h4>
                <p class="categoria"><?= $jogo['nome_categoria'] ?></p>
            </div>
        </div>
        <div class="wrapRight">
            <div class="divPreco">
                <p class="precoDepois">R$ <?= number_format($jogo['preco'], 2, ',', '.') ?></p>
            </div>
            <div class="botoesDiv">
                <button class="compre">Compre agora</button>
                <button class="addCarrinho">Adicionar ao carrinho</button>
            </div>
        </div>
    </main>
</body>
</html>
