<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>New Event</title>
    <link rel="stylesheet" href="css/ciudad.css">
</head>
<body>
<div id ="wrapper">
    <div class="tab2">
        <img class="logo-img" src="proyecto3/Logotipo.png" alt="logo"/>
        <ul>
            <li><a href="home">Inicio</a></li>/
            <li><a href="mission">Nosotros</a></li>/
            <li><a href="team">Equipos</a></li>/
            <li><a href="http://axm1475.uta.cloud/">Blogs</a></li>/
            <li><a href="contactus">Contacto</a></li>
        </ul>
        <div class="container2">
            <img class="logo" src="proyecto3/homepage-one-banner.jpg" alt="Snow">
            <div class="centered"><h1>Create <span><i>Event</i></span></h1>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="sidenav">
            <a href="organiser">My Events</a>
            <a class="active2" href="new_event.php">Create Events</a>
            <a href="adminContact">Contact</a>
        </div>
        <div class="mission601">
            <h1>Event <span><i>Details</i></span></h1>
            <form name="newevent" action="new1" enctype="multipart/form-data" method="post" onsubmit="return validatenForm()">
                @csrf
                <table class="center">
                    <tr>
                        <td><h3>Event <span>Name:</span></h3></td>
                        <td>
                            <input type="text" name="ename" required>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Event <span>Date:</span></h3></td>
                        <td>
                            <input type="Date" name="edate" min="<?php echo date("Y-m-d"); ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Event <span>Time:</span></h3></td>
                        <td>
                            <input type="Time" name="time" required>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Event <span>Location:</span></h3></td>
                        <td>
                            <input type="text" name="location" required>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Event <span>Image</span></h3></td>
                        <td>
                            <input type="file" id="img" name="img" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Event <span>Discription:</span></h3></td>
                        <td>
                            <textarea id="dis" name="dis"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="eventnew" value="Add Event">
                @csrf
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
        <div class="container26">
            <img class="logo2565" src="proyecto3/homepage-one-banner.jpg" alt="Snow">
            <div class="centered2565">
                <h2>Escríbenos, te invitamos a brindar lo mejor de ti para el bien común,<span> queremos conocer acerca de tus ideas para mejorar.</span></h2>
            </div>
        </div>
        <div class="container2">
            <div class="footer2">
                <div class="centered">
                    <a href="mailto:someone@example.com"><img class="icon2" src="proyecto3/mini_email.png"></a>
                    &#160;
                    <a href="https://twitter.com/utarlington?s=20"><img class="icon2" src="proyecto3/mini_twiter.png"></a>
                    &#160;
                    <a href="https://www.instagram.com/anuraag9981/?hl=en"><img class="icon2" src="proyecto3/mini_inst.png"></a>
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
<script src="js/myScript.js"></script>
</body>
</html>
