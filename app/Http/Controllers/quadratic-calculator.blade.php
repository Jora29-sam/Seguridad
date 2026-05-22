<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Matemática</title>

    <style>
        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f4f6f8;
        }

        .container{
            max-width:1200px;
            margin:auto;
            padding:40px 20px;
        }

        h1{
            text-align:center;
            margin-bottom:40px;
            color:#111827;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
            text-align:center;
        }

        .card.active{
            border:2px solid #dc2626;
        }

        h2{
            margin-bottom:10px;
        }

        p{
            color:#6b7280;
        }

        button{
            margin-top:15px;
            padding:12px 18px;
            border:none;
            border-radius:10px;
            background:#9ca3af;
            color:white;
            font-weight:bold;
        }

        .active button{
            background:#dc2626;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Calculadora de Operaciones Matemáticas</h1>

    <div class="grid">

        <div class="card active">
            <h2>Fórmula cuadrática</h2>
            <p>Operación asignada</p>
            <button>Disponible próximamente</button>
        </div>

        <div class="card">
            <h2>Suma</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

        <div class="card">
            <h2>Resta</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

        <div class="card">
            <h2>Multiplicación</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

        <div class="card">
            <h2>División</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

        <div class="card">
            <h2>Área triángulo</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

        <div class="card">
            <h2>Celsius a Fahrenheit</h2>
            <p>Pendiente por integrante</p>
            <button disabled>Próximamente</button>
        </div>

    </div>

</div>

</body>
</html>