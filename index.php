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
        <div class="list-group shadow-sm">
            <a href="leccion1.php" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                <i class="bi bi-123 fs-4 me-3 text-primary"></i>
                <div>
                    <strong class="mb-1">Lección 1: De Binario a Decimal</strong>
                    <div class="text-muted small">Los fundamentos: cómo cuentan las computadoras.</div>
                </div>
            </a>
            <a href="leccion2.php" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                <i class="bi bi-diagram-3 fs-4 me-3 text-primary"></i>
                <div>
                    <strong class="mb-1">Lección 2: ¿Qué es una Dirección IP?</strong>
                    <div class="text-muted small">La dirección de cada dispositivo en la red.</div>
                </div>
            </a>
            <a href="leccion3.php" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                <i class="bi bi-mask fs-4 me-3 text-primary"></i>
                <div>
                    <strong class="mb-1">Lección 3: Máscaras de Subred</strong>
                    <div class="text-muted small">Separando la red del host.</div>
                </div>
            </a>
            <a href="leccion4.php" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                <i class="bi bi-broadcast fs-4 me-3 text-primary"></i>
                <div>
                    <strong class="mb-1">Lección 4: Cálculo de Red y Broadcast</strong>
                    <div class="text-muted small">Las operaciones clave del subneteo.</div>
                </div>
            </a>
            <a href="leccion5.php" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                <i class="bi bi-lightbulb fs-4 me-3 text-primary"></i>
                <div>
                    <strong class="mb-1">Lección 5: Práctica y Próximos Pasos</strong>
                    <div class="text-muted small">Refuerza tu conocimiento y mira hacia adelante.</div>
                </div>
            </a>
            <a href="calculadora.php" class="list-group-item list-group-item-action list-group-item-primary d-flex align-items-center py-3 mt-3 rounded-3">
                <i class="bi bi-calculator-fill fs-4 me-3"></i>
                <div>
                    <strong class="mb-1">Herramienta: Calculadora de Subredes</strong>
                    <div class="small">Pon a prueba tus habilidades.</div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
