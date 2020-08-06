<!DOCTYPE html>
<html lang="sp">
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="/css/ciudad.css">
</head>
<body>
  <div id ="wrapper">
   <div class="tab2">
    <img class="logo-img" src="/proyecto3/Logotipo.png" alt="logo"/>
    <ul>
      <li><a class="active" href="home">Inicio</a></li>/
      <li><a href="mission">Nosotros</a></li>/
      <li><a href="team">Equipos</a></li>/
      <li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
      <li><a href="contactus">Contacto</a></li>/
      <li><a href="#" onclick="loginfun()">Incio De Sesion</a></li>
    </ul>

    <div class="container2">
  <img class="logo4" src="/proyecto3/homepage-one-banner.jpg" alt="Snow"/>
  <img class="logo5" src="/proyecto3/objects.png"/>
  <div class="text-block"><h1><span>GENTE</span></h1><h1>Y&nbsp;CIUDAD</h1>
  <p>Buscamos marcar un punto de partida                   para la transformación de nuestras dificultades y diferencias en cimientos firmes que, desde las ciudades, requieren nuestros países latinoamericanos para convertirse en los mejores lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de vida y asegurar los derechos de las futuras generaciones.</p>
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
      @csrf
  </form>
</div>
<br>
<br>
<br>
<br>
<div class="body">
  <div class="objective">
    <h1>OBJETIVOS</h1>
    <p>Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los gobierno locales para el desarrollo sostenible.</p>
    <p>Formular proyectos para promover la participación ciudadana en iniciativas locales para la sostenibilidad.</p>
    <p>Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno abierto para la sostenibilidad.</p>
    <p>Promover iniciativas de responsabilidad social y voluntariado, como espacios de participación ciudadana</p>
    <p>Implementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la ciudadanía como eje fundamental para la transformación de las ciudades.</p>
  </div>
  <br><br><br><br>
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
<br><br><br><br>
<div class="second">
  <table>
    <tr>
    <td id="third">
    <br><br><br>
    <table id="center">
      <tr>
            <td><figure>
              <img class="image "src="/proyecto3/mic.png"><figcaption>18 FOROS</figcaption>
            </figure></td>
            <td><figure>
              <img class="image "src="/proyecto3/parti.png"><figcaption>50 + PASTICPANTES</figcaption>
            </figure></td>
          </tr>
          <tr>
            <td><figure>
              <img class="image "src="/proyecto3/book.png"><figcaption>30 EVENTOS</figcaption>
            </figure></td>
            <td><figure>
              <img class="image "src="/proyecto3/event.png"><figcaption>3 EVENTOS POR DIAS</figcaption>
            </figure></td>
          </tr>
        </table>
  </td>
  <td id="nine">
    <div class="t23ext-blo">
      <h1>Registrate con <span>Nosotros</span></h1>
      <p>Para estas informado de nuestas actividades y eventos</p>
        @if(Session::has('fail'))
            <div class="error">
                {{ Session::get('fail') }}
            </div>
        @endif
      <form name="rform" class="m23odal-cont" action="home" method="post" onsubmit="return validaterForm()">
          <input type="text" placeholder="Correo" name="email" required>

      <input type="password" placeholder="Contraseña" name="password" required>
      <input type="password" placeholder="Repite la contraseña" name="password_confirmation" required>

      <input type="text" placeholder="Nombre Completo" name="name" required>
      <input type="text" placeholder="Cuidad de Origen" name="nation" required>

      <input type="text" placeholder="Telefono" name="phone" required>
      <select name="role">
        <option value="user">Participant</option>
        <option value="admin">Organiser</option>
      </select>
      <br> <br>
      <input type="submit" name="submit" value="REGISTRAR AHORA">
          @csrf
    </form>
    </div>
  </td>
</tr>
</table>
</div>


<div class="mission9">
  <br>
  <br>
  <br>
  <h2>Nuestros Aliados <span><i>Estrategicos</i></span></h2>
  <table class="center2">
    <tr>
      <td>
        <img class="soc104" src="/proyecto3/i.jpg">
      </td>
      <td>
      <img class="soc103" src="/proyecto3/image3.jpg">
      </td>
    </tr>
  </table>
  <br><br><br>
</div>
<div class="mission10">
<h1>Nuestros <span><i>Blog</i></span></h1>
<p>Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad.</p>
<table class="center">
  <tr>
    <td>
      <table class="boxing">
        <tr>
          <td>
            <div class="container2">
            <img class="soc201" src="../proyecto3/image1.jpg">
            <div class="bottom-left">
              <h1>23</h1>
              <p>AGO</p>
            </div>
          </div>
          <p>¿Ciudadanos?</p>
          <hr>
          <p><img class="soc502" src="../proyecto3/admin.png"> Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="../proyecto3/heart.png"> 350&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="../proyecto3/com.png"> 30</p>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table class="boxing">
        <tr>
          <td>
            <div class="container2">
            <img class="soc201" src="../proyecto3/image2.png">
            <div class="bottom-left">
              <h1>23</h1>
              <p>AGO</p>
            </div>
          </div>
          <p>Efecto espejo: Calidad de vida</p>
          <hr>
          <p><img class="soc502" src="/proyecto3/admin.png"> Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="/proyecto3/heart.png"> 350&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="/proyecto3/com.png"> 30</p>
          </td>
        </tr>

      </table>
    </td>
    <td>
      <table class="boxing">
        <tr>
          <td>
            <div class="container2">
            <img class="soc201" src="/proyecto3/i.jpg">
            <div class="bottom-left">
              <h1>13</h1>
              <p>May</p>
            </div>
          </div>
          <p>Evolución ciudadana (opinión)</p>
          <hr>
          <p><img class="soc502" src="/proyecto3/admin.png"> Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="/proyecto3/heart.png"> 350&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="soc501" src="/proyecto3/com.png"> 30</p>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
</div>
<br><br><br>
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
    <button onclick="topFunction()">&and;</button>
    </div>
  </div>

</div>
</div>
<script src="/js/myScript.js"></script>
</body>
</html>
