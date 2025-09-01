<?php
$page_title = "Lección 2: Máscaras de Subred";
include 'header.php';
?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?php echo $page_title; ?></h1>
        <p class="lead">Ahora que sabemos qué es una dirección IP, necesitamos una forma de saber qué parte es la red y qué parte es el host.</p>

        <hr>

        <h2>¿Qué es una Máscara de Subred?</h2>
        <p>Una <strong>máscara de subred</strong> es un número de 32 bits que "enmascara" una dirección IP. Se utiliza para separar el ID de red del ID de host en una dirección IP.</p>
        <p>La máscara de subred logra esto teniendo todos los bits de la porción de red establecidos en '1' y todos los bits de la porción de host establecidos en '0'.</p>

        <h3 class="mt-4">Notación Decimal y CIDR</h3>
        <p>Al igual que las direcciones IP, las máscaras de subred se escriben en notación decimal con puntos. Por ejemplo, una máscara común es <code>255.255.255.0</code>.</p>
        <p>Una forma más moderna y concisa de representar la máscara de subred es la notación <strong>CIDR (Classless Inter-Domain Routing)</strong>. Esta notación simplemente cuenta el número de bits '1' en la máscara y lo añade al final de la dirección IP con una barra inclinada (/).</p>

        <p>Ejemplos:</p>
        <ul>
            <li><code>255.255.255.0</code> en binario es <code>11111111.11111111.11111111.00000000</code>. Tiene 24 bits '1', por lo que su notación CIDR es <strong>/24</strong>.</li>
            <li>Una dirección completa sería <code>192.168.1.1/24</code>.</li>
            <li><code>255.255.0.0</code> en binario es <code>11111111.11111111.00000000.00000000</code>. Tiene 16 bits '1', por lo que su notación CIDR es <strong>/16</strong>.</li>
        </ul>

        <div class="alert alert-success">
            <strong>Recuerda:</strong> El número CIDR (ej. /24) te dice exactamente cuántos bits de la dirección IP pertenecen a la red. El resto de los bits (32 - 24 = 8) pertenecen a los hosts.
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <a href="leccion1.php" class="btn btn-secondary">← Lección Anterior</a>
            <a href="leccion3.php" class="btn btn-primary">Siguiente Lección: Cálculo de Red →</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
