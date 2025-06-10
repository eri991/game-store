<!DOCTYPE html>
<html>
<head>
	<title>G-Max</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/carrinhoPage.css');?> ?v=<?= time() ?>">
</head>
<body>

	<header id='mainHeader'>
		<nav id= 'mainNav'>
			<div>
				<img id= 'logoHeader' src="<?php echo base_url('assets/img/icon_Gmax.jpg')?>" alt="Logo">
				<p>Cadastrar</p>
			</div>
			<a href="https://help.steampowered.com/pt/" target="_blank">Precisa de ajuda?</a>
            <a href="<?= base_url('carrinho') ?>">Carrinho</a>
		</nav>
	</header>
	<main class='mainCarrinho'>
		<div class="listaProdutos">
			<div class="linhaProduto">
				<div class="wrapProduto">
					<div class="qntProduto">
						<button class="aumentarQnt">+</button>
						<p class="qntSelecionada">1</p>
						<button class="diminuirQnt">-</button>
					</div>
					<div class="imgLinhaProduto">

					</div>
					<div class="infosProduto">
						<p class='tituloProduto'>Título</p>
						<p class="descProduto">Descrição. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="precoProduto">R$ 105,87</p>
					</div>
				</div>
			</div>
			<div class="linhaProduto">
				<div class="wrapProduto">
					<div class="qntProduto">
						<button class="aumentarQnt">+</button>
						<p class="qntSelecionada">1</p>
						<button class="diminuirQnt">-</button>
					</div>
					<div class="imgLinhaProduto">

					</div>
					<div class="infosProduto">
						<p class='tituloProduto'>Título</p>
						<p class="descProduto">Descrição. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="precoProduto">R$ 85,90</p>
					</div>
				</div>
			</div>
			
		</div>
		<div class="cardPrecos">
			<div class="cabecalhoResumo">
				<h3>Resumo</h3>
				<div class="imagensProdutos">
					<div class="imgResumo">

					</div>
					<div class="imgResumo">

					</div>
				</div>
			</div>
			
			<div class="listaPrecos">
				<div class="linhaPreco">
					<p class="tituloPreco">Título</p>
					<p class="valorPreco">R$ 105,87</p>
				</div>
				<div class="linhaPreco">
					<p class="tituloPreco">Título</p>
					<p class="valorPreco">R$ 85,90</p>
				</div>
			</div>
			<div class="total">
				<div class="valorTotal">
					<p class="tituloTotal">Preço Total</p>
					<p class="valorTotal">R$ 191,77</p>
				</div>
				<button class="continuarCompra">
					Continuar
				</button>
			</div>
		</div>
	</main>
    
</body>
</html>