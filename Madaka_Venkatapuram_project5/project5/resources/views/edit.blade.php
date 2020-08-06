 <!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>New Event</title>
    <link rel="stylesheet" href="../../css/ciudad.css">
</head>
<body>
<div id ="wrapper">
    <div class="tab2">
        <img class="logo-img" src="../../proyecto3/Logotipo.png" alt="logo"/>
        <ul>
            <li><a href="../../home">Inicio</a></li>/
            <li><a href="../../mission">Nosotros</a></li>/
            <li><a href="../../team">Equipos</a></li>/
            <li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
            <li><a href="../../contactus">Contacto</a></li>
        </ul>
        <div class="container2">
            <img class="logo" src="../../proyecto3/homepage-one-banner.jpg" alt="Snow">
            <div class="centered"><h1>Edit <span><i>Event</i></span></h1>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="body">
        <div class="sidenav">
            <a href="../../organiser">My Events</a>
            <a href="../../new">Create Events</a>
            <a href="../../adminContact">Contact</a>
        </div>
        <div class="mission601">
            <h1>Event <span><i>Details</i></span></h1>
            <form name="editevent" enctype="multipart/form-data" action="../../hell2" method="post" onsubmit="return validateenForm()">
                @csrf
                <table class="center">
                    @isset($event->image_loc)
                        <tr>
                            <td colspan="2">
                                <img class="soc1002" src="../../upload/{{$event->image_loc}}">
                            </td>
                        </tr>
                    @endisset
                    @empty($event->image_loc)

                        <tr>
                            <td colspan="2">
                                <img class="soc1002" src="../../proyecto3/download.png">
                            </td>
                        </tr>
                    @endempty
                <tr>
      				<td><h3>Event <span>ID:</span></h3></td>
      				<td>
      					<input type="text" name="eid" disabled placeholder="{{$event->id}}" value="{{$event->id}}">
      				</td>
      			</tr>
      			<tr>
      				<td><h3>Event <span>Name:</span></h3></td>
      				<td>
      					<input type="text" name="ename" disabled placeholder="{{$event->name}}">
      				</td>
      			</tr>
      			<tr>
      				<td><h3>Event <span>Date:</span></h3></td>
      				<td>
      					<input type="Date" name="edate" min="'.date("Y-m-d").'" placeholder="{{$event->date}}" required>
      				</td>
      			</tr>
      			<tr>
      				<td><h3>Event <span>Time:</span></h3></td>
      				<td>
      					<input type="Time" name="time" placeholder="{{$event->time}}" required>
      				</td>
      			</tr>
      			<tr>
      				<td><h3>Event <span>Location:</span></h3></td>
      				<td>
      					<input type="text" name="location" placeholder="{{$event->location}}" required>
      				</td>
      			</tr>
      			<tr>
      				<td><h3>Event <span>Discription:</span></h3></td>
      				<td>
      					<textarea id="dis" name="dis" disabled>'{{$event->description}}'</textarea>
      				</td>
      			</tr>
                </table>
                <input type="submit" name="edit" value="Confirm">

            </form>
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
    <br>
    <br>
    <br>
    <div class="footer">
        <<div class="container26">
            <img class="logo2565" src="../../proyecto3/homepage-one-banner.jpg" alt="Snow">
            <div class="centered2565">
                <h2>Escríbenos, te invitamos a brindar lo mejor de ti para el bien común,<span> queremos conocer acerca de tus ideas para mejorar.</span></h2>
            </div>
        </div>
        <div class="container2">
            <div class="footer2">
                <div class="centered">
                    <a href="mailto:someone@example.com"><img class="icon2" src="../../proyecto3/mini_email.png"></a>
                    &#160;
                    <a href="https://twitter.com/utarlington?s=20"><img class="icon2" src="../../proyecto3/mini_twiter.png"></a>
                    &#160;
                    <a href="https://www.instagram.com/anuraag9981/?hl=en"><img class="icon2" src="../../proyecto3/mini_inst.png"></a>
                </div>
            </div>
        </div>
        <div class="footerim">
            <p>DiazApps &copy; 20202 All Right Reserved</p>
        </div>

    </div>
</div>
<script src="../../js/myScript.js"></script>
</body>
</html>
