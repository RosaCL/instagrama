<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ressources/css/style.css">
    <link rel="stylesheet" href="./ressources/css/header.css">
    <link rel="stylesheet" href="./ressources/css/media.css">
    <link rel="stylesheet" href="./ressources/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Instagrama</title>
</head>

<body>
    <header>
        <img src="./ressources/img/Intagramalogo.png" alt="">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#login">Login</a>
            <a href="#cadastro">Cadastro</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>
    <section>
        <div>
            <form class="box" action="" method="post">
                <img src="./ressources/img/Intagramalogo.png" alt="">
                <h3>Realize seu cadastro</h3>
                <input class="box" type="text" name="name" placeholder="Digite seu nome">
                <input class="box" type="email" name="email" placeholder="Digite seu e-mail">
                <input class="box" type="text" name="city" placeholder="Digite sua cidade">
                <input class="box" type="text" name="country" placeholder="Digite seu País">
                <input class="box" type="file" name="image" id="">
                <input class="box" type="password" name="pass" placeholder="Digite sua senha">
                <input class="box" type="password" name="cpass" placeholder="Confirme sua senha">
                <input class="btn" type="submit" name="cadastrar" value="Cadastrar">
                <p>Já tem conta? <a href="login.php"> Faça seu login</a></p>
            </form>
        </div>

    </section>
    <footer>
        <a href="https://github.com/RosaCL"><img src="./ressources/img/costureza.png" alt=""></a>
    </footer>


    <script src="./ressources/js/script.js"></script>
</body>

</html>