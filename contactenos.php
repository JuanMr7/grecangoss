<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css"> <!-- Importa tu archivo de estilos CSS global -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }
    </style>
    <title>Contacto</title>
    
</head>

<body>
    
    <?php include './template/header.php'; ?>
    <!-- Importa tu encabezado -->
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Contáctenos</h1>
                <ul class="breadcrumbs no-link"></ul>
            </div>
        </div>
    </div>
    <section id="contacto">
        <div class="contacto-container">
            <div class="contacto-info">
                <h2>Información</h2>
                <br>
                <?php
                    // Información de la empresa obtenida desde la base de datos o una variable
                    $nombre = "Constructora Grecangoss S.A.";
                    $direccion = "Tunguragua 2900 y General Gomez Guayaquil";
                    $telefono = "0000000000";
                    $correo = "mail@grecangoss.com";

                    // Botón de WhatsApp
                    $numeroWhatsApp = "593983942571"; // Número de teléfono de WhatsApp
                    echo '<p>'.$nombre . '</p>';
                    echo '<p>Dirección: ' . $direccion . '</p>';
                    echo '<p>Teléfono: ' . $telefono . '</p>';
                    echo '<p>Correo Electrónico: ' . $correo . '</p>';
                    echo '<a href="https://api.whatsapp.com/send?phone=' . $numeroWhatsApp . '" target="_blank">Chat de WhatsApp</a>';
                ?>
            </div>

            <!-- Mapa de Google -->
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.863215401699!2d-79.90457292467848!3d-2.2053337977751544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6f9ae30876a9%3A0x2e805dc8345473fc!2sConstructora%20Grecangoss%20S.A!5e0!3m2!1ses!2sec!4v1693166937282!5m2!1ses!2sec"
                    width="600" height="400" style="border: 1px;" allowfullscreen="" loading="eager"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <?php include './template/footer.php'; ?>
    <!-- Importa tu pie de página -->
</body>

</html>