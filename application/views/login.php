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
                <img id="logoHeader" src="<?php echo base_url('assets/img/icon_Gmax.png'); ?>" alt="Logo">
                <p>Fazer Login</p>
            </div>
            <a href="#" target="_blank">Precisa de ajuda?</a>
        </nav>
    </header>

    <main>
        <section id="formSection">
            <form action="<?= base_url('login') ?>" method="post">
                <label for="identificador">Email ou Nickname:</label>
                <input type="text" name="identificador" id="identificador" value="<?= set_value('identificador') ?>">
                <?= form_error('identificador') ?><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
                <?= form_error('senha') ?><br>

                <?php if (isset($erro_login)): ?>
                    <div style="color:red"><?= $erro_login ?></div>
                <?php endif; ?>

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

        <section id="sideSpaceBackground" style="background-image: url('<?php echo base_url("assets/img/fundo_login.jpg"); ?>');">
            <img src="<?php echo base_url('assets/img/jinx.png'); ?>" alt="Jinx">
        </section>
    </main>
</body>

</html>
