<?php
$page_title = "Lección 2: ¿Qué es una Dirección IP?";
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
            <li>Estos octetos se representan en <strong>notación decimal</strong> y se separan por puntos. Vimos cómo convertir de binario a decimal en la lección anterior.</li>
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
        <h3 class="mt-4">Actividad: Comprueba tu Conocimiento</h3>
        <div class="accordion" id="activityAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="question1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1">
                        <strong>Pregunta 1:</strong> ¿Cuál de estas NO es una dirección IPv4 válida? <code>192.168.1.1</code>, <code>10.0.0.256</code>, <code>172.16.30.1</code>
                    </button>
                </h2>
                <div id="answer1" class="accordion-collapse collapse" aria-labelledby="question1" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>10.0.0.256</code>. (Un octeto no puede ser mayor que 255.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                        <strong>Pregunta 2:</strong> En la dirección <code>172.16.20.5/16</code>, ¿qué parte es el ID de Red?
                    </button>
                </h2>
                <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>172.16</code>. (La máscara /16 significa que los primeros 16 bits, o los primeros dos octetos, son para la red.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                        <strong>Pregunta 3:</strong> En la dirección <code>172.16.20.5/16</code>, ¿qué parte es el ID de Host?
                    </button>
                </h2>
                <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>20.5</code>. (Los últimos 16 bits, o los últimos dos octetos, son para el host.)
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="leccion1.php" class="btn btn-secondary">← Lección Anterior</a>
            <a href="leccion3.php" class="btn btn-primary">Siguiente Lección →</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
