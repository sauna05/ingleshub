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
        header {
            background-color: rgb(26, 26, 120);
            
            height: 80px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            color: white;
            position: relative;
        }
        .menu {
            display: flex;
       
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 60px; /* Ajusta el tamaño del logo */
            border-radius: 60%;
            width: 5vw;
        }
        .opciones {
            display: flex;
            gap: 20px;
        }
        .opciones a {
            color: white;
            
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            position: relative;
            right: 5vw;
            border-radius: 8px;
            
        }
        .opciones a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .btn-ac  a{
            position: relative;
            right: 2vw;
            color: white;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            text-decoration: none;

        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <div class="logo">
                <img src="{{asset('img/logo_ingles_2.jpg')}}" alt="Logo"> <!-- Reemplaza con tu logo -->
            </div>
            <div class="opciones">
                <a href="">Aprender</a>
                <a href="">Practicar</a>
                <a href="">Curso</a> 
                <a href="">Jugar</a>
               
            </div>
            <div class="btn-ac">
                 <a href="">Accede</a>
                 <a href="">Registrate</a>
            </div>
        </div>
    </header>
    {{-- contenido --}}
</body>
</html>
