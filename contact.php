<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySql">
    <meta name="description" content="Clases de yoga">
    <title>Respira una nueva vida</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Droid+Serif" rel="stylesheet">
    <link href="images/fav-yoga2.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="container-contact">
        <section class="start-contact">
            <nav class="nav-dhyana">
                <ul>
                    <li><a href="index.html">Dhyana</a></li>
                    <li><a href="ayurveda.html">Ayurveda</a></li>
                    <li><a href="staff.html">Profesores</a></li>
                    <li><a href="album.html">Galería</a></li>
                    <li><a href="schedule.html">Horarios</a></li>
                    <li><a href="https://wordpress.com" target="_blank">Blog</a></li>
                    <li><a href="contact.php" class="overline">Contacto</a></li>
                </ul>
            </nav>
        </section>
        <section class="content-contact">
            <div class="box-form">
                <div class="contact-us"><h1>¡Contáctanos!</h1></div>
                <form action="contact_form.php" method="post">

                    <div class="form-group">
                        <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre completo">
                    </div>
                    
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input name="phone" type="tel" placeholder="44444445" title="44444445">
                    </div>

                    <textarea class="form-control" name="message" rows="3"></textarea>
                    <button type="submit" class="btn btn-default">Recibir más información</button>
                </form>
            </div>
        </section>
        <section class="footer-index">
            <footer class="end-index">
                <div class="footnav-index">
                    <ul class="first-list">
                        <li><a href="ayurveda.html">Ayurveda</a></li>
                        <li><a href="staff.html">Profesores</a></li>
                    </ul>
                    <ul class="second-list">
                        <li><a href="album.html">Galería</a></li>
                        <li><a href="schedule.html">Horarios</a></li>
                    </ul>
                    <ul class="third-list">
                        <li><a href="https://wordpress.com" target="_blank">Blog</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                    </ul>
                    <p>Encontranos en:</p>
                    <ul class="social-list">
                        <li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="copyright-index">
                    <p>Copyright © 2017 | DhyanaYoga</p>
                </div>
            </footer>
        </section>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		<script src="send.js"></script>
</body>
</html>