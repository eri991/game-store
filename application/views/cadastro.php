<!DOCTYPE html>
<html>

<head>
	<title>G-Max</title>
	<link rel="icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cadastroPage.css')?> ?v=<?= time() ?>">
</head>
<script type="text/javascript">
	function anularNumeros(e){
		const key = e.key;
		if(key >= '0' && key <= '9'){
			e.preventDefault();
		};
	}
	function mostrar() {
		checkbox = document.getElementById('checkboxMostrarSenha');
		if(checkbox.checked){
			document.getElementById('senha').type = 'text'
			document.getElementById('confSenha').type = 'text'
		} else {
			document.getElementById('senha').type = 'password'
			document.getElementById('confSenha').type = 'password'
		}
	}
</script>
<body>
	<header id='mainHeader'>
		<nav id='mainNav'>
			<div>
				<a href="<?php echo base_url('telainicial')?>"><img id='logoHeader' src="<?php echo base_url('assets/img/icon_Gmax.ico') ?>" alt="Logo"></a>
				<p>Cadastrar</p>
			</div>
			<a href="" target="_blank">Precisa de ajuda?</a>
		</nav>
	</header>
	<main id="wrapper">
		<section id="sideLogin">
			<form action="" id="cadForm" autocomplete="off" method="post" onsubmit="return formValidation()">
				<div class="inputContainer <?= form_error('nomeCompleto') ? 'input-error':'' ?>" >
					<input type="text" name="nomeCompleto" id="nomeCompleto"  class="inputsCad" onkeydown="anularNumeros(event)" placeholder=" " value="<?= set_value('nomeCompleto') ?>">
					<label for="nomeCompleto">Nome Completo</label>
					<?= form_error('nomeCompleto','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer <?= form_error('nickname') ? 'input-error':'' ?>">
					<input type="text" name="nickname" id="nickname" name="nickname" class="inputsCad" placeholder=" " value="<?= set_value('nickname')?>">
					<label for="nickname">Nickname</label>
					<?= form_error('nickname','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer <?= form_error('email') ? 'input-error':'' ?>" >
					<input type="email" name="email" id="email" name="email"  class="inputsCad" placeholder=" " value="<?= set_value('email')?>">
					<label for="email">Email</label>
					<?= form_error('email','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer <?= form_error('dataNasc') ? 'input-error':'' ?>">
					<input type="date" name="dataNasc" id="dataNasc"  class="inputsCad" placeholder=" "  value="<?= set_value('dataNasc')?>" max="<?= date('Y-m-d') ?>">
					<label for="dataNasc">Data de Nascimento</label>
					<?= form_error('dataNasc','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer <?= form_error('pais') ? 'input-error':'' ?>">
					<input list="paises" id="pais" name="pais" class="inputsCad" placeholder=" " autocomplete="off" value="<?= set_value('pais')?>"/>
					<label for="pais">País</label>
					<?= form_error('pais','<div class="erroMsg">','</div>');?>
					<datalist id="paises">
						<option value="Afeganistão">
						<option value="África do Sul">
						<option value="Albânia">
						<option value="Alemanha">
						<option value="Andorra">
						<option value="Angola">
						<option value="Antígua e Barbuda">
						<option value="Arábia Saudita">
						<option value="Argélia">
						<option value="Argentina">
						<option value="Armênia">
						<option value="Austrália">
						<option value="Áustria">
						<option value="Azerbaijão">
						<option value="Bahamas">
						<option value="Bahrein">
						<option value="Bangladesh">
						<option value="Barbados">
						<option value="Bélgica">
						<option value="Belize">
						<option value="Benin">
						<option value="Bielorrússia">
						<option value="Bolívia">
						<option value="Bósnia e Herzegovina">
						<option value="Botsuana">
						<option value="Brasil">
						<option value="Brunei">
						<option value="Bulgária">
						<option value="Burkina Faso">
						<option value="Burundi">
						<option value="Butão">
						<option value="Cabo Verde">
						<option value="Camarões">
						<option value="Camboja">
						<option value="Canadá">
						<option value="Catar">
						<option value="Cazaquistão">
						<option value="Chade">
						<option value="Chile">
						<option value="China">
						<option value="Chipre">
						<option value="Colômbia">
						<option value="Comores">
						<option value="Congo-Brazzaville">
						<option value="Congo-Kinshasa">
						<option value="Coreia do Norte">
						<option value="Coreia do Sul">
						<option value="Costa do Marfim">
						<option value="Costa Rica">
						<option value="Croácia">
						<option value="Cuba">
						<option value="Dinamarca">
						<option value="Djibuti">
						<option value="Dominica">
						<option value="Egito">
						<option value="El Salvador">
						<option value="Emirados Árabes Unidos">
						<option value="Equador">
						<option value="Eritreia">
						<option value="Eslováquia">
						<option value="Eslovênia">
						<option value="Espanha">
						<option value="Estados Unidos">
						<option value="Estônia">
						<option value="Eswatini">
						<option value="Etiópia">
						<option value="Fiji">
						<option value="Filipinas">
						<option value="Finlândia">
						<option value="França">
						<option value="Gabão">
						<option value="Gâmbia">
						<option value="Gana">
						<option value="Geórgia">
						<option value="Granada">
						<option value="Grécia">
						<option value="Guatemala">
						<option value="Guiana">
						<option value="Guiné">
						<option value="Guiné-Bissau">
						<option value="Guiné Equatorial">
						<option value="Haiti">
						<option value="Holanda">
						<option value="Honduras">
						<option value="Hungria">
						<option value="Iêmen">
						<option value="Ilhas Marshall">
						<option value="Ilhas Salomão">
						<option value="Índia">
						<option value="Indonésia">
						<option value="Irã">
						<option value="Iraque">
						<option value="Irlanda">
						<option value="Islândia">
						<option value="Israel">
						<option value="Itália">
						<option value="Jamaica">
						<option value="Japão">
						<option value="Jordânia">
						<option value="Kiribati">
						<option value="Kosovo">
						<option value="Kuwait">
						<option value="Laos">
						<option value="Lesoto">
						<option value="Letônia">
						<option value="Líbano">
						<option value="Libéria">
						<option value="Líbia">
						<option value="Liechtenstein">
						<option value="Lituânia">
						<option value="Luxemburgo">
						<option value="Macedônia do Norte">
						<option value="Madagascar">
						<option value="Malásia">
						<option value="Malaui">
						<option value="Maldivas">
						<option value="Mali">
						<option value="Malta">
						<option value="Marrocos">
						<option value="Maurício">
						<option value="Mauritânia">
						<option value="México">
						<option value="Mianmar">
						<option value="Micronésia">
						<option value="Moçambique">
						<option value="Moldávia">
						<option value="Mônaco">
						<option value="Mongólia">
						<option value="Montenegro">
						<option value="Namíbia">
						<option value="Nauru">
						<option value="Nepal">
						<option value="Nicarágua">
						<option value="Níger">
						<option value="Nigéria">
						<option value="Noruega">
						<option value="Nova Zelândia">
						<option value="Omã">
						<option value="Palau">
						<option value="Palestina">
						<option value="Panamá">
						<option value="Papua-Nova Guiné">
						<option value="Paquistão">
						<option value="Paraguai">
						<option value="Peru">
						<option value="Polônia">
						<option value="Portugal">
						<option value="Quênia">
						<option value="Quirguistão">
						<option value="Reino Unido">
						<option value="República Centro-Africana">
						<option value="República Dominicana">
						<option value="República Tcheca">
						<option value="Romênia">
						<option value="Ruanda">
						<option value="Rússia">
						<option value="Saara Ocidental">
						<option value="Saint Kitts e Nevis">
						<option value="Saint Vincent e Granadinas">
						<option value="Samoa">
						<option value="San Marino">
						<option value="Santa Lúcia">
						<option value="São Tomé e Príncipe">
						<option value="Senegal">
						<option value="Serra Leoa">
						<option value="Sérvia">
						<option value="Seicheles">
						<option value="Singapura">
						<option value="Síria">
						<option value="Somália">
						<option value="Sri Lanka">
						<option value="Sudão">
						<option value="Sudão do Sul">
						<option value="Suécia">
						<option value="Suíça">
						<option value="Suriname">
						<option value="Tailândia">
						<option value="Taiwan">
						<option value="Tajiquistão">
						<option value="Tanzânia">
						<option value="Timor-Leste">
						<option value="Togo">
						<option value="Tonga">
						<option value="Trinidad e Tobago">
						<option value="Tunísia">
						<option value="Turcomenistão">
						<option value="Turquia">
						<option value="Tuvalu">
						<option value="Ucrânia">
						<option value="Uganda">
						<option value="Uruguai">
						<option value="Uzbequistão">
						<option value="Vanuatu">
						<option value="Vaticano">
						<option value="Venezuela">
						<option value="Vietnã">
						<option value="Zâmbia">
						<option value="Zimbábue">
					</datalist>
				</div>
				<div class="inputContainer <?= form_error('senha') ? 'input-error':'' ?>">
					<input type="password" name="senha" id="senha" class="inputsCad" placeholder=" " value="<?= set_value('senha')?>">
					<label for="senha">Senha</label>
					<?= form_error('senha','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer <?= form_error('confSenha') ? 'input-error':'' ?>">
					<input type="password" name="confSenha" id="confSenha" class="inputsCad" placeholder=" " value="<?= set_value('confSenha')?>">
					<label for="confSenha">Confirmar Senha</label>
					<?= form_error('confSenha','<div class="erroMsg">','</div>');?>
				</div>
				<div class="inputContainer" id="link">
					<a href="<?php echo base_url('login')?>">Já tem conta? Faça Login</a>
				</div>
				<label id="mostrarSenha">
					<input type="checkbox" name="mostrarSenha" id="checkboxMostrarSenha" onclick="mostrar()">
					<span id="mostrarSenhaCheckmark"></span>
					Mostrar Senha
				</label>
				<div class="inputContainer" >
					<input type="submit" value="Cadastrar" class="inputsCad"id="submit">
				</div>
			</form>
		</section>
		<section id="sideSpaceBackground"
			style="background-image: 
        radial-gradient(circle, rgba(0,0,0,0) 20%, rgba(0,0,0,1) 100%),
        url('<?php echo base_url("assets/img/fundo_jinx.png"); ?>');">
		<section>
	</main>
</body>

</html>