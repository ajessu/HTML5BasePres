<p><b>Reportes</b>:</p>
<p>Error_reporting: en el ini error_reporting=E_ALL & ~E_NOTICE</p>
<p>Se puede cambiar dinámicamente con error_reporting()</p>
<p>display_errors on / off y log_errors</p>
<p>Función para capturar errores set_error_handler(function handler)</p>
<p>Una función handler: handler ( int $errno , string $errstr [, string $errfile [, int $errline [, array $errcontext ]]] )</p>
<p>Existe similar set_exception_handler (para excepciones) y register_shutdown_function(para finales de script)</p>
