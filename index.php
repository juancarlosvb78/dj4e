<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

?>
<div id="container">
<div style="margin-left: 10px; float:right">
<img src="images/Chuck_16x9_SakaiCar_DJ4E_small.png" onclick='window.location.href="https://www.sakaiger.com/sakaicar";' target="_blank" style="padding: 5px; width:360px;">
</div>
<h1>Django para Todos</h1>
<p>
Este sitio esta en construcción. Si desea ayudar con las traducciones, consulte el repositorio de GitHub 
<a href="https://github.com/csev-es/dj4e" target="_blank">
https://github.com/csev-es/dj4e</a>.
</p>
<p>This is an <b>under construction</b> copy of 
<a href="https://www.dj4e.com/" target="_blank">www.dj4e.com</a>.
</p>
<p>
Este sitio web está creando un conjunto de materiales, conferencias y tareas gratuitos para ayudar a los estudiantes
aprenda el marco de desarrollo web de Django.
Puede realizar este curso y recibir un certificado en:
<ul>
<li><a href="https://www.coursera.org/specializations/django">Coursera: Django for Everybody Specialization</a></li>
<li><a href="https://www.edx.org/xseries/michiganx-django-for-everybody">edX: Django for Everybody XSeries Program</a></li>
<li><a href="https://www.futurelearn.com/programs/django">FutureLearn: Django for Everybody Program</a></li>
</ul>
</p>
<p>
Usamos el entorno de alojamiento gratuito 
<a href="https://www.pythonanywhere.com" target="_blank">PythonAnywhere</a>
para implementar y probar nuestros proyectos y aplicaciones de Django.
Puede seguir utilizando este entorno de alojamiento para desarrollar e implementar 
sus aplicaciones Django después de completar el curso.
</p>
<h2>Tecnología</h2>
<p>
Este sitio utiliza
<a href="http://www.tsugi.org" target="_blank"> Tsugi </a>
marco para incorporar un aprendizaje
sistema de gestión en este sitio y manejar los autograders.
Si te interesa colaborar
para crear este tipo de sitios para usted, consulte la
<a href="http://www.tsugi.org" target="_blank"> tsugi.org </a>
sitio web.
<h3>Copyright</h3>
<p>
The material produced specifically for this site is by Charles Severance and others
and is Copyright Creative Commons Attribution 3.0 
unless otherwise indicated.  
</p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php 
require "footer.php";
