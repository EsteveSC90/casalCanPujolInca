<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Clave secreta de reCAPTCHA v3
$recaptcha_secret = '6LfkwJ0pAAAAAMPlozSLYoyhmT5pdCk4V3xzNP78';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar el token reCAPTCHA v3
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $result = json_decode($result);

    // Verificar si la puntuación de reCAPTCHA v3 es aceptable (por ejemplo, >= 0.5)
    if ($result->success && $result->score >= 0.5) {
        // Si el reCAPTCHA v3 se validó correctamente, procesar el formulario

        // Recoger los datos del formulario
        $name = $_POST['name'];
        $date = $_POST['fecha'];
        $numberPeople = $_POST['cantidad_personas'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Crear una nueva instancia de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurar el servidor SMTP y otras opciones
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'esteveseguicasas.esc@gmail.com';
            $mail->Password = 'hszh zjaa vuhh yocj'; //password de google app
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configurar el remitente y el destinatario
            $mail->setFrom($email, $name);
            $mail->addAddress('esteveseguicasas.esc@gmail.com', 'Casal Can Pujol');

            // Establecer el asunto y el cuerpo del correo
            $mail->Subject = $subject;
            $mail->Body = "Nombre: $name\n Fecha: $date\n Número de comensales: $numberPeople\n Email: $email\n Asunto: $subject\n Solicitudes especiales: $message";

            // Enviar el correo
            $mail->send();
            echo 'El correo se ha enviado correctamente.';
        } catch (Exception $e) {
            echo 'Hubo un error al enviar el correo: ', $mail->ErrorInfo;
        }
    } else {
        // Si el reCAPTCHA v3 no se validó correctamente, muestra un mensaje de error
        echo 'Error: reCAPTCHA verification failed.';
    }
}

?>
