<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del Triángulo</title>

    <style>

        body{
            font-family:Arial, sans-serif;
            background:#0f172a;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            background:#1e293b;
            padding:40px;
            border-radius:20px;
            width:400px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        h1{
            text-align:center;
            margin-bottom:30px;
            color:#ef4444;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:20px;
            border:none;
            border-radius:10px;
            font-size:16px;
        }

        button{
            width:100%;
            padding:14px;
            border:none;
            border-radius:10px;
            background:#ef4444;
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            margin-bottom:15px;
        }

        .back-btn{
            display:block;
            width:100%;
            text-align:center;
            padding:14px;
            border-radius:10px;
            background:#334155;
            color:white;
            text-decoration:none;
            font-size:16px;
            font-weight:bold;
            box-sizing:border-box;
            transition:0.3s;
        }

        .back-btn:hover{
            background:#475569;
        }

        .result{
            margin-top:20px;
            text-align:center;
            font-size:22px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Área del Triángulo</h1>

    <form method="GET" action="/triangle-area">

        <input type="number" step="any" name="base" placeholder="Base" required>

        <input type="number" step="any" name="height" placeholder="Altura" required>

        <button type="submit">
            Calcular
        </button>

    </form>

    <a href="/" class="back-btn">
        ← Regresar
    </a>

    @isset($result)
        <div class="result">
            Resultado: {{ $result }}
        </div>
    @endisset

</div>

</body>
</html>