<p>Dos precauciones</p>
<p>1- Php no comprueba volcados de pila</p>
<p class="code">
    $num = 1;
    $num = $num << 64;
    echo $num;
</p>
<p>2- Cuidado con floats </p>
<p class="code">
    echo (int)((0.1+0.7)*10);
</p>
<p> Si vas a tratar con números y precisión usa BCMath extension</p>
