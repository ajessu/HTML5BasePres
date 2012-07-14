<p><b>Operadores Aritméticos</b></p>
<img src="<?php echo $possible_dir?>/images/aritmeticos.jpg" />
<p>CUIDADO CON % no vale números grandes-- Usar funcion mod()</p>
<p>Unario de incremento / decremento ++, --</p>
<p>Si está puesto detrás de la variable lo incrementa después</p>
<p>Si está puesto antes, lo incrementa antes</p>
<p class="code">
    $a = 1;
    echo $a++; //devuelve 1, $a vale 2
    echo ++$a; //devuelve 3, $a vale 3
    echo --$a; //devuelve 2, $a vale 2
    echo $a--; //devuelve 2, $a vale 1
    echo $a;
    $a = 'Test';
    echo ++$a;
</p>
<p>UNa cadena al pasarla a integer vale 0?¿?¿OLD VERSIONS?</p>