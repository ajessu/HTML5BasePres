<p><b>Declarar Espacios de Nombres/ Subespacios</b></p>
<p>Palabra clave namespace-SIempre primera linea, excepto declare (declare casi no se usa curioso el ticks)</p>
<p>SOLO UNO por fichero¡¡ hacerme el favor. ASi conservamos simil ficheros</p>
<p class="code">
namespace MiProyecto\Sub\Nivel;

const CONECTAR_OK = 1;
class Conexión { /* ... */ }
function conectar() { /* ... */  }
</p>
<p>El ejemplo de arriba crea la constante MiProyecto\Sub\Nivel\CONECTAR_OK, la clase MiProyecto\Sub\Nivel\Conexión y la función MiProyecto\Sub\Nivel\conectar.</p>