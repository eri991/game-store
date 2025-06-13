<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>G-Max - Login</title>
    <link rel="icon" href="<?= base_url('assets/img/icon_Gmax.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/loginPage.css') . '?v=' . time(); ?>">
</head>
<body>

<script>
    function mostrar() {
        const checkbox = document.getElementById('checkboxMostrarSenha');
        const senha = document.getElementById('senha');
        senha.type = checkbox.checked ? 'text' : 'password';
    }

    function mostrarErro(campo, mensagem) {
        campo.parentNode.classList.add('input-error');
        const erro = document.createElement('span');
        erro.className = 'error-message';
        erro.textContent = mensagem;
        campo.parentNode.appendChild(erro);
    }

    function validarFormulario(event) {
        document.querySelectorAll('.error-message').forEach(e => e.remove());
        document.querySelectorAll('.inputContainer').forEach(e => {
            e.classList.remove('input-error');
        });

        let isValid = true;
        const identificador = document.getElementById('identificador');
        const senha = document.getElementById('senha');

        const validarCampo = (campo, nome) => {
            const valor = campo.value.trim();
            if (!valor) {
                mostrarErro(campo, `Informe sua ${nome}.`);
                return false;
            } else if (valor.length < 3) {
                mostrarErro(campo, `Mínimo de 3 caracteres.`);
                return false;
            } else if (valor.length > 14) {
                mostrarErro(campo, `Máximo de 14 caracteres.`);
                return false;
            }
            return true;
        };

        if (!validarCampo(identificador, 'nickname ou email')) isValid = false;
        if (!validarCampo(senha, 'senha')) isValid = false;

        if (!isValid) {
            event.preventDefault();
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form').addEventListener('submit', validarFormulario);
    });
</script>

<header id='mainHeader'>
    <nav id='mainNav'>
        <div>
            <img id='logoHeader' src="<?= base_url('assets/img/icon_Gmax.ico') ?>" alt="Logo">
            <p>Login</p>
        </div>
    </nav>
</header>

<main>
    <section id="formSection">
        <form action="<?= base_url('telainicial') ?>" method="post">
            <h2>Login</h2>

            <div class="inputContainer">
                <input type="text" id="identificador" name="identificador" class="inputsCad" placeholder=" " value="<?= set_value('identificador') ?>">
                <label for="identificador">Nickname ou Email</label>
                <?= form_error('identificador') ?>
            </div>

            <div class="inputContainer">
                <input type="password" id="senha" name="senha" class="inputsCad" placeholder=" ">
                <label for="senha">Senha</label>
                <?= form_error('senha') ?>
            </div>

            <?php if (isset($erro_login)): ?>
                <div style="color:red; margin-bottom: 15px;"><?= $erro_login ?></div>
            <?php endif; ?>

            <label id="mostrarSenha">
                <input type="checkbox" id="checkboxMostrarSenha" onclick="mostrar()">
                <span id="mostrarSenhaCheckmark"></span>
                Mostrar Senha
            </label>

            <div class="inputContainer">
                <input type="submit" value="Entrar" id="btnEntrar" class="inputsCad">
            </div>

            <!-- Link para cadastro -->
            <div style="text-align:center; margin-top: 15px;">
            <p>Não tem uma conta? <a id="linkCadastro" href="<?= base_url('cadastro') ?>">Cadastre-se aqui</a></p>
            </div>
        </form>
    </section>

    <section id="sideSpaceBackground" style="background-image: url('<?= base_url("assets/img/fundo_login.jpg"); ?>');">
        <img src="<?= base_url('assets/img/jinx.png'); ?>" alt="Jinx">
    </section>
</main>

</body>
</html>