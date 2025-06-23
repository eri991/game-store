<!DOCTYPE html>
<html>
<head>
    <title>G-Max</title>
    <link rel="icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/carrinhoPage.css'); ?>?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header id='mainHeader'>
    <nav id='mainNav'>
        <div>
            <a href="<?= base_url('telainicial') ?>"><img id='logoHeader' src="<?php echo base_url('assets/img/icon_Gmax.ico') ?>" alt="Logo G-Max"></a>
        </div>
        <a href="https://help.steampowered.com/pt/" target="_blank">Precisa de ajuda?</a>
        <a href="<?= base_url('carrinho') ?>">Carrinho</a>
    </nav>
</header>

<main class='mainCarrinho'>

<?php if (empty($itens)): ?>
    <div style="width:100%; display:flex; justify-content:center; align-items:center; flex-direction:column; text-align:center; color:white; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <img src="<?= base_url('assets/img/carrinho.png') ?>" alt="Carrinho vazio" style="width: 100px; margin-bottom: 2rem;">
        <h2 style="font-size:2rem; color:blueviolet;">Seu carrinho está vazio</h2>
        <p style="font-size:1.2rem; margin-top:0.5rem;">Que tal explorar a loja e encontrar algo que você goste?</p>
        <a href="<?= base_url() ?>" class="botao-retorno">Voltar para a loja</a>
    </div>
<?php else: ?>

    <div class="listaProdutos">
        <?php foreach($itens as $item): ?>
            <div class="linhaProduto">
                <div class="wrapProduto">
                    <div class="qntProduto">
                        <button class="aumentarQnt" onclick="mudarQnt(<?= $item->id_item ?>, 1)">&plus;</button>
                        <p class="qntSelecionada"><?= $item->quantidade ?></p>
                        <button class="diminuirQnt" onclick="mudarQnt(<?= $item->id_item ?>, -1)">&minus;</button>
                    </div>
                    <div class="imgLinhaProduto">
                        <img src="<?= htmlspecialchars($item->url) ?>" alt="Imagem do jogo">
                    </div>
                    <div class="infosProduto">
                        <p class='tituloProduto'><?= htmlspecialchars($item->titulo) ?></p>
                        <p class="descProduto"><?= htmlspecialchars($item->descricao) ?></p>
                        <p class="precoProduto">R$ <?= number_format($item->preco, 2, ',', '.') ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cardPrecos">
        <div class="cabecalhoResumo">
            <h3>Resumo</h3>
            <div class="imagensProdutos">
                <?php foreach($itens as $item): ?>
                <div class="imgResumo">
                    <img src="<?= htmlspecialchars($item->url) ?>" alt="Imagem do jogo" width="50" style="font-size: 12px;">
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="listaPrecos">
            <?php
            $total = 0;
            foreach($itens as $item):
                $subtotal = $item->preco * $item->quantidade;
                $total += $subtotal;
            ?>
            <div class="linhaPreco">
                <p class="tituloPreco"><?= htmlspecialchars($item->titulo) ?></p>
                <p class="valorPreco">R$ <?= number_format($subtotal, 2, ',', '.') ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="total">
            <div class="valorTotal">
                <p class="tituloTotal">Preço Total</p>
                <p class="valorTotal">R$ <?= number_format($total, 2, ',', '.') ?></p>
            </div>
            <button class="continuarCompra">Continuar</button>
        </div>
    </div>

<?php endif; ?>
</main>

<script>
    function mudarQnt(id_item, delta) {
        window.location.href = '<?= base_url("carrinho/mudarQuantidade") ?>/' + id_item + '/' + delta;
    }
</script>
</body>
</html>
