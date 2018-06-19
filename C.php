
</html><!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <title>Tabuada</title>
    <meta charset='utf-8' />
    <script type="text/javascript" src="fatorial.js"></script>
</head>

<body>
    <fieldset>
        <legend>Fatorial</legend>
        <h3 id="msg">Digite um número</h3>
        <input type="number" pattern="\d" name="fatorial" />
        <br />
        <button id="botao">Ver Fatorial</button>
        <br>
        <hr>
        <span  id="result_fatorial"></span>
    </fieldset>
</body>

</html>
<script>
    window.onload = function () {
            var botao = document.getElementById("botao");
            var message = document.getElementById("msg");
            var resultado = document.getElementById("result_fatorial");
            var fatorial = document.getElementsByName("fatorial")[0]; 
           
            botao.onclick = function () {
                gerarFatorial(parseInt(fatorial.value));
               
            }

            function gerarFatorial(num) {
                var msg = new String();
                var aux = new Number(1);
                for(var i = 1; i <= num; i++){
                    aux *= i;
                    if(aux == Infinity){
                        resultado.innerText = "";
                        message.innerHTML = "<span style=color:red;> Ultrapassou o limite suportado pelo navegador<hr>Tente um número menor </span>"
                        break;
                    }
                    if(i == num){
                        msg += i + "!"
                        message.innerText = "Fatorial  = " + aux;
                        resultado.innerText = msg;
                        break;
                    }
                    msg += i + "! x " 
                }
            }

        }
</script>
    