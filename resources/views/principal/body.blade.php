<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .header {
            background-color: rgb(251, 248, 248);
            padding: 2rem 0;
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #ddd;
        }
        .header h2 {
            margin: 0;
            font-size: 2rem;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .card h3 {
            margin: 1rem 0;
            font-size: 1.5rem;
        }
        .card p {
            font-size: 1rem;
            color: #666;
        }
        .contenido-banner {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }
        .banner {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .banner img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        .banner h4 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }
        .banner p {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2> Aprende Inglés</h2>
        </div>
        
        <div class="grid">
            <div class="card">
                <img src="https://www.curso-ingles.com/assets/unit_cat/Sintaxis.png" alt="Card Image">
                <h3>Verbo To Be</h3>
                <p>Aprende sobre el uso del verbo "to be" en inglés, incluyendo sus diferentes formas y aplicaciones en oraciones.</p>
            </div>
            <div class="card">
                <img src="https://www.curso-ingles.com/assets/unit_cat/Verbos.png" alt="Card Image">
                <h3>Los Pronombres</h3>
                <p>Explora los pronombres en inglés, incluyendo pronombres personales, posesivos y reflexivos con ejemplos prácticos.</p>
            </div>
            <div class="card">
                <img src="https://www.curso-ingles.com/assets/unit_cat/Pasado.png" alt="Card Image">
                <h3>El Presente Simple</h3>
                <p>Entiende la estructura del presente simple en inglés y cómo se utiliza para describir acciones habituales y hechos generales.</p>
            </div>
            <div class="card">
                <img src="https://www.curso-ingles.com/assets/unit_cat/Futuro.png" alt="Card Image">
                <h3>El Pasado Simple</h3>
                <p>Aprende a usar el pasado simple para hablar de acciones que ocurrieron en un momento específico en el pasado.</p>
            </div>
        </div>
        
        <div class="contenido-banner">
            <div class="banner">
                <img src="data:image/jpeg;base64,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" alt="Banner Image">
                <h4>Aprende los Días de la Semana</h4>
                <p>Descubre cómo se utilizan los días de la semana en inglés y aprende vocabulario esencial para tu día a día.</p>
            </div>
            <div class="banner">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCeUbW_dwUoEV8QArgBjYLInuMxVF8UtLHoQ&usqp=CAU" alt="Banner Image">
                <h4>Los Números en Inglés</h4>
                <p>Aprende a contar en inglés y conoce los números más comunes para mejorar tu comprensión y habilidades matemáticas.</p>
            </div>
        </div>
        <br>
    </div>

</body>
</html>
