<!DOCTYPE html>
<html lang="sp">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<head>
	<title>Mission Page</title>
	<link rel="stylesheet" href="/css/ciudad.css">
</head>
<body>
	<div id ="wrapper">
   <div class="tab2">
   	<img class="logo-img" src="../proyecto3/Logotipo.png" alt="logo"/>
		<ul>
			<li><a href="home">Inicio</a></li>/
			<li><a class="active"href="mission">Nosotros</a></li>/
			<li><a href="team">Equipos</a></li>/
			<li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
			<li><a  href="contactus">Contacto</a></li>/
			<li><a href="#" onclick="document.getElementById('id01').style.display='block'">Incio De Sesion</a></li>
		</ul>

		<div class="container2">
  <img class="logo" src="/proyecto3/homepage-one-banner.jpg" alt="Snow">
  <div class="centered"><h1>NOSOTROS</h1>
  <p>INICIO&#160;&#160;&gt;&#160;&#160;NOSOTROS</p>
  </div>
</div>
   </div>
   <div id="id01" class="modal">


  <form name="elog" class="modal-content" action="home3" method="post" onsubmit="return vali()">
    <div class="imgcontainer">
      <span onclick="logclose()" class="close" title="Close Modal">&times;</span>
    </div>
    <h1>Inicio De <span>Sesion</span></h1>
    <br>
        <br>
      @if(Session::has('fails'))
          <div class="error">
              {{ Session::get('fails') }}
          </div>
      @endif
    <hr>

    <div id ="wrapper">
      <label for="uname">Correo</label>
      <input type="text" placeholder="Tu Correo" name="uname" required>

      <label for="psw">Contraseña</label>
      <input type="password" placeholder="Tu Contraseña" name="psw" required>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <br>
      <button name="login" type="submit">ENVIAR</button>
    </div>
  </form>
</div>
    <br>
     <div class="body">
   	<div class="mission">
   		<table class="center">
   		<tr>
   			<td>
   				<table class="center">
   					<tr>
   						<td>
   							<h2>
   								<u>Nu</u>estra <span><i>MISIÓN</i></span>
   							</h2>
   							<p>Somos una Corporación no gubernamental en Estados Unidos, sin fines de lucro, que tiene el propósito de contribuir con el Desarrollo Sostenible de las ciudades, a través de investigaciones, asesorías, formulación de Proyectos, planes de formación, iniciativas de responsabilidad social y voluntariado.</p>
   						</td>
   					</tr>
   				</table>
   			</td>
   			<td>
   				<table class="center">
   					<tr>
   						<td>
   							<h2>
   								<u>Nu</u>esta <span><i>VISIÓN</i></span>
   							</h2>
   							<p>Ser reconocida como un instrumento facilitador para promover el Desarrollo Sustentable de la colectividad. Nuestra filosofía de trabajo contempla la búsqueda concertada de soluciones de distintos actores sociales con la participación de la ciudadanía.</p>
   						</td>
   					</tr>
   				</table>
   			</td>
   		</tr>
   	</table>
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class="mission2">
   <table class="center">
   	<tr>
   		<td>
   			<table class="boxing">
   				<tr>
   					<td>
   						<p>Asesorías a los políticos y gobernantes dispuestos a impulsar la sostenibilidad dispuestos a llevar adelante una gestión al servicio de su ciudadanía desde el punto de vista de la gobernanza y el gobierno confiable basado en la calidad a partir del modelo de gestión de gobierno sostenible local de los estándares de las normas ISO para gobiernos.</p>
   					</td>
   				</tr>
   			</table>
   			<p>QUÉ BRINDAMOS?</p>
   		</td>
   		<td>
   			<table class="boxing">
   				<tr>
   					<td>
   						<p>
   							Proyectos innovadores en función de generar beneficios para la ciudad a partir de su gente, a partir de la participación ciudadana organizada y efectiva. Vivir en Ciudades dignas al servicio de las necesidades reales de la ciudadanía es posible, en “Gente y Ciudad” trabajamos para convertir los sueños colectivos en realidad.</p>
   					</td>
   				</tr>

   			</table>
   			<p>QUÉ DESARROLLAMOS?</p>
   		</td>
   		<td>
   			<table class="boxing">
   				<tr>
   					<td>
   						<p>
   							Para sumar a todo aquel dispuesto a brindar su mejor aporte para formar ciudadanos y comunicar cómo lograr esas ciudades sostenibles al servicio de la ciudadanía. Nos organizamos para poner en práctica todas las metodologías que hacen posible la sostenibilidad local, partimos de la base, desde la gente, para convertirla en ciudadano a partir de la formación y la comunicación estratégica, la sostenibilidad es posible si hay participación ciudadana y hay participación ciudadana si existen ciudadanos.</p>
   					</td>
   				</tr>
   			</table>
   			<p>PARA QUÉ TRABAJAMOS?</p>
   		</td>
   	</tr>

   </table>
</div>

   <br>
   <br>
   <h2>Nuestros <span>Valores</span></h2>
 <div class="mission2">
 	<table class="center">
 		<tr>
 			<td>
 				<h2><u>CA</u>LIDAD</h2>
 				<p><b>Es la práctica de los integrantes de Gente & Ciudad que fomenta una mejora continua para alcanzar la misión de la organización.</b></p>
 			</td>
 			<td>
 				<h2><u>CO</u>NFIANZA</h2>
 				<p><b>Es la seguridad que Gente & Ciudad genera a través de sus actos.</b></p>
 			</td>
 			<td>
 				<h2><u>CO</u>HERENCIA</h2>
 				<p><b>Todas las actuaciones de Gente & Ciudad estarán en consonancia con sus valores institucionales.</b></p>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				<h2><u>CO</u>MPROMISO</h2>
 				<p><b>Los integrantes de Gente & Ciudad asumen como propio el cumplimiento de las obligaciones de la institución.</b></p>
 			</td>
 			<td>
 				<h2><u>CO</u>OPERACIÓN</h2>
 				<p><b>En Gente & Ciudad se promueve la suma de fuerzas para lograr objetivos compartidos.</b></p>
 			</td>
 			<td>
 				<h2><u>TR</u>ANSPARENCIA</h2>
 				<p><b>Es la cualidad que caracteriza y promueve Gente & Ciudad que permite conocer claramente nuestro planteamientos y acciones.</b></p>
 			</td>
 		</tr>

 	</table>

</div>
</div>
 <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class="footer">
<div class="container3">
	<img class="logo2" src="/proyecto3/homepage-one-banner.jpg">
	<div class="centered2">
		<h2> Contactate con <span><i>Nosotros</i></span></h2>
	</div>
	<div class="bottom-right">
	<form name="eform" action="home2" method="post" onsubmit="return validateremail()"><input type="text" id="email" name="email" placeholder="email" required>
<input type="submit" name="econtact" value="ENVIAR">
        @csrf
  </form>
	</div>
</div>
<div class="container2">
<div class="footer2">
	<div class="centered">
		<a href="mailto:someone@example.com"><img class="icon2" src="/proyecto3/mini_email.png"></a>
		&#160;
		<a href="https://twitter.com/utarlington?s=20"><img class="icon2" src="/proyecto3/mini_twiter.png"></a>
		&#160;
		<a href="https://www.instagram.com/anuraag9981/?hl=en"><img class="icon2" src="/proyecto3/mini_inst.png"></a>
	</div>
  </div>
</div>
 <div class="footerim">
    <div class="footerim2">
    <p>DiazApps &copy; 20202 All Right Reserved</p>
    <button>&and;</button>
    </div>
  </div>

</div>







	</div>
<script src="/js/myScript.js"></script>
</body>
</html>
