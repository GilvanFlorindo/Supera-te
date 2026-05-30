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
            <button>Login</button>
        </nav>
        </div>

        <main>
            <div class="info">
                <h1>Apoio psicologico <br>
                    estudantil quando <br> você precisar.
                </h1>
                <p>Converse com um psicológo <br> de forma segura e confidencial.</p>
                <span> 
                    <button id="btn">Começar Agora</button> 
                    <button class="disable">Encontrar psicológo.</button>
                    <aside>
                        <img src="./assets/online-doctor-animate.svg" alt="">
                    </aside>
            </span>
            </div>
        </main>

        <h2>Como Funciona?</h2>
        <div class="How">
            <div class="container">
                <div class="card-info">
                    <h3>Crie uma  <br> conta.</h3>
                    <p>Para poder utilizar  <br> todas as funcionalidades <br> da nossa plataforma.</p>
                </div>
                <img src="/assets/mobile-wireframe-animate.svg" alt="">
            </div>

            <div class="container">
              <div class="card-info">
                 <h3>Escolha um <br> psicológo.</h3>
                <p>Temos profissionais <br> adequadas e adaptados <br> para a sua necessidade.</p>
                </div>
                <img src="/assets/woman-reading-animate.svg" alt="">
            </div>

            <div class="container">
                         <div class="card-info">
                    <h3>Marque uma  <br> consulta.</h3>
                    <p>Inicie uma conversa <br>  segura com um <br> dos nossos profissionais.</p>
                </div>
                <img src="/assets/student-stress-animate.svg" alt="">
            </div>
        </div>

        <div class="topic">
            <ul>
                <li>Sessões seguras.</li>
                <li>Reflexão Sobre a importância da saúde mental na Vida Acadêmica.</li>
            </ul>

            <ul>
                <li>Coloboração com a Área de Apoio Psicopedagógica.</li>
                <li>Acompanhamento do desempenho escolar.</li>
            </ul>
        </div>

       


         <footer class="container">
      <span>
        Supera-te &copy; 2026
      </span>
      <span>
        Termos de uso
      </span>
      <span>Políticas de privacidade</span>
    </footer>
</body>
</html>

<script>
    const btn = document.querySelector("#btn")
    btn.addEventListener("click", ()=>{
            window.location.href = "page2.php"
    }) 
</script>