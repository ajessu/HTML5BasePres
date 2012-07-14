<p><b>No cualificado, cualificado, completamente cualificado</b></p>
<p>Ejemplo nombres de rutas de ficheros:3 métodos</p>
<p>1-No cualificado- Nombre del fichero actual (texto.txt) accedes a /directorioactual/texto.txt</p>
<p>2-Cualificado- Das ruta relativa + fichero (subdirectorio/texto.txt) accedes a /diractual/subdirectorio/texto.txt</p>
<p>3-Completamente Cualificado- Das ruta absoluta (/directorio/sub/texto.txt)</p>
<br />
<p><b>¿Y en php ?</b></p>
<p>1-No cualificado. Llamas a $a = new clase(); Está llamando a namespaceactual\clase. Si no usas namespace llama a global como toda la vida
    <br/>Y si no lo encuentra en el espacio de nombres se va al global.</p>
    
