<!DOCTYPE html>
<html>
<head>
	<title>G-Max</title>
	<link rel="icon" href="<?php echo base_url('assets/icon_Gmax.ico'); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/loginPage.css') ?>">
</head>
<body>

	<header id='mainHeader'>
		<nav id= 'mainNav'>
			<div>
				<img id= 'logoHeader' src="<?php echo base_url('assets/icon_Gmax.jpg')?>" alt="Logo">
				<p>Cadastrar</p>
			</div>
			<a href="" target="_blank">Precisa de ajuda?</a>
		</nav>
	</header>
	<main id="wrapper">
		<section id="sideLogin">
			<form action="" id="cadForm">
				<h2>Cadastrar</h2>
				<!--Nome Completox
				data de nascimentox
				país
				nickname
				email
				senha
				confirmar senha
				-->
				<div class="inputContainer">
					<input type="text" name="nomeCompleto" id="nomeCompleto" class="inputsCad" placeholder=" ">
					<label for="nomeCompleto">
						Nome Completo
					</label>
				</div>
				<div class="inputContainer">
					<input type="text" name="nickname" id="nickname" class="inputsCad" placeholder=" ">
					<label for="nickname">
						Nickname
					</label>
				</div>
				<div class="inputContainer">
					<input type="email" name="email" id="email" class="inputsCad" placeholder=" ">
					<label for="email">
						Email
					</label>
				</div>
				<div class="inputContainer">
					<input type="date" name="dataNasc" id="dataNasc" class="inputsCad" placeholder=" ">
					<label for="dataNasc">
						Data de Nascimento
					</label>
				</div>
			</form>
		</section>
		<section id="sideSpaceBackground" style="background-image: url(<?php echo base_url("assets/fundo_estelar.jpg")?>);">
			<img src='<?php echo base_url('assets/jinx.png') ?>' alt="Jinx">
		</section>
	</main>
</body>
</html>
