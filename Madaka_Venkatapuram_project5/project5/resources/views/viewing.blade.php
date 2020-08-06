<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>view</title>
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
            <li><a href="../../http://axm1475.uta.cloud/">Blogs</a></li>/
            <li><a href="../../contactus">Contacto</a></li>
        </ul>
        <div class="container2">
            <img class="logo" src="../../proyecto3/homepage-one-banner.jpg" alt="Snow">
            <@if( Session::has('userID'))
                echo '<div class="centered"><h1>Welcome {{ Session::get('userID')->name }}</h1>
                <p>You Have Logged in as an Organiser</p>
            </div>';
            @endif

        </div>
    </div>
    <div class="body">
        <div class="sidenav">
            <a href="../../organiser">My Events</a>
            <a href="../../new">Create Events</a>
            <a href="../../adminContact">Contact</a>
        </div>
        <br>
        <br>
        <div class="mission60002">
            <h2>List of Participants attending the event</h1>
                <table class="center">
                    <tr>
                        <th>Participant ID</th>
                        <th>Participant Name</th>
                        <th>Nation</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach($viewings as $viewing)
                        <tr>
                            <td>{{$viewing->id}}</td>
                            <td>{{$viewing->name}}</td>
                            <td>{{$viewing->nation}}</td>
                            <td>{{$viewing->phone}}</td>
                            <td>{{$viewing->email}}</td>
                            <td><a onclick="return confirm('Are you sure?')" href="{{url('leaveidevent/'.$viewing->partiId.'/'.$viewing->eventId.'/')}}">leave</a></td>
                        </tr>
                    @endforeach
                </table>
                <br><br>
                <div class="holder">

                    <button class="w4"  onclick="window.location.href = 'logout';" type="submit">Log-Out</button>

                </div>
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
    <br>
    <br>
    <br>
    <br>
    <div class="footer">
        <div class="container26">
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
            <div class="footerim2">
                <p>DiazApps &copy; 20202 All Right Reserved</p>
                <button onclick="topFunction()">&and;</button>
            </div>
        </div>

    </div>
</div>
<script src="../../js/myScript.js"></script>
</body>
</html>
