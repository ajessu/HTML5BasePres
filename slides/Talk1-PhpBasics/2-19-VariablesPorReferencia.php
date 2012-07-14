<p>PHP pasa todo menos los objetos por valor.</p>
<p>Los objetos siempre por refencia aunque no le pongamos el &</p>
<p class="code">
    $a = 10;
    $b = &$a ;
    $b = 20;
    echo $a;
</p>
<p>Al contrario que otros lenguajes PHP es lento en referencias, está pensando para paso por valor 
    y usa un sistema llamado deferred-copy </p>