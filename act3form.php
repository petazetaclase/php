<form method="post">
    <?php
    $nombre = $_GET['usuario'];
    ?>
    <h1>BIENVENIDO
    <?php echo strtoupper($nombre); ?>
    </h1>
    <h3>Rellena los siguientes datos</h3>
    <label for="Contraseña actual">contraseña actual: <input type="text" name="contraseña"></label>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombreCliente = $_POST["contraseña"] ?? '';
        if ($_POST["contraseña"] !== "pass123") {
            echo "<label style='color: red;'>Contraseña equivocada</label>";
        }
    }
    ?>
    <br>
    <label for="Contraseña actual">nueva contraseña: <input type="text" name="nueva"></label>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["nueva"])) {
                echo "<label style='color:red'>El campo Contraseña nueva es obligatorio.</label>";
            } elseif (strlen($_POST["nueva"]) < 6) {
                echo "<label style='color:red'>La Contraseña nueva debe tener al menos 6 caracteres.</label>";
            } elseif ($_POST["nueva"] === "pass123") {
                echo "<label style='color:red'>La Contraseña nueva no puede ser la misma que la anterior.</label>";
            }
        }
    ?>

    <br>
    <label for="Contraseña actual">confirmar contraseña: <input type="text" name="confirmar"></label>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["confirmar"])) {
                echo "<label style='color:red'>El campo confirmar Contraseña es obligatorio.</label>";
            } elseif (strlen($_POST["confirmar"]) < 6) {
                echo "<label style='color:red'>La Contraseña confirmar debe tener al menos 6 caracteres.</label>";
            } elseif ($_POST["confirmar"] !== $_POST["nueva"]) {
                echo "<label style='color:red'>Las contraseñas no coinciden.</label>";
            }
        }
        ?>
    <br>
        <button type="submit" name="actualizar">Actualizar Contraseña</button>

        <?php
        $nueva = $_POST["nueva"] ?? '';
        $confirmar = $_POST["confirmar"] ?? '';
        $actual = $_POST["contraseña"] ?? '';

        if ($_SERVER["REQUEST_METHOD"] === "POST" && $nueva === $confirmar && $actual === "pass123" && $nueva !== "pass123" && strlen($nueva) >= 6 && strlen($confirmar) >= 6) {
            echo "<br><label style='color:green'>CONTRASEÑA ACTUALIZADA CORRECTAMENTE.</label>";
        }
        ?>
</form>


