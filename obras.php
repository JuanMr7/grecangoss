<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <title>Sitio en Mantenimiento</title>
    <style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: whitesmoke;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    .container {
        text-align: center;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 10px;
    }

    h1 {
        font-size: 36px;
        color: #ff5722;
    }

    p {
        font-size: 18px;
        color: #333;
    }

    img {
        width: 200px;
        height: auto;
        margin-top: 20px;
    }
    </style>
</head>

<?php include './template/header.php'; ?>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>

    <div class="container">
        <img src="http://localhost/grecangoss/imagenes/mantenimiento.jpg" alt="Mantenimiento">
        <h1>Sitio en Mantenimiento</h1>
        <p>Estamos realizando algunas actualizaciones en nuestro sitio web.<br>¡Volveremos pronto!</p>
    </div>
    
    <?php include './template/footer.php'; ?>
</body>

</html>