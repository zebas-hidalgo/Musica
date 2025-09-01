<?php
$page_title = "Calculadora de Subredes IPv4";
include 'header.php';
?>

<h1 class="mb-4">Calculadora de Subredes IPv4</h1>

<form action="calculadora.php" method="post" class="card p-4">
    <div class="mb-3">
        <label for="ip" class="form-label">Dirección IP</label>
        <input type="text" class="form-control" id="ip" name="ip" placeholder="Ej: 192.168.10.5" required value="<?php echo htmlspecialchars($_POST['ip'] ?? ''); ?>">
    </div>
    <div class="mb-3">
        <label for="cidr" class="form-label">Prefijo CIDR</label>
        <input type="number" class="form-control" id="cidr" name="cidr" min="0" max="32" placeholder="Ej: 24" required value="<?php echo htmlspecialchars($_POST['cidr'] ?? ''); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<!-- Results will be displayed here by PHP -->
<div id="results" class="mt-5">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ip = $_POST['ip'] ?? '';
        $cidr = $_POST['cidr'] ?? '';

        // --- Validation ---
        $errors = [];
        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            $errors[] = "La dirección IP proporcionada no es válida.";
        }
        if (!filter_var($cidr, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 32]])) {
            $errors[] = "El prefijo CIDR debe ser un número entre 0 y 32.";
        }

        if (!empty($errors)) {
            // --- Display Errors ---
            echo '<div class="alert alert-danger"><ul>';
            foreach ($errors as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul></div>';
        } else {
            // --- Calculation ---
            $ip_long = ip2long($ip);
            $mask_long = -1 << (32 - $cidr);
            $network_long = $ip_long & $mask_long;
            $broadcast_long = $network_long | ~$mask_long;

            $subnet_mask = long2ip($mask_long);
            $network_address = long2ip($network_long);
            $broadcast_address = long2ip($broadcast_long);

            $total_hosts = pow(2, (32 - $cidr));
            $usable_hosts = ($cidr < 31) ? ($total_hosts - 2) : 0;
            if ($usable_hosts < 0) $usable_hosts = 0;

            $first_host = ($cidr < 31) ? long2ip($network_long + 1) : 'N/A';
            $last_host = ($cidr < 31) ? long2ip($broadcast_long - 1) : 'N/A';

            // --- Display Results ---
            echo '<h3>Resultados del Cálculo</h3>';
            echo '<table class="table table-bordered table-striped">';
            echo '<tbody>';
            echo '<tr><th scope="row">Dirección IP</th><td>' . htmlspecialchars($ip) . '/' . htmlspecialchars($cidr) . '</td></tr>';
            echo '<tr><th scope="row">Máscara de Subred</th><td>' . $subnet_mask . '</td></tr>';
            echo '<tr><th scope="row">Dirección de Red</th><td>' . $network_address . '</td></tr>';
            echo '<tr><th scope="row">Dirección de Broadcast</th><td>' . $broadcast_address . '</td></tr>';
            echo '<tr><th scope="row">Primer Host Utilizable</th><td>' . $first_host . '</td></tr>';
            echo '<tr><th scope="row">Último Host Utilizable</th><td>' . $last_host . '</td></tr>';
            echo '<tr><th scope="row">Total de Hosts</th><td>' . number_format($total_hosts) . '</td></tr>';
            echo '<tr><th scope="row">Hosts Utilizables</th><td>' . number_format($usable_hosts) . '</td></tr>';
            echo '</tbody>';
            echo '</table>';
        }
    }
    ?>
</div>

<?php include 'footer.php'; ?>
