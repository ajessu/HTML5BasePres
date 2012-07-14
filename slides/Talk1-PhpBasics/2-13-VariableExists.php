<p><b>Variable Exists</b></p>
<p>Usamos isset en tiempo de ejecución</p>
<p>Devuelve true si existe y tiene un valor diferente de NULL</p>
<p class="code">
    $vacia = "";
    echo isset($vacia);
    echo "---";
    echo empty($vacia);
    echo "---";
    echo isset($noexiste);
    echo "---";
    echo empty($noexiste);
</p>
<p> empty() es el opuesto de (boolean) var, excepto que no se genera ninguna advertencia cuando la variable no está definida.</p>
<p> empty() da true si "", si 0 , si 0.0, si "0", si NULL, si FALSE, si solo array(),si var $var - declarada sin valor</p>