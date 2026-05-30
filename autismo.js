function avaliar(){
let perguntas = ["q1","q2","q3","q4","q5","q6"];
let pontos = 0;
let todasRespondidas = true;

for(let i=0;i<perguntas.length;i++){
let resposta = document.querySelector('input[name="'+perguntas[i]+'"]:checked');
if(!resposta){
todasRespondidas = false;
break;
}
pontos += parseInt(resposta.value);
}

let erro = document.getElementById("erro");
let resultado = document.getElementById("resultado");

if(!todasRespondidas){
erro.style.display="block";
resultado.style.display="none";
return;
}
else{
erro.style.display="none";
}

if(pontos <= 6){
resultado.className="resultado nivel1";
resultado.innerHTML="Resultado: Nível 1 – Suporte leve.<br>O aluno apresenta pequenas dificuldades e pode beneficiar de acompanhamento ocasional.";
}
else if(pontos <= 12){
resultado.className="resultado nivel2";
resultado.innerHTML="Resultado: Nível 2 – Suporte moderado.<br>O aluno pode precisar de acompanhamento psicopedagógico regular.";
}
else{
resultado.className="resultado nivel3";
resultado.innerHTML="Resultado: Nível 3 – Suporte intensivo.<br>Recomenda-se avaliação especializada com psicólogo ou educador especializado.";
}
resultado.style.display="block";
}

function voltar() {
   window.location.href = "page.php";
}