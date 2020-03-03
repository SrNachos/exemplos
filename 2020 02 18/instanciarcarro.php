<?php
    include "classcarro.php";
    include "cabecalho.php";

    $c = new carro();

    $c->cor = $_POST["cor"];
    $c->qtd_porta = $_POST["qtdporta"];
    $c->velocidade_maxima = $_POST["velmaxima"];
    $c->velocidade_atual = 0;

    $_SESSION["carro"][] = $c;
?>
<h3>Carro inserido com sucesso</h3>
</body>
</html>