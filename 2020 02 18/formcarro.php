<?php
    include "cabecalho.php";
?>
    <h1>criar objeto carro<h1>
    <form action="instanciarcarro.php" method="post">
        Definir cor carro:
        <input type="color" name="cor">
        <br>
        <input type="number" step="1" min="1" max="5" name="qtdporta" placeholder="quantidade portas">
        <br>
        <input type="number" step="20" min="20" max="500" name="velmaxima" placeholder="velocidade maxima">
        <br>
        <input type="submit" value="criar carro">
    </form>
</body>
</html>