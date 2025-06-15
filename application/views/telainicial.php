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
<body style="background-image: url('<?php echo base_url('assets/img/fundo (1).jpg')?>') ">
    <div class="pyramid-loader">
    <div class="wrapper1">
        <span class="side side1"></span>
        <span class="side side2"></span>
        <span class="side side3"></span>
        <span class="side side4"></span>
        <span class="shadow"></span>
    </div>  
</div>

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
            <h1 class="sobrenos">SOBRE NÓS</h1>    
            <h3 class="textoSobre">
                Lorem, ipsum dolor sit amet consectetur <br>
                adipisicing elit. Nemo consectetur quam, quaerat cupiditate qui rerum totam odio? <br>
                Ut temporibus autem ex repellat eveniet, voluptatem iste a! Provident optio repudiandae laboriosam.
            </h3>
        </div>
    </main>

    <footer class="menu-jogos">
        <ul>
        <li class = "img1"><img src="assets/img/Bloodborne.jpg" alt="Bloodborne"></li>
        <li class = "img2"><img src="assets/img/dark_souls.avif" alt="Dark Souls"></li>
        <li class = "img3"><img src="assets/img/Fortnite.jpg" alt="Fortnite"></li>
        <li class = "img4"><img src="assets/img/callofduty.avif" alt="Call of Duty"></li>
        <li class = "img5"><img src="assets/img/batman.avif" alt="Batman"></li>
        </ul>
  </footer>

  <script>
    let elem_loading = document.querySelector('.pyramid-loader');
    let elem_wrapper1 = document.querySelector('.wraper1');
    console.log("ok");

    setTimeout(function(){
        elem_loading.classList.remove('pyramid-loader');
        elem_wraper1.classList.remove('wraper1');
    }, 1280)
  </script>
</body>
</html>
