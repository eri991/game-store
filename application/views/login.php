<!DOCTYPE html>
<html>

<head>
    <title>G-Max</title>
    <link rel="icon" href="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/loginPage.css') . '?v=' . time(); ?>">
</head>

<body>
    <script type="text/javascript">
        function mostrar() {
            const checkbox = document.getElementById('checkboxMostrarSenha');
            const senha = document.getElementById('senha');
            senha.type = checkbox.checked ? 'text' : 'password';
        }
    </script>

    <header id="mainHeader">
        <nav id="mainNav">
            <div>
                <a href="<?php echo base_url('telainicial')?>"><img id="logoHeader" src="<?php echo base_url('assets/img/icon_Gmax.ico'); ?>" alt="Logo"></a>
                <p>Fazer Login</p>
            </div>
            <a href="#" target="_blank">Precisa de ajuda?</a>
        </nav>
    </header>

    <main id="wrapper">
        <section id="formSection">
            <form action="<?= base_url('login') ?>" method="post">
                <h2>Login</h2>
                <div class="inputContainer"<?= form_error('nickname')? 'input-error':''?>>
                    <input type="text" name="nickname" id="nickname" class= "inputsCad" placeholder=" " value="<?= set_value('nickname') ?>">
                    <label for="nickname">Nickname</label>
                    <?php form_error('nickname','<div class= "erroMsg">','</div>')?>
                </div>
                <div class="inputContainer">
                    <input type="password" name="senha" id="senha" placeholder=" " class="inputsCad">
                    <label for="senha">Senha</label>
                    <?= form_error('senha') ?>
                </div>
                <?php if (isset($erro_login)): ?>
                    <div ><?= $erro_login ?></div>
                <?php endif; ?>
                <div class="inputContainer" id="link">
					<a href="<?php echo base_url('cadastro')?>">Não tem conta? Cadastre-se</a>
				</div>
                <label id="mostrarSenha">
                    <input type="checkbox" name="mostrarSenha" id="checkboxMostrarSenha" onclick="mostrar()">
                    <span id="mostrarSenhaCheckmark"></span>
                    Mostrar Senha
                </label>
                <div class="inputContainer">
                    <input type="submit" value="Entrar" class="inputsCad" id="btnEntrar">
                </div>
            </form>
        </section>

        <section id="sideSpaceBackground" style="background-image: 
        radial-gradient(circle, rgba(0,0,0,0) 50%, rgba(0,0,0,1) 100%),
        url('<?php echo base_url("assets/img/fundo_estelar.jpg"); ?>');">
            <img src="<?php echo base_url('assets/img/jinx.png'); ?>" alt="Jinx">
        </section>
    </main>
</body>

</html>
