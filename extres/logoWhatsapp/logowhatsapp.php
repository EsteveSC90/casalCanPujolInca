<?php
// Obtiene la URL actual
$current_url = $_SERVER['REQUEST_URI'];

// Verifica si la URL actual coincide con "/casalCanPujolInca/reserva.php" en el servidor /reserva.php
if (strpos($current_url, "/reserva.php") !== false || strpos($current_url, "/casalCanPujolInca/reserva.php") !== false) {
    // Si es así, imprime el enlace al archivo CSS contactwhatsapp.css
    echo '<link rel="stylesheet" href="css/contactwhatsapp.css">';
} else {
    // Si no, imprime el enlace al archivo CSS whatsapp.css
    echo '<link rel="stylesheet" href="css/whatsapp.css">';
}
?>

<div id="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=34640967828" target="_blank">
        <img src="img/iconos/icono-whatsapp.png" alt="WhatsApp" width="50px">
    </a>
</div>