<p><b>Variables</b></p>
<p>Puede contener cualquier tipo de data, y es loosely typed, cambia el tipo según lo necesite</p>
<p>Empiezan por $. SOlo puede contener [a-z,A-Z], números y _ (underscore)</p>
<p> SOLO EMPIEZAN POR letra o por _</p>
<p><b>Variables Variables</b></p>
<p class="code">
    $a = "hola";
    $$a = "Soy otra";
    echo "Existe $ hola ? definido? ";
    echo $hola;
</p>
<p><b>Funciones Variables</b></p>
<p class="code">
    function lio() { echo "Esto es un poco lio";}
    $variable = "lio"; //como string
    $variable();
</p>
