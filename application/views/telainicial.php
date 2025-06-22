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
<body>

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

    <!-- SLIDER -->
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
                <img src="assets/img/zelda.avif" alt="img2">
            </div>
            <div class="slide">
                <img src="assets/img/wild.jpg" alt="img3">
            </div>
            <div class="slide">
                <img src="assets/img/civil.jpg" alt="img4">
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
<!-- FIM SLIDER -->]


<!-- primeiro carrosel -->
 <div class="carrosel-container">
    <h2>DESCUBRA UM ESTILO NOVO</h2>

    <div class="botoes-navegacao">
      <button class="botao-seta" onclick="scrollCarousel(-1)">&#x276E;</button>
      <button class="botao-seta" onclick="scrollCarousel(1)">&#x276F;</button>
    </div>

    <div class="carrosel-imagens" id="carrossel">
      <div>
        <img src="assets/img/Blades of Fire.jpg" alt="Imagem 1">
        <p class= "texto-img">Blades of Fire <br> r$ 150,00 <br> jogo base</p>
        </div>
      <div>
        <img src="assets/img/jogo2.webp" alt="Imagem 2">
        <p class= "texto-img">GAROU: City of the Wolves <br> r$ 249,00<br> jogo base</p>
    </div>
    <div>
        <img src="assets/img/jogo3.jpg" alt="Imagem 3">
        <p class= "texto-img">Clair Obscur: Expedition 33 <br> r$ 135,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo4.jpeg" alt="Imagem 4">
      <p class= "texto-img">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo5.jpg" alt="Imagem 5">
      <p class= "texto-img">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    </div>
  </div>

<!-- segundo carrosel -->
  <div class="carrosel-container2">
    <h2>OFERTAS DE OUTRO MUNDO</h2>

    <div class="botoes-navegacao2">
      <button class="botao-seta2" onclick="scrollCarousel2(-1)">&#x276E;</button>
      <button class="botao-seta2" onclick="scrollCarousel2(1)">&#x276F;</button>
    </div>

    <div class="carrosel-imagens2" id="carrossel2">
      <div>
        <img src="assets/img/jogo1.webp" alt="Imagem 1">
        <p class= "texto-img2">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
        </div>
      <div>
        <img src="assets/img/jogo2.webp" alt="Imagem 2">
        <p class= "texto-img2">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
        <img src="assets/img/jogo3.jpg" alt="Imagem 3">
        <p class= "texto-img2">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo4.jpeg" alt="Imagem 4">
      <p class= "texto-img2">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo5.jpg" alt="Imagem 5">
      <p class= "texto-img2">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    </div>
  </div>

<!-- terceiro carrosel -->
<div class="carrosel-container3">
    <h2>PRINCIPAIS NOVOS LANÇAMENTOS</h2>

    <div class="botoes-navegacao3">
      <button class="botao-seta3" onclick="scrollCarousel3(-1)">&#x276E;</button>
      <button class="botao-seta3" onclick="scrollCarousel3(1)">&#x276F;</button>
    </div>

    <div class="carrosel-imagens3" id="carrossel3">
      <div>
        <img src="assets/img/jogo1.webp" alt="Imagem 1">
        <p class= "texto-img3">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
        </div>
      <div>
        <img src="assets/img/jogo2.webp" alt="Imagem 2">
        <p class= "texto-img3">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
        <img src="assets/img/jogo3.jpg" alt="Imagem 3">
        <p class= "texto-img3">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo4.jpeg" alt="Imagem 4">
      <p class= "texto-img3">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    <div>
      <img src="assets/img/jogo5.jpg" alt="Imagem 5">
      <p class= "texto-img3">Blades of <br> Fire r$ 150,00 <br> jogo base</p>
    </div>
    </div>
  </div>

  <!-- quarto carrosel -->
   <div class="carrosel-container4">
    <h2>PRINCIPAIS NOVOS LANÇAMENTOS</h2>
    <div class="botoes-navegacao4">
      <button class="botao-seta4" onclick="scrollCarousel4(-1)">&#x276E;</button>
      <button class="botao-seta4" onclick="scrollCarousel4(1)">&#x276F;</button>
    </div>

    <div class="carrosel-imagens4" id="carrossel4">
        <div class="img4">
          <img src="assets/img/jogo1.webp" alt="Imagem 1">
          <p class= "texto-img4">casuais</p>
          </div>
        <div class="img4">
          <img src="assets/img/jogo2.webp" alt="Imagem 2">
          <p class= "texto-img4">corrida</p>
      </div>
      <div class="img4">
          <img src="assets/img/jogo3.jpg" alt="Imagem 3">
          <p class= "texto-img4">esporte</p>
      </div>
      <div class="img4">
        <img src="assets/img/jogo4.jpeg" alt="Imagem 4">
        <p class= "texto-img4">casuais</p>
      </div>
      <div class="img4">
        <img src="assets/img/jogo5.jpg" alt="Imagem 5">
        <p class= "texto-img4">jogos indie</p>
      </div>
    </div>
  </div>


<!-- SOBRE NOS -->
    <div class="all" style = "background-image: url('<?php echo base_url('assets/img/fundo (1).jpg')?>')">
    <main class="wrapper" >
        <div class="divTexto">
            <h1 class="sobrenos">SOBRE NÓS</h1>    
            <h2 class="textoSobre">
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
        <li class = "img44"><img src="assets/img/callofduty.avif" alt="Call of Duty"></li>
        <li class = "img5"><img src="assets/img/batman.avif" alt="Batman"></li>
        </ul>
  </footer>
</div>
<!-- FIM SOBRE NOS -->

<!-- CONTAINER-ICONS -->
<div class="carrosel-container5">
    <div class="carrosel-imagens5">
        <div>
            <img src="assets/img/user.png" alt="Imagem 1">
            <p class= "text-img5">Cadastro/ login</p>
            <p class= "texto-img5">Cadastre-se para nos acompanhar e manter sua conta</p>
            </div>
        <div>
            <img src="assets/img/option.png" alt="Imagem 2">
            <p class= "text-img5">Categorias</p>
            <p class= "texto-img5">Escolha o jogo <br> de sua preferência </p>
        </div>
        <div>
            <img src="assets/img/controle.png" alt="Imagem 3">
            <p class= "text-img5">Jogos</p>
            <p class= "texto-img5">Realize a compra <br> e Pronto! Agora é só Se divertir!</p>
        </div>
    </div>
</div>


<!-- VIDEO/LIVE -->
<iframe width="800" height="450" 
  src="https://www.youtube.com/embed/cWBwFhUv1-8" 
  title="God of War Ragnarök Trailer" 
  frameborder="0" 
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
  allowfullscreen>
</iframe>

//CAIXINHA FEEDBACK
<div class="feedback-container">
  <p class="titulo-topo">DEIXE SUA OPINIÃO SOBRE A PÁGINA</p>
  <h2>FEEDBACK</h2>
  <form action="feedback.php" method="post" class="form-feedback">
    <input type="text" name="feedback" placeholder="">
    <button type="submit">ENVIAR</button>
  </form>
</div>


  <script>
// Script para o slider automático
        // Define o contador inicial e ativa o primeiro radio button   
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


    // Carrossel das primeiras imagens
     function scrollCarousel(direction) {
      const carrossel = document.getElementById('carrossel');
      const scrollAmount = 270; // valor ajustável conforme o tamanho da imagem
      carrossel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    }
    
    // Carrossel das segundas imagens
    function scrollCarousel2(direction2) {
      const carrossel2 = document.getElementById('carrossel2');
      const scrollAmount2 = 270; // valor ajustável conforme o tamanho da imagem
      carrossel2.scrollBy({ left: direction2 * scrollAmount2, behavior: 'smooth' });
    }

    // Carrossel das terceiras imagens
    function scrollCarousel3(direction3) {
      const carrossel3 = document.getElementById('carrossel3');
      const scrollAmount3 = 270; // valor ajustável conforme o tamanho da imagem
      carrossel3.scrollBy({ left: direction3 * scrollAmount3, behavior: 'smooth' });
    }
    // Carrossel das quartas imagens
    function scrollCarousel4(direction4) {  
      const carrossel4 = document.getElementById('carrossel4');
      const scrollAmount4 = 240; // valor ajustável conforme o tamanho da imagem
      carrossel4.scrollBy({ left: direction4 * scrollAmount4, behavior: 'smooth' });
    }
    
  </script>

</body>
</html>
