<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $jogo['titulo'] ?> - G-Max</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/jogoPage.css') ?>?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function adicionarItem(id_jogo, quantidade=1, id_carrinho=1) {
            window.location.href = '<?= base_url("carrinho/adicionarItem") ?>/' + id_jogo + '/' + quantidade + '/' + id_carrinho;
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
            <p class="stars"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></p>
            <p class="nota">4.6</p>
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
                <button class="addCarrinho" onclick="adicionarItem('<?= $jogo['id_jogo'] ?>')">Adicionar ao carrinho</button>
            </div>
        </div>
    </main>
</body>
</html>
