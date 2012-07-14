<p><b>Constructores básicos</b></p>
<p> Echo != print</p>
<p> echo no es una función, no devuelve nada, print devuelve si se ha imprimido (true) o no </p>
<p> die() es alias de exit() </p>
<p> return devuelve un valor para salida de una función </p>
<br />
<p class="code">
    $salida = print("salida");
    echo "---";
    echo $salida."<--Debe valer 1";
</p>
<p>Require y require_once dan error si no encuentran, include e include_once dan warning</p>
<p>list para pasar a array</p>
<p class="code">
    list($year,$month,$day)=explode("-",date("Y-m-d"));
</p>
