<?php
    include "classnome.php";

    $c = new classnome($_POST["v1"],$_POST["v2"],$_POST["v3"]);

    //var_dump($c);

    $c->set_atributo1("a");

    echo $c->get_atributo1();
?>