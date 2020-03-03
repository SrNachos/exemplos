<?php
    include "classcarro.php";
    include "cabecalho.php";
?>
objetos "carro" instanciados no sistema: <br>
<?php
    foreach($_SESSION["carro"] as $i=>$c){
        echo"cor: <span style='color:".$c->get_cor()."'></span> <br>
        quantidade portas: ".$c->get_qtdporta()." <br>
        velocidade maxima: ".$c->get_velocidademaxima()." <br>
        velocidade atual: ".$c->get_velocidadeatual()."
        <form method='post' action='acelerar.php'>
        <input type='number' name='tempo' placeholder='tempo de aceleração / frenagem'>
        <input type='number' name='aceleracao_frenagem' placeholder='aceleração/frenagem'><br>
        <input type='radio' class='radio' name='tipo' value='a'>aceleração
        <input type='radio' class='radio' name='tipo' value='f'>frenagem
        <input type='hidden' name='id' value='$i'>
        <input type='submit' value='Acelerar / Frear'>
        </form>
        <hr>";
    }
?>
</body>
</html>