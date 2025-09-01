<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Curso de Subneteo IPv4'; ?></title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        :root {
            --custom-primary: #6a11cb;
            --custom-secondary: #2575fc;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            background-image: linear-gradient(to right, #f4f7f6, #e6e9f0);
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.05);
        }
        .navbar-brand, .nav-link.active {
            font-weight: 600;
        }
        a {
            color: var(--custom-primary);
            text-decoration: none;
        }
        a:hover {
            color: var(--custom-secondary);
        }
        .btn-primary {
            background-color: var(--custom-primary);
            border-color: var(--custom-primary);
        }
        .btn-primary:hover {
            background-color: var(--custom-secondary);
            border-color: var(--custom-secondary);
        }
        .list-group-item-action:focus, .list-group-item-action:hover {
            background-color: #eef2f7;
        }
        .card {
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,.08);
        }
        .accordion-button:not(.collapsed) {
            background-color: #f0e8ff;
            color: var(--custom-primary);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">Curso de Subneteo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="leccion1.php">1. Binario y Decimal</a></li>
                    <li class="nav-item"><a class="nav-link" href="leccion2.php">2. Direcciones IP</a></li>
                    <li class="nav-item"><a class="nav-link" href="leccion3.php">3. Máscaras de Subred</a></li>
                    <li class="nav-item"><a class="nav-link" href="leccion4.php">4. Cálculo de Red</a></li>
                    <li class="nav-item"><a class="nav-link" href="leccion5.php">5. Práctica y Pasos</a></li>
                    <li class="nav-item"><a class="nav-link" href="calculadora.php"><strong>Calculadora</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
