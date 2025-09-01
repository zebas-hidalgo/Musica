<?php
$page_title = "Lección 1: De Binario a Decimal";
include 'header.php';
?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?php echo $page_title; ?></h1>
        <p class="lead">Antes de sumergirnos en las direcciones IP, debemos entender el lenguaje que usan las computadoras: el sistema binario.</p>

        <hr>

        <h2>El Sistema Binario (Base-2)</h2>
        <p>Nosotros contamos en un sistema decimal (base-10), usando diez dígitos (0-9). Las computadoras usan un sistema <strong>binario (base-2)</strong>, que solo tiene dos dígitos: <strong>0 y 1</strong>.</p>
        <p>Cada '0' o '1' se llama un <strong>bit</strong> (dígito binario).</p>

        <h3 class="mt-4">Entendiendo los Octetos</h3>
        <p>Como vimos brevemente, una dirección IPv4 se compone de cuatro octetos. Un <strong>octeto</strong> es simplemente un grupo de 8 bits. Por ejemplo: <code>11000000</code>.</p>
        <p>Para entender qué número decimal representa un octeto, debemos mirar el valor posicional de cada bit. En binario, cada posición es una potencia de 2, comenzando desde la derecha (2<sup>0</sup>).</p>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>7</th>
                    <th>6</th>
                    <th>5</th>
                    <th>4</th>
                    <th>3</th>
                    <th>2</th>
                    <th>1</th>
                    <th>0</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Valor (Potencia de 2)</th>
                    <td>2<sup>7</sup>=<strong>128</strong></td>
                    <td>2<sup>6</sup>=<strong>64</strong></td>
                    <td>2<sup>5</sup>=<strong>32</strong></td>
                    <td>2<sup>4</sup>=<strong>16</strong></td>
                    <td>2<sup>3</sup>=<strong>8</strong></td>
                    <td>2<sup>2</sup>=<strong>4</strong></td>
                    <td>2<sup>1</sup>=<strong>2</strong></td>
                    <td>2<sup>0</sup>=<strong>1</strong></td>
                </tr>
            </tbody>
        </table>

        <h3 class="mt-4">Ejemplo de Conversión</h3>
        <p>Para convertir un número binario a decimal, sumamos los valores de posición donde el bit es '1'.</p>
        <p>Tomemos el binario <code>11000000</code>:</p>
        <pre class="bg-light p-3 rounded">
  Bit:      1   1   0   0   0   0   0   0
  Valor:  128  64  32  16   8   4   2   1
        </pre>
        <p>Sumamos los valores donde el bit es 1: 128 + 64 = <strong>192</strong>.</p>
        <p>Así, el octeto <code>11000000</code> es igual al número decimal <strong>192</strong>.</p>

        <hr>
        <h3 class="mt-4">Actividad: Comprueba tu Conocimiento</h3>
        <div class="accordion" id="activityAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="question1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1">
                        <strong>Pregunta 1:</strong> ¿Qué número decimal es el binario <code>10101010</code>?
                    </button>
                </h2>
                <div id="answer1" class="accordion-collapse collapse" aria-labelledby="question1" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> 170. (128 + 32 + 8 + 2)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                        <strong>Pregunta 2:</strong> ¿Cuál es el valor decimal más grande que se puede representar con un octeto (8 bits)?
                    </button>
                </h2>
                <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> 255. (Cuando los 8 bits son '1': 128+64+32+16+8+4+2+1)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                        <strong>Pregunta 3:</strong> ¿Cómo se escribe el número decimal <code>10</code> en binario (usando un octeto completo)?
                    </button>
                </h2>
                <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> <code>00001010</code>. (8 + 2)
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="text-end">
            <a href="leccion2.php" class="btn btn-primary">Siguiente Lección →</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
