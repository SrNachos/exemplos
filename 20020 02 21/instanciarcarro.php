<?php
    include "classcarro.php";
    include "cabecalho.php";

    $c = new carro($_POST["cor"],$_POST["qtdporta"],$_POST["velmaxima"]);

    $_SESSION["carro"][] = $c;
?>
<h3>Carro inserido com sucesso</h3>
</body>
</html>