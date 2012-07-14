<p><b>BitWise Operators</b></p>
<p>Sirven para operar a nivel de bits.Más sencillo el negador ~</p>
<p class="code">
    $x=0;
    echo ~$x;
</p>
<p><img src="<?php echo $possible_dir?>/images/bitwise1.jpg" width="500px"/></p>
<p> Mover bits &gt;&gt; &lt;&lt;</p>
<p> &lt;&lt; Mueve los bits a la izquierda, añadiendo ceros. Como multiplicar por 2 elevado a</p>
<p class="code">
    $x=1;
    echo $x <<1;
    echo $x <<2;
</p>
<p>&gt;&gt; Mueve los bits a la derecha, quitando ceros</p>
<p>Cuidado php no overflow. Máquinas de 32bits o de 64 bits</p>
