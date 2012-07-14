<p><b>Cuidado al comparar cadenas</b></p>
<p class="code">
    $left = "ABC";
    $right = "ABD";
    echo (int) ($left > $right);
</p>
<p class="code">
    $left = "apple";
    $right = "Apple";
    echo (int) ($left > $right);
</p>
<p> No es alfabético- cuidado, se verá en cadenas </p>
