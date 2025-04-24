<form method="post">
    <?php
    $nombre = $_GET['usuario'];
    ?>
    <h1>BIENVENIDO
    <?php echo strtoupper($nombre); ?>
    </h1>
    <h3>Rellena los siguientes datos</h3>
    <label for="nombreCliente">Nombre del Cliente: <input type="text" name="nombreCliente"></label><br>
    <label for="edad">Edad: <input type="number" name="edad" min="18" max="99"></label><br>
    <label for="peso">Peso (kg): <input type="number" name="peso"></label><br>
    <label for="altura">Altura (cm): <input type="number" name="altura"></label><br>
    <button type="submit" name="calcularIMC">Calcular IMC</button>
    <?php
    if (isset($_POST['calcularIMC'])) {
        $peso = 0;
        if (isset($_POST['peso'])) {
            $peso = (float) $_POST['peso'];
        }
        $altura = 0;
        if (isset($_POST['altura'])) {
            $altura = (float) $_POST['altura'] / 100;
        }
        
        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            if ($imc < 18.5) {
                $clasificacion = 'Bajo peso';
            } elseif ($imc < 25) {
                $clasificacion = 'Peso normal';
            } elseif ($imc < 30) {
                $clasificacion = 'Sobrepeso';
            } else {
                $clasificacion = 'Obesidad';
            }            
            $resultadoIMC = "IMC: " . round($imc, 2) . " - " . $clasificacion;
        } else {
            $resultadoIMC = "<span style='color: red;'>Ingrese valores válidos.</span>";
        }
    }
    ?>
    <?php if (isset($resultadoIMC)) echo "<p>$resultadoIMC</p>"; ?>
</form>


