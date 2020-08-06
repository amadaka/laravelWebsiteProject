
<!DOCTYPE html>
<html lang="sp">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<head>
	<title>Team Page</title>
	<link rel="stylesheet" href="/css/ciudad.css">
</head>
<body>
	<div id ="wrapper">
   <div class="tab2">
   	<img class="logo-img" src="/proyecto3/Logotipo.png" alt="logo"/>
		<ul>
			<li><a href="home">Inicio</a></li>/
			<li><a href="mission">Nosotros</a></li>/
			<li><a class="active" href="team">Equipos</a></li>/
			<li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
			<li><a  href="contactus">Contacto</a></li>/
			<li><a href="#" onclick="document.getElementById('id01').style.display='block'">Incio De Sesion</a></li>
		</ul>
		<div class="container2">
  <img class="logo" src="/proyecto3/homepage-one-banner.jpg" alt="Snow">
  <div class="centered"><h1>NUESTROS EQUIPOSS</h1>
  <p>INICIO&#160;&#160;&gt;&#160;&#160;NUESTROS EQUIPOS</p>
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
   	<div class="team">
   	<h1>Equipo de <span><i>Direccion</i></span></h1>
   	<table class="center">
   		<tr>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/mariaa.PNG" alt="logo"/>
   					<figcaption>Maria A Malaver</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/adonella.PNG" alt="logo"/>
   					<figcaption>Adonella Loffredo</figcaption>
   					<p>España</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/tamara.PNG">
   					<figcaption>Tamara Malaver</figcaption>
   					<p>USA</p>
   				</figure>
   			</td>
   		</tr>
   	</table>
   	<h1>Equipo de <span><i>Trabajo Multidisciplina</i></span></h1>
   	<table class="center">
   		<tr>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/beatriz.PNG" alt="logo"/>
   					<figcaption>Beatriz Marin</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/mariaeugenia.PNG" alt="logo"/>
   					<figcaption>Maria Eugenia Jiron</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/marcolopez.PNG" alt="logo"/>
   					<figcaption>Marco Lopez</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/virginia.PNG" alt="logo"/>
   					<figcaption>Virginia Ortega</figcaption>
   					<p>Chile</p>
   				</figure>
   			</td>
   		</tr>
   		<tr>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/josedionisio.PNG" alt="logo"/>
   					<figcaption>Joseo&#160;D Solorzano</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/otoniel.PNG" alt="logo"/>
   					<figcaption>Otoniel&#160;Martinez</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/vanessa.PNG" alt="logo"/>
   					<figcaption>Vanessa&#160;Curiel</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/lenin.PNG" alt="logo"/>
   					<figcaption>Lenin&#160;Malave</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   		</tr>
   		<tr>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/anacristina.PNG" alt="logo"/>
   					<figcaption>Ana C&#160;Rodriguez</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/iristriana.PNG" alt="logo"/>
   					<figcaption>Iris&#160;Triana</figcaption>
   					<p>Venezuela</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/emil.PNG" alt="logo"/>
   					<figcaption>Emil&#160;Beraun</figcaption>
   					<p>Peru</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/ingrid.PNG" alt="logo"/>
   					<figcaption>Ingrid&#160;Nuñez</figcaption>
   					<p>USA</p>
   				</figure>
   			</td>
   		</tr>
   		<tr>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/juanpablo.PNG" alt="logo"/>
   					<figcaption>Juan P&#160;Patiño</figcaption>
   					<p>Mexico</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/geanina.PNG" alt="logo"/>
   					<figcaption>Geanina&#160;Ureña</figcaption>
   					<p>Costa Rica</p>
   				</figure>
   			</td>
   			<td>
   				<figure>
   					<img class="soc4" src="/proyecto3/benito.PNG" alt="logo"/>
   					<figcaption>Benito Rodriguez</figcaption>
   					<p>Venezuela</p>
   				</figure>
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
