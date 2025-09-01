<?php
$page_title = "Lección 4: Cálculo de Red y Broadcast";
include 'header.php';
?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?php echo $page_title; ?></h1>
        <p class="lead">Con una dirección IP y una máscara de subred, podemos calcular las direcciones más importantes de una red.</p>

        <hr>

        <h2>La Operación AND</h2>
        <p>La clave para encontrar la <strong>dirección de red</strong> es una operación lógica a nivel de bits llamada <strong>AND</strong>.</p>
        <p>Para obtener la dirección de red, se realiza una operación AND entre los 32 bits de la dirección IP y los 32 bits de la máscara de subred.</p>

        <p>Reglas de la operación AND:</p>
        <ul>
            <li>1 AND 1 = 1</li>
            <li>1 AND 0 = 0</li>
            <li>0 AND 1 = 0</li>
            <li>0 AND 0 = 0</li>
        </ul>
        <p>Básicamente, el resultado es '1' solo si ambos bits de entrada son '1'.</p>

        <h3 class="mt-4">Ejemplo de Cálculo de Red</h3>
        <p>Tomemos <code>192.168.1.100</code> con máscara <code>/24</code> (255.255.255.0).</p>
        <pre class="bg-light p-3 rounded">
  11000000.10101000.00000001.01100100  (192.168.1.100)
& 11111111.11111111.11111111.00000000  (255.255.255.0)
  -----------------------------------
  11000000.10101000.00000001.00000000  (192.168.1.0)
        </pre>
        <p>La dirección de red es <strong>192.168.1.0</strong>. Esta es la primera dirección de la subred y se usa para identificarla.</p>

        <h3 class="mt-4">Cálculo de la Dirección de Broadcast</h3>
        <p>La <strong>dirección de broadcast</strong> es la última dirección de la subred. Se usa para enviar un mensaje a todos los dispositivos en esa red simultáneamente.</p>
        <p>Se calcula invirtiendo los bits de la máscara de subred (wildcard mask) y aplicando una operación OR a la dirección de red.</p>
         <p>Para la red <strong>192.168.1.0/24</strong>, la dirección de broadcast es <strong>192.168.1.255</strong>.</p>

        <div class="alert alert-info">
            La dirección de red y la de broadcast <strong>no son asignables</strong> a dispositivos individuales. Por eso, el número de hosts utilizables es siempre el total de direcciones menos dos.
        </div>

        <hr>
        <h3 class="mt-4">Actividad: Comprueba tu Conocimiento</h3>
        <div class="accordion" id="activityAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="question1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1">
                        <strong>Pregunta 1:</strong> Para la red <code>10.10.10.50/28</code>, ¿cuál es la dirección de red?
                    </button>
                </h2>
                <div id="answer1" class="accordion-collapse collapse" aria-labelledby="question1" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>10.10.10.48</code>. (La máscara /28 es 255.255.255.240. Las redes van en saltos de 16. El 50 cae en la red que empieza en 48.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                        <strong>Pregunta 2:</strong> Para la misma red <code>10.10.10.50/28</code>, ¿cuál es la dirección de broadcast?
                    </button>
                </h2>
                <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>10.10.10.63</code>. (La red de .48 tiene 16 direcciones, por lo que va de .48 a .63. La última es el broadcast.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                        <strong>Pregunta 3:</strong> ¿Es la dirección <code>192.168.100.255</code> siempre una dirección de broadcast?
                    </button>
                </h2>
                <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> No, depende de la máscara de subred. Si la máscara es /24, sí lo es. Pero si la máscara fuera /23 (255.255.254.0), la dirección de broadcast de la red 192.168.100.0 sería 192.168.101.255, y .100.255 sería una dirección de host válida.
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="leccion3.php" class="btn btn-secondary">← Lección Anterior</a>
            <a href="leccion5.php" class="btn btn-primary">Siguiente Lección →</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
