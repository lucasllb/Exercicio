<!DOCTYPE html>
<htm>
   <head>
      <title>Tabuada Javascript</title>
      <meta charset="utf-8">
      <script type="text/javascript" src="tabuada.js"></script>
   </head>
 
   <body>
 
      <div id="form">
         <input type="number" id="numero" value="">
         <button id="gerar" onclick="tabuada()">Gerar</button>
      </div>
 
      <div id="resultado">Escolha um número</div>
 
   </body>
</html>
<script>
function tabuada(){
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado");
  
    var tabuada = "";
   
        for(i=0; i<=10; i++){
            tabuada = tabuada + numero + " x " + i + " = " + i*numero + "<br>";
        }
 
    resultado.innerHTML = tabuada;
 
}
</script>