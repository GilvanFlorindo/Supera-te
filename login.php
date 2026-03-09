<<?php 
    session_start();

    if(isset($_SESSION["email"], $_SESSION["password"])){
        header("location: page.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="logo">
        <h1>Supera-te</h1>
    </div>

    <form action="validation.php" class="form-box" method="POST">
        <div class="wrap-col">
            <label for="">Email</label>
            <input type="email" name="email" required id="" placeholder="email">
        </div>

        <div class="wrap-col">
            <label for="">Password</label>
            <input type="password" placeholder="password" name="password" required>
        </div>
        <button type="submit">Entrar</button>

        <div class="sign-up">
            <a href="">Esqueceu a senha?</a>
        </div>
        <hr>
        <div class="sign-up">
            <button class="sign-btn">Criar Conta</button>
        </div>
    </form>
</body>
</html>