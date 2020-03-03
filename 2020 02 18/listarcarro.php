<?php
    include "classcarro.php";
    include "cabecalho.php";
?>
objetos "carro" instanciados no sistema: <br>
<?php
    foreach($_SESSION["carro"] as $c){
        echo"cor: <span style='color:$c->cor'>$c->cor</span> <br>
        quantidade portas: $c->qtd_porta <br>
        velocidade maxima: $c->velocidade_maxima <br>
        velocidade atual: $c->velocidade_atual
        <hr>";
    }
?>
</body>
</html>