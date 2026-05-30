<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Supera-te | Avaliação Inicial</title>
<link rel="stylesheet" href="autismo.css">
</head>

<body>

<header>
<div class="logo">Supera-te</div>
</header>

<div class="container">

<div class="intro">
<h1>Avaliação Inicial</h1>
<p>
Este questionário ajuda a identificar possíveis dificuldades no ambiente escolar.
Todas as perguntas devem ser respondidas para obter um resultado.
</p>
</div>

<form>
<div class="card">
<div class="questao-container">
<div class="questao-conteudo">
<h3>1. Como é a tua comunicação com outras pessoas?</h3>
<label><input type="radio" name="q1" value="1"> Consigo comunicar normalmente</label>
<label><input type="radio" name="q1" value="2"> Às vezes tenho dificuldade em explicar o que sinto ou penso</label>
<label><input type="radio" name="q1" value="3"> Tenho muita dificuldade em comunicar</label>
</div>
</div>
</div>

<div class="card">
<h3>2. Como reages quando há mudanças na tua rotina?</h3>
<label><input type="radio" name="q2" value="1"> Consigo adaptar-me facilmente</label>
<label><input type="radio" name="q2" value="2"> Fico um pouco desconfortável, mas consigo adaptar-me</label>
<label><input type="radio" name="q2" value="3"> Fico muito perturbado ou desconfortável</label>
</div>

<div class="card">
<h3>3. Quando recebes uma tarefa ou explicação do professor, consegues compreendê-la facilmente?</h3>
<label><input type="radio" name="q3" value="1"> Sim, compreendo facilmente</label>
<label><input type="radio" name="q3" value="2"> Às vezes preciso que expliquem novamente</label>
<label><input type="radio" name="q3" value="3"> Tenho muita dificuldade em compreender as instruções</label>
</div>

<div class="card">
<h3>4. Como é a tua atenção durante as aulas?</h3>
<label><input type="radio" name="q4" value="1"> Consigo manter a atenção</label>
<label><input type="radio" name="q4" value="2"> Às vezes distraio-me facilmente</label>
<label><input type="radio" name="q4" value="3"> Tenho muita dificuldade em manter a atenção</label>
</div>

<div class="card">
<h3>5. Reação a estímulos (barulho, luz, toque)</h3>
<label><input type="radio" name="q5" value="1"> Reação normal</label>
<label><input type="radio" name="q5" value="2"> Sensível a alguns estímulos</label>
<label><input type="radio" name="q5" value="3"> Muito sensível ou desconfortável</label>
</div>

<div class="card">
<h3>6. Costumas repetir alguns comportamentos ou movimentos?</h3>
<label><input type="radio" name="q6" value="1"> Não</label>
<label><input type="radio" name="q6" value="2"> Às vezes</label>
<label><input type="radio" name="q6" value="3"> Sim, frequentemente</label>
</div>

<button  onclick="avaliar()">
Ver Resultado
</button>
<button  onclick="voltar()">Voltar</button>

<div id="erro" class="erro">
!!! Deve responder todas as perguntas antes de obter a avaliação.
</div>

</form>

<div id="resultado" class="resultado"></div>
</div>

</body>
</html>
<script src="autismo.js"></script>