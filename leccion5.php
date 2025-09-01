<?php
$page_title = "Lección 5: Próximos Pasos y Práctica";
include 'header.php';
?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?php echo $page_title; ?></h1>
        <p class="lead">¡Felicidades! Has completado los conceptos básicos del subneteo IPv4.</p>

        <hr>

        <h2>La Práctica Hace al Maestro</h2>
        <p>Ahora tienes el conocimiento fundamental para entender cómo se dividen las redes. La clave para dominar el subneteo es la práctica constante.</p>
        <p>Te recomendamos usar nuestra calculadora para:</p>
        <ul>
            <li>Probar diferentes direcciones IP y máscaras CIDR.</li>
            <li>Verificar tus propios cálculos hechos a mano.</li>
            <li>Desarrollar una intuición sobre cómo el prefijo CIDR afecta el tamaño de la red.</li>
        </ul>
        <div class="text-center my-4">
            <a href="calculadora.php" class="btn btn-success btn-lg">¡Ir a la Calculadora Ahora!</a>
        </div>


        <h3 class="mt-4">Temas Avanzados para Explorar</h3>
        <p>El mundo de las redes es vasto. Si te interesa, aquí tienes algunos temas para seguir aprendiendo:</p>
        <ul>
            <li><strong>VLSM (Variable Length Subnet Mask):</strong> Una técnica para crear subredes de diferentes tamaños dentro de la misma red, lo que es mucho más eficiente.</li>
            <li><strong>CIDR (Classless Inter-Domain Routing):</strong> No solo una notación, sino también el concepto que permite la sumarización de rutas para hacer el enrutamiento en internet más eficiente.</li>
            <li><strong>IPv6:</strong> La siguiente generación de direcciones IP, con un espacio de direcciones de 128 bits y un formato completamente diferente.</li>
        </ul>

        <hr>
        <h3 class="mt-4">Actividad Final: Repaso General</h3>
        <div class="accordion" id="activityAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="question1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false" aria-controls="answer1">
                        <strong>Pregunta 1:</strong> Si una red tiene un prefijo /27, ¿cuántos hosts utilizables puede tener?
                    </button>
                </h2>
                <div id="answer1" class="accordion-collapse collapse" aria-labelledby="question1" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> 30 hosts utilizables. (Cálculo: 32 - 27 = 5 bits para hosts. 2<sup>5</sup> = 32 direcciones totales. 32 - 2 = 30.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                        <strong>Pregunta 2:</strong> ¿Cuál es el propósito principal de la técnica VLSM?
                    </button>
                </h2>
                <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> Usar máscaras de subred de diferente longitud para diferentes subredes, permitiendo un uso mucho más eficiente del espacio de direcciones IP y evitando el desperdicio.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="question3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                        <strong>Pregunta 3:</strong> ¿Por qué es importante la sumarización de rutas (CIDR)?
                    </button>
                </h2>
                <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#activityAccordion">
                    <div class="accordion-body">
                        <strong>Respuesta:</strong> Reduce el tamaño de las tablas de enrutamiento en los routers de internet. Al agrupar múltiples redes en una sola ruta "resumen", los routers necesitan procesar y almacenar menos información, lo que hace que internet sea más rápido y escalable.
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="leccion4.php" class="btn btn-secondary">← Lección Anterior</a>
            <a href="index.php" class="btn btn-info">Volver al Inicio</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
