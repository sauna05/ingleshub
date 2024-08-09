<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        footer {
            background-color: rgb(26, 26, 120);
            padding: 20px 0;
            border-radius: 12px;
        }
        .footer-container {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }
        .footer-column h3 {
            margin-top: 0;
            font-size: 1.2rem;
            border-bottom: 2px solid rgb(26, 26, 120);
            padding-bottom: 10px;
            color: rgb(246, 246, 249);
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0;
        }
        .footer-column ul li {
            margin: 10px 0;
            font-size: 1rem;
        }
        .footer-column ul li a {
            color: rgb(251, 251, 254);
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-column ul li a:hover {
            color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Recursos</h3>
                <ul>
                    <li><a href="#">Aprender Inglés</a></li>
                    <li><a href="#">Verbo To Be</a></li>
                    <li><a href="#">Pronunciación</a></li>
                    <li><a href="#">Gramática</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contacto</h3>
                <ul>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Teléfono</a></li>
                    <li><a href="#">Dirección</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Sobre Nosotros</h3>
                <ul>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Equipo</a></li>
                    <li><a href="#">Misión</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Consultoría</a></li>
                    <li><a href="#">Entrenamiento</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
