<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Matemática</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#0f172a;
            color:white;
            min-height:100vh;
            padding:40px 20px;
        }

        .container{
            max-width:1200px;
            margin:auto;
        }

        .title{
            text-align:center;
            margin-bottom:50px;
        }

        .title h1{
            font-size:48px;
            margin-bottom:15px;
            color:#ef4444;
        }

        .title p{
            color:#cbd5e1;
            font-size:18px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
            gap:25px;
            align-items:start;
        }

        .card{
            background:#1e293b;
            border-radius:20px;
            padding:30px 25px;
            transition:0.3s;
            border:2px solid transparent;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        .card:hover{
            transform:translateY(-8px);
        }

        .card.active{
            border:2px solid #ef4444;
            background:#111827;
        }

        .icon{
            width:70px;
            height:70px;
            border-radius:16px;
            background:#ef4444;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:32px;
            margin-bottom:20px;
        }

        .card h2{
            margin-bottom:12px;
            font-size:26px;
        }

        .card p{
            color:#cbd5e1;
            margin-bottom:20px;
            line-height:1.6;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:12px;
            border:none;
            border-radius:10px;
            background:#334155;
            color:white;
            font-size:15px;
        }

        input::placeholder{
            color:#94a3b8;
        }

        button{
            width:100%;
            border:none;
            padding:14px;
            border-radius:12px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        a{
            text-decoration:none;
        }

        .available{
            background:#ef4444;
            color:white;
        }

        .available:hover{
            background:#dc2626;
        }

        .disabled{
            background:#334155;
            color:#94a3b8;
            cursor:not-allowed;
        }

        .result{
            margin-top:20px;
            background:#0f172a;
            padding:15px;
            border-radius:12px;
            color:#f8fafc;
            border:1px solid #334155;
        }

        .result p{
            margin-bottom:8px;
            color:#f8fafc;
        }

        .error{
            border:1px solid #ef4444;
            color:#fecaca;
        }

        .footer{
            text-align:center;
            margin-top:60px;
            color:#64748b;
        }

        @media(max-width:768px){
            .title h1{
                font-size:36px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="title">
        <h1>Calculadora Matemática</h1>
        <p>Proyecto Laravel con operaciones matemáticas por integrante</p>
    </div>

    <div class="grid">

        <div class="card active">
            <div class="icon">ƒ</div>

            <h2>Fórmula cuadrática</h2>

            <p>
                Resolver ecuaciones cuadráticas utilizando el discriminante
                y la fórmula general.
            </p>

            <form method="POST" action="/calculate">
                @csrf

                <input type="number" step="any" name="a" placeholder="Valor de a" required>
                <input type="number" step="any" name="b" placeholder="Valor de b" required>
                <input type="number" step="any" name="c" placeholder="Valor de c" required>

                <button class="available" type="submit">
                    Calcular
                </button>
            </form>

            @if(session('x1') !== null)
                <div class="result">
                    <p><strong>Resultado:</strong></p>
                    <p>X1 = {{ session('x1') }}</p>
                    <p>X2 = {{ session('x2') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="result error">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
        </div>

        <!-- discount -->
        <div class="card">
            <div class="icon">%</div>
            <h2>Descuento</h2>

            <p>
                Aplicar descuento a un precio
            </p>

            <form action="/discount" method="POST">
                @csrf

                <input type="number" step="0.01" name="price" placeholder="Precio" required>

                <input type="number" step="0.01" name="discount" placeholder="Descuento %" required>

                <button class="available" type="submit">
                    Calcular
                </button>
            </form>

            @if(session('discount_result') !== null)
                <div class="result">
                    <p><strong>Resultado:</strong></p>
                    <p>{{ session('discount_result') }}</p>
                </div>
            @endif
        </div>

        <div class="card">
    <div class="icon">−</div>

    <h2>Resta</h2>

    <p>
        Realizar restas entre dos números.
    </p>

    <form method="POST" action="/subtract">
        @csrf

        <input type="number" step="any" name="numero1" placeholder="Número 1" required>

        <input type="number" step="any" name="numero2" placeholder="Número 2" required>

        <button class="available" type="submit">
            Calcular
        </button>
    </form>

    @if(session('resultado') !== null)
        <div class="result">
            <p><strong>Resultado:</strong></p>
            <p>{{ session('resultado') }}</p>
        </div>
    @endif
</div>

        <div class="card active">
            <div class="icon">×</div>

            <h2>Multiplicación</h2>

            <p>
                Realizar multiplicaciones entre dos números.
            </p>

            <form method="POST" action="/multiply">
                @csrf

                <input type="number" step="any" name="num1" placeholder="Número 1" required>
                <input type="number" step="any" name="num2" placeholder="Número 2" required>

                <button class="available" type="submit">
                    Calcular
                </button>
            </form>

            @if(session('result') !== null)
                <div class="result">
                    <p><strong>Resultado:</strong></p>
                    <p>{{ session('result') }}</p>
                </div>
            @endif
        </div>

         <div class="card active">
            <div class="icon">/</div>

            <h2>Division</h2>

            <p>
                Realizar divisiones entre dos números.
            </p>

            <form method="POST" action="/divide">
                @csrf

                <input type="number" step="any" name="num1" placeholder="Número 1" required>
                <input type="number" step="any" name="num2" placeholder="Número 2" required>

                <button class="available" type="submit">
                    Calcular
                </button>
            </form>

            @if(session('result') !== null)
                <div class="result">
                    <p><strong>Resultado:</strong></p>
                    <p>{{ session('result') }}</p>
                </div>
            @endif
        </div>

        <div class="card">
            <div class="icon">△</div>
            <h2>Área triángulo</h2>

            <p>
                Calcular el área de un triángulo utilizando la fórmula
                A = (base * altura) / 2.
            </p>

            <a href="/triangle-area">
                <button class="available">
                    Abrir operación
                </button>
            </a>
        </div>

        <div class="card active">
    <div class="icon">°</div>

    <h2>Celsius a Fahrenheit</h2>

    <p>
        Convertir grados Celsius a Fahrenheit utilizando
        la fórmula (°C × 9/5) + 32.
    </p>

    <form method="POST" action="/celsius-convert">
        @csrf

        <input
            type="number"
            step="any"
            name="celsius"
            placeholder="Grados Celsius"
            required
        >

        <button class="available" type="submit">
            Convertir
        </button>
    </form>

    @if(session('celsius') !== null)
        <div class="result">
            <p><strong>Resultado:</strong></p>
            <p>{{ session('celsius') }} °F</p>
        </div>
    @endif
</div>

    </div>

    <div class="footer">
        Proyecto Laravel + Azure + GitHub Actions
    </div>

</div>

</body>
</html>