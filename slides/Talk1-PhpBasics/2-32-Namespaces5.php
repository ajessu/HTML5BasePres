<p class="code">
namespace foo;
//usamos use en una clase¡¡
use Mi\Completo\NombreDeClase as Otra;

// esto es lo mismo que usar Mi\Completo\NombreEN as NombreEN
use Mi\Completo\NombreEN;

// importar una clase global
use ArrayObject;

$obj = new namespace\Otra; // instancia un objeto de la clase foo\Otra
$obj = new Otra; // instancia un objeto de la clase class Mi\Completo\NombreDeClase
NombreEN\suben\func(); // llama a la función Mi\Completo\NombreEN\subes\func
$a = new ArrayObject(array(1)); // instancia un objeto de la clase ArrayObject
// sin el "use ArrayObject" instanciaríamos un objeto de la clase foo\ArrayObject
</p>
