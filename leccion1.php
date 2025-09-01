<?php
$page_title = "Lección 1: ¿Qué es una Dirección IP?";
include 'header.php';
?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?php echo $page_title; ?></h1>
        <p class="lead">El primer paso para entender el subneteo es comprender qué es una dirección IP.</p>

        <hr>

        <h2>¿Qué es una Dirección IP?</h2>
        <p>Una <strong>Dirección de Protocolo de Internet</strong> (o Dirección IP) es una etiqueta numérica única asignada a cada dispositivo conectado a una red de computadoras que utiliza el Protocolo de Internet para la comunicación.</p>
        <p>Piensa en ella como la dirección de tu casa. Así como tu dirección postal permite que el correo te llegue, una dirección IP permite que los datos de internet lleguen al dispositivo correcto.</p>

        <h3 class="mt-4">Formato de IPv4</h3>
        <p>En este curso, nos centramos en la <strong>Versión 4 del Protocolo de Internet (IPv4)</strong>. Una dirección IPv4 tiene un formato específico:</p>
        <ul>
            <li>Está compuesta por <strong>32 bits</strong> de datos.</li>
            <li>Para que sea más fácil de leer para los humanos, se divide en <strong>cuatro octetos</strong> (grupos de 8 bits).</li>
            <li>Estos octetos se representan en <strong>notación decimal</strong> y se separan por puntos.</li>
        </ul>

        <p>Por ejemplo, la dirección <code>192.168.1.1</code> es una dirección IPv4 típica.</p>
        <div class="alert alert-info">
            Cada número en una dirección IPv4 (cada octeto) puede ir de <strong>0 a 255</strong>.
        </div>

        <h3 class="mt-4">Partes de una Dirección IP</h3>
        <p>Una dirección IP se divide en dos partes principales:</p>
        <ol>
            <li><strong>ID de Red (Network ID):</strong> La primera parte de la dirección, que identifica la red específica a la que pertenece el dispositivo. Todos los dispositivos en la misma red comparten el mismo ID de red.</li>
            <li><strong>ID de Host (Host ID):</strong> La segunda parte de la dirección, que identifica a un dispositivo único dentro de esa red.</li>
        </ol>
        <p>La forma en que se determina qué parte es la red y qué parte es el host es a través de algo llamado <strong>máscara de subred</strong>, que veremos en la siguiente lección.</p>

        <hr>
        <div class="text-end">
            <a href="leccion2.php" class="btn btn-primary">Siguiente Lección: Máscaras de Subred →</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
