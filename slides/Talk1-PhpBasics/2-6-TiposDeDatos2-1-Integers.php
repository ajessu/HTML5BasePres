<p>Numericos</p>
<p>Php reconoce dos tipos de números: Integers and floats</p>
<q>1-Enteros:</q>
<ul>
    <li><b>Decimal</b> (10,-5,1337) Sin comas, ni puntos ni nada</li>
    <li><b>Octal</b> (0755,0677) Empiezan por cero, util en unix permissions</li>
    <li><b>Hexadecimal</b> (0x123, 0XFF, -0x100) Empiezan por 0x ó 0X </li>
</ul>
<p class="code">
    $ex["octal1"] = 0755;
    $ex["octal2"] = 0777;
    $ex["hexa1"] = 0x123;
    $ex["hexa2"] = 0XFF;
   foreach($ex as $key =&gt; $value){
    echo $key. ":" .$value."<br />";
   }
</p>
