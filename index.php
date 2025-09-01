<?php
$page_title = "Curso de Subneteo IPv4";
include 'header.php';
?>

<header class="text-center mb-5">
    <h1>Bienvenido al Curso de Subneteo IPv4</h1>
    <p class="lead">Aprende los fundamentos del direccionamiento IP y el subneteo de una manera sencilla.</p>
</header>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h2>Índice del Curso</h2>
        <div class="list-group">
            <a href="leccion1.php" class="list-group-item list-group-item-action">
                <strong>Lección 1:</strong> ¿Qué es una Dirección IP?
            </a>
            <a href="leccion2.php" class="list-group-item list-group-item-action">
                <strong>Lección 2:</strong> Máscaras de Subred
            </a>
            <a href="leccion3.php" class="list-group-item list-group-item-action">
                <strong>Lección 3:</strong> Cálculo de Red y Broadcast
            </a>
            <a href="calculadora.php" class="list-group-item list-group-item-action list-group-item-info">
                <strong>Herramienta:</strong> Calculadora de Subredes
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
