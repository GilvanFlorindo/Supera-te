<?php 
    session_start();

if(!isset($_SESSION["email"], $_SESSION["password"])){
    header("location: login.php?erro");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supera-te</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
        <div class="nav-bar">
            <h1>Supera-te</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Como Funciona?</a>
            <a href="#">Criadores</a>
            <button>login</button>
        </nav>
        </div>

        <main>
            <div class="info">
                <h1>Apoio psicologico <br>
                 estudantil quando <br> você precisar
                </h1>
                <p>Converse com um psicológo <br> de forma segura e confidencial.</p>

               <span> 
                <button>Começar Agora</button> 
                <button class="disable">Encontrar psicológo</button>
            </span>
            </div>
            <aside>
                <img src="" alt="">
            </aside>
        </main>
</body>
</html>