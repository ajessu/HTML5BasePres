<p><b>Booleans</b></p>
<p>Solo dos valores true / false </p>
<p>Conversiones:</p>
<p>- Desde número- Un número convertido a Boolean es false si el original valía cero</p>
<p class="code">
    echo 2E-7 ."---";
    echo (bool)2E-7 ."---";
    echo (bool)(int)2E-7 ."---";
</p>
<p>- Desde string- Es convertido a falso solo si está vacío o contiene el carácter único 0</p>
<p class="code">
    echo (bool)"0" ."---";
    echo (bool) "00" ."---";
    echo (bool) 0 ."---";
    echo (bool) 00 ."---";
</p>
<p> Un boolean se convierte en int / string como 1 o 0 </p>

