<!DOCTYPE html>
<html>
<head>
	<title>G-Max</title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/telainicial.css');?> ?v=<?= time() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+SC:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo base_url('assets/img/fundo2.png')?>') ">

	<header id='mainHeader'>
		<nav id= 'mainNav'>
			<div id="logoman">
    			<img id= 'logoHeader' src="<?php echo base_url('assets/img/icon_Gmax.ico') ?>" alt="Logo">
                <h1 id="logoNome">G-Max</h1>
			</div>
            <div id="divLista">
                <ul class="listaNav">
                    <li>Início</li>
                    <li>
                        <div class="input-container">
                            <input id="searchInput" type="search" placeholder="Pesquisar">
                            
                            <label for="searchInput" id="searchPlaceholder">
                                <img id='pesquisarLupa' src="<?php echo base_url('assets/img/lupa.png') ?>" alt="lupa" style="width: 20px;">                                    
                            </label>
                            
                        </div>
                    </li>
                    <li><img id="carrinho" src="<?php echo base_url('assets/img/carrinho.png') ?>" alt="carrinho" style="width: 30px;"></li>
                    <li><img id='pesquisarLupa' src="<?php echo base_url('assets/img/lista.png') ?>" alt="lista" style="width: 30px;"></li>
                </ul>
            </div>
		</nav>
	</header>
    <main class="wrapper">
        <div class="divTexto">
            <h1 class="sobrenos"><b>SOBRE NÓS</b></h1>    
            <h3 class="textoSobre">
                Lorem, ipsum dolor sit amet consectetur <br>
                adipisicing elit. Nemo consectetur quam, quaerat cupiditate qui rerum totam odio? <br>
                Ut temporibus autem ex repellat eveniet, voluptatem iste a! Provident optio repudiandae laboriosam.
            </h3>
        </div>
    </main>

    <footer class="menu-jogos">
        <ul>
        <li><img src="assets/img/Bloodborne.jpg" alt="Bloodborne"></li>
        <li><img src="assets/img/Bloodborne.jpg" alt="Dark Souls"></li>
        <li><img src="assets/img/Bloodborne.jpg" alt="Fortnite"></li>
        <li><img src="assets/img/Bloodborne.jpg" alt="Call of Duty"></li>
        <li><img src="assets/img/Bloodborne.jpg" alt="Batman"></li>
        </ul>
  </footer>
</body>
</html>
