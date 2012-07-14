<p><b>La palabra clave namespace y __NAMESPACE__</b></p>
<p class="code">
namespace MiProyecto;
echo '"', __NAMESPACE__, '"'; // imprime "MiProyecto"
</p>
<p class="code">
namespace MiProyecto;

use blah\blah as mío; 

blah\mío(); // llama a la función MiProyecto\blah\mío()
namespace\blah\mío(); // llama a la función MiProyecto\blah\mío()

namespace\func(); // llama a la función MiProyecto\func()
namespace\sub\func(); // llama a la función MiProyecto\sub\func()
namespace\nombrec::método(); // llama al método estático "método" de la clase MiProyecto\nombrec
$a = new namespace\sub\nombrec(); // instancia un objeto de la clase MiProyecto\sub\nombrec
$b = namespace\CONSTANTE; // asigna el valor de la constante MiProyecto\CONSTANTE a $b
</p>
