<!DOCTYPE html>
<html lang="sp">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<title>Contact Us</title>
<link rel="stylesheet" href="/css/ciudad.css">
</head>
<body>
  <div id ="wrapper">
   <div class="tab2">
    <img class="logo-img" src="/proyecto3/Logotipo.png" alt="logo"/>
    <ul>
      <li><a href="/">Inicio</a></li>/
      <li><a href="mission">Nosotros</a></li>/
      <li><a href="team">Equipos</a></li>/
      <li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
      <li><a class="active" href="contactus">Contacto</a></li>/
      <li><a href="#" onclick="loginfun()">Incio De Sesion</a></li>
    </ul>
    <div class="container2">
  <img class="logo" src="/proyecto3/homepage-one-banner.jpg" alt="Snow">
  <div class="centered"><h1>CONTACT US</h1>
  <p>HOME&#160;&#160;&gt;&#160;&#160;CONTACT US</p>
  </div>
</div>
   </div>
   <div id="id01" class="modal">
  <form name="elog" class="modal-content" action="home3" method="post"  onsubmit="return vali()">
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
   <br>
 <div class="body">
     <div class="second">
  <table>
    <tr>
      <td class="left">
        <h1>NUESTRAS <span><i>REDES <u>SO</u>CIALES</i></span></h1>
  <table>
    <tr>
      <td><figure><a href="https://www.instagram.com/anuraag9981/?hl=en"><img class="soc" src="/proyecto3/insta.png"><figcaption> &#64;genteyciudadorg </figcaption></a></figure></td>
      <td><figure><a href="https://twitter.com/utarlington?s=20"><img class="soc1" src="/proyecto3/twitter.png"><figcaption> &#64;genteyciudadorg </figcaption></a></figure></td>
    </tr>
    <tr>
      <td><figure><a href="tel:001 446 724 3892"><img class="soc3" src="/proyecto3/phone.png"><figcaption>001&#160;346&#160;724&#160;3892 058&#160;414&#160;8225881 056&#160;933948007</figcaption></a></figure></td>
      <td><figure><a href="mailto:someone@example.com"><img class="soc2" src="/proyecto3/email.png"><figcaption>info@genteyciudad.org</figcaption></a></figure></td>
    </tr>
  </table>
  <br>
  <br>
      </td>
      <td class="right">
        <h1>FORMULARIO DE <span><i><u>CO</u>NTACTO</i></span></h1>
  @if(Session::has('success'))
   <div class="Success">
     {{ Session::get('success') }}
   </div>
@endif

        <form name="cform" action="contactus" onsubmit="return validatecForm()" method="post">
    <label for="name">Tu Nombre(requerido)</label>
    <input type="text" name="name" placeholder="Tu Nombre" required>

     <label for="email">Tu Correo(requerido)</label>
    <input type="text"name="email" placeholder="Tu Correo" required>

    <label for="tsubject">Asunto</label>
    <input type="text" name="subject" placeholder="Asunto">

    <label for="subject">Asunto</label>
    <textarea name="message" type="text"></textarea>

    <input type="submit" name="submit" value="ENVIAR">
  @csrf
  </form>
</td>
</tr>
</div>
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
<div class="container26">
  <img class="logo2565" src="/proyecto3/homepage-one-banner.jpg" alt="Snow">
  <div class="centered2565">
    <h2>Escríbenos, te invitamos a brindar lo mejor de ti para el bien común,<span> queremos conocer acerca de tus ideas para mejorar.</span></h2>
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
