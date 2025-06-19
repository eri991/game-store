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

    <div class="slider">

        <div class="slides">
            <!-- radio buttons -->
             <input type="radio" name="radio-btn" id="radio1" >
             <input type="radio" name="radio-btn" id="radio2">
             <input type="radio" name="radio-btn" id="radio3">
             <input type="radio" name="radio-btn" id="radio4">

             <!-- sildes imagens -->
            <div class="slide first">
                <img src="assets/img/dead_by_daylight.png" alt="img1">
            </div>
            <div class="slide">
                <img src="assets/img/dead_by_daylight.png" alt="img2">
            </div>
            <div class="slide">
                <img src="assets/img/dead_by_daylight.png" alt="img3">
            </div>
            <div class="slide">
                <img src="assets/img/dead_by_daylight.png" alt="img4">
            </div>

            <!-- automatic navigation -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

















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
    let count = 1;
    document.getElementById("radio1").checked = true;
    
    setInterval(function(){
        nextImage();
    }, 2000);

    function nextImage(){
        count++;
        if(count > 4){
            count = 1;
        }
        document.getElementById("radio"+count).checked = true;
    }
  </script>

</body>
</html>
