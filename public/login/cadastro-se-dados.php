<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/src/assets/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../login/cadastro-se-dados.css">
    <title>SmartTrain - Cadastre-se</title>
</head>

<body>
    <main>
        <section>
            <div class="container-size-mobile">
                <div class="container-bar-yellow"></div>
                <div class="container">
                    <div class="container-wave-yellow">
                        <img src="/src/assets/images/yellow.png" alt="">
                    </div>
                    <div class="container-text-cadastre-se">
                        <h2>Seja Bem Vindo!</h2>
                        <span style="position: relative; right: 110px;">Insira Nome de Usuário, Email, CPF e Senha para
                            prosseguir:</span>
                    </div>
                    <form action="" method="POST" id="">
                        <div class="container-box-login">
                            <input type="username" name="username" id="usuario" required>
                        </div>
                        <br>
                        <div class="container-box-login">
                            <input type="username" name="username" id="email" required>
                        </div>
                        <br>
                        <div class="container-box-login">
                            <input type="CPF" name="CPF" id="cpf" required>
                        </div>
                        <br>
                        <div class="container-box-login">
                            <input type="password" name="password" id="senha" required>
                        </div>
                        <div class="container-forgotten-password">
                            <input type="checkbox" name="esqueceu_senha" id="esqueceu_senha">
                            <span>Salvar Senha</span>
                            <a href="/public/login/cadastre-se-page.html" id="possui-uma-conta"><span>Ja possui uma
                                    conta?</span></a>
                        </div>
                        <div class="container-login-profile">
                            <a href="#" type="submit"><span>Cadastre-se aqui</span></a>
                        </div>
                    </form>
                    <div class="container-social-media">
                        <div class="social-media">
                            <img src="/src/assets/images/social-media/facebook.png" alt="">
                        </div>
                        <div class="social-media">
                            <a
                                href="https://accounts.google.com/AddSession/signinchooser?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=pt_BR&authuser=0&ddm=1&flowName=GlifWebSignIn&flowEntry=AddSession"><img
                                    src="/src/assets/images/social-media/google.png" alt=""></a>
                        </div>
                        <div class="social-media">
                            <img src="/src/assets/images/social-media/linkdin.png" alt="">
                        </div>
                    </div>
                    <div class="container-login-logo_sa">
                        <img src="/src/assets/images/logo-smarttrain-apagada.png" alt="">
                    </div>
                </div>
        </section>
        </div>
    </main>
</body>

</html>