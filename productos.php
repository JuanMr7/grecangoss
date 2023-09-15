
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/productos.css"> <!-- Ruta a tu archivo bootstrap.min.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:wght@300&display=swap"
        rel="stylesheet">
        <title>Productos</title>
    <style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: whitesmoke;
    }

    .producto-imagen {
        width: 10px;
        /* Tamaño deseado para las imágenes */
        height: 10px;
        /* Tamaño deseado para las imágenes */
        object-fit: cover;
        /* Esto evita que la imagen se distorsione y recorta o ajusta su tamaño para encajar */
    }

    .titulo-productos {
        text-align: center;
        margin-bottom: 20px;
    }

    .custom-thin-border {
        border: 1px solid orange;
        border-radius: 5px;
        /* Ajusta este valor según desees para las esquinas redondeadas */
        color: black;
        /* Cambia el color del texto a blanco para que sea legible */
        /* Otros estilos personalizados si es necesario */
    }

    .card-img-top {
        width: 250px;
        /* Establece el ancho deseado */
        height: 250px;
        /* Establece la altura deseada */
        object-fit: cover;
        /* Esto evita que la imagen se distorsione y recorta o ajusta su tamaño para encajar */
        margin: 15px;
    }

    .card.rounded {
        border-radius: 15px;
    }
    </style>
</head>

<body>
<?php include './template/header.php'; ?>
<br>
<br>
<br>
    <div class="container mt-5">
        <h1 class="titulo-productos">Productos</h1>
        <div class="row">
            <?php
        $productos = [
            ['nombre' => 'Policarbonato Alveolar', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato_Alveolar.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato_Alveolar.php'],
            ['nombre' => 'Policarbonato Compacto', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato.php'],
            ['nombre' => 'Techo Traslucido de Policarbonato 3', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato_TechoTraslucido.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato_TechoTraslucido.php'],
            ['nombre' => 'Techo Traslucido de Policarbonato 7', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato_TechoTraslucidop7.jpg ', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato_TechoTraslucidop7.php'],
            ['nombre' => 'Techo Traslucido de Policarbonato - Tipo Duratecho', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato_TechoTraslucido_Tipo_Duratecho.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato_TechoTraslucido_Tipo_Duratecho.php'],
            ['nombre' => 'Techo Traslucido de Policarbonato - Tipo Master1000', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Policarbonato_TechoTraslucido_Tipo_Master1000.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Policarbonato_TechoTraslucido_Tipo_Master1000.php'],
            ['nombre' => 'Laminas Acrílicas', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Laminas_Acrílicas.jpeg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Laminas_Acrílicas.php'        ],
            ['nombre' => 'Domos Acrílicos', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Domos_Acrílicos.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Domos_Acrílicos.php'],
            ['nombre' => 'Teja Española – Resina Sintética con P.V.C – Onda Grande', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_TejaEspañola_Resina_Sintetica_Onda Grande.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_TejaEspañola_Resina_Sintetica_Onda Grande.php'],

            ['nombre' => 'Teja Española,Resina Sintética Onda Pequeña', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_TejaEspañola_Resina_Sintetica_Onda Pequeña.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_TejaEspañola_Resina_Sintetica_Onda Pequeña.php'],
            ['nombre' => ' Teja Roma Colonial  P.V.C Industrial', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_TejaRoma_Colonial_P.V.C_Industrial.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_TejaRoma_Colonial_P.V.C_Industrial.php'],
            ['nombre' => 'Techo Traslucida P.V.C Tipo Teja Onda Pequeña', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Techo_Traslucida_P.V.C_TipoTeja_Onda_Pequeña.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Techo_Traslucida_P.V.C_TipoTeja_Onda_Pequeña.php'],
            ['nombre' => 'Supertecho de 0.30mm', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Supertecho_0.30mm.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Supertecho_0.30mm.php'],
            ['nombre' => 'Techo Metálico', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Techo_Metálico.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Techo_Metálico.php'],
            ['nombre' => 'Master1000 de 0.40mm Prepintado', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Master1000_0.40mm_Prepintado.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Master1000_0.40mm_Prepintado.php'],
            ['nombre' => 'Zinc', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Zinc.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Zinc.php'],
            ['nombre' => 'Teja Toledo', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_ Teja_Toledo.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_ Teja_Toledo.php'],
            ['nombre' => 'Parasol de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_ParasoldeFibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_ParasoldeFibradeVidrio.php'],
            ['nombre' => ' Macetero de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_MaceterodeFibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_MaceterodeFibradeVidrio.php'],
            ['nombre' => 'Piscinas de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_PiscinasdeFibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_PiscinasdeFibradeVidrio.php' ],
            ['nombre' => ' Caja Macetero de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_CajaMaceterodeFibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_CajaMaceterodeFibradeVidrio.php'],
            ['nombre' => 'Sillas y pupitres de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Sillas_pupitres_FibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Sillas_pupitres_FibradeVidrio.php'],
            ['nombre' => 'Toboganes-Resbaladeras de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Toboganes_Resbaladeras_FibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Toboganes_Resbaladeras_FibradeVidrio.php'],

            ['nombre' => ' Bote de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Bote_FibradeVidrio.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Bote_FibradeVidrio.php'        ],
            ['nombre' => 'Tachos de basura de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Tachos_basura_FibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Tachos_basura_FibradeVidrio.php'],
            ['nombre' => ' Tapa de Tachos de Fibra de Vidrio', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Tapa_Tachos_FibradeVidrio.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Tapa_Tachos_FibradeVidrio.php'],
            ['nombre' => 'Techo termoacústico Industrial Permatec', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Techo_termoacústico_Industrial_Permatec.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Techo_termoacústico_Industrial_Permatec.php'],
            ['nombre' => ' Cubierta Termoacústico Madrileña', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cubierta_termoacústico_Madrileña.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cubierta_termoacústico_Madrileña.php'],
            ['nombre' => 'Cubierta Termoacústica Trapezoidal', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cubierta_Termoacústica_Trapezoidal.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cubierta_Termoacústica_Trapezoidal.php'],
            ['nombre' => 'Perfil “H” o Unión de Policarbonato /Conector de Policarbonato', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Perfil_“H”_o_Unión de Policarbonato.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Perfil_“H”_o_Unión de Policarbonato.php'],
            ['nombre' => 'Perfil de Aluminio “U” para Policarbonato', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_PerfildeAluminio_“U”_paraPolicarbonato.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_PerfildeAluminio_“U”_paraPolicarbonato.php'],
            ['nombre' => 'Cinta de Ventilación ', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cinta_Ventilación.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cinta_Ventilación.php'],
            ['nombre' => 'Perno Autoperforante de 1 ½” ', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Perno_Autoperforante_1 ½”.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Perno_Autoperforante_1 ½”.php'],
            ['nombre' => 'Perno Plano 1 x 10', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_PernoPlano_1x10.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_PernoPlano_1x10.php'],
            ['nombre' => 'Tubo de Silicon para Policarbonato', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_ Tubo_Silicon_Policarbonato.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_ Tubo_Silicon_Policarbonato.php'],
            ['nombre' => ' Capuchón para Policarbonato', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Capuchón_Policarbonato.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Capuchón_Policarbonato.php'],
            ['nombre' => 'Conjunto de Capuchón y perno ', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Conjunto_Capuchón_perno.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Conjunto_Capuchón_perno.php'],
            ['nombre' => 'Cinta de Aluminio para policarbonato', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cinta_Aluminio_policarbonato.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cinta_Aluminio_policarbonato.php'],
            ['nombre' => 'Cumbrero Principal a 2 Aguas', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cumbrero_Principal_2Aguas.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cumbrero_Principal_2Aguas.php'],
            ['nombre' => 'Unión 3 Vías Para Teja de Resina Sintética', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Unión_3Vías_TejadeResinaSintética.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Unión_3Vías_TejadeResinaSintéticas.php'],
            ['nombre' => ' Cumbrero Lateral', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cumbrero_Lateral.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cumbrero_Lateral.php'],
            ['nombre' => 'Cumbrero Lateral Izquierdo y Derecho', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Cumbrero_Lateral_Izquierdo_Derecho.jpg', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Cumbrero_Lateral_Izquierdo_Derecho.php'],
            ['nombre' => 'Terminal Frontal o Remate Para Teja de Resina Sintética', 'imagen' => 'http://localhost/grecangoss/imagenes/productos/Grecangoss_Terminal_Frontal_Izquierdo_Teja_Resina_Sintética.png', 'enlace' => 'http://localhost/grecangoss/tpproductos/Grecangoss_Terminal_Frontal_Izquierdo_Teja_Resina_Sintética.php'],
            // Agrega más productos manualmente aquí
        ];
        
        // ... Tu código PHP para mostrar productos ...

            // Este valor controlará cuántos productos se muestran por página
            $productosPorPagina = 12;
            $totalProductos = count($productos);

            // Obtiene la página actual de la URL
            $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

            // Calcula el índice de inicio para la página actual
            $inicio = ($paginaActual - 1) * $productosPorPagina;

            // Filtra los productos para mostrar solo los de la página actual
            $productosPagina = array_slice($productos, $inicio, $productosPorPagina);

            foreach ($productosPagina as $producto) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 " >
                    <a href="' . $producto['enlace'] . '" style="text-decoration: none; color: inherit;">
                        <div class="card rounded custom-thin-border">
                            <img src="' . $producto['imagen'] . '" class="card-img-top mx-auto img-fluid producto-imagen" alt="' . $producto['nombre'] . '">
                            <div class="card-body ">
                                <h5 class="card-title">' . $producto['nombre'] . '</h5>
                            </div>
                        </div>
                    </a>
                </div>';

                // Configura una cookie cuando se hace clic en el enlace del producto
                echo '
                <script>
                    document.querySelector("a[href=\'' . $producto['enlace'] . '\']").addEventListener("click", function() {
                        document.cookie = "producto_visitado=' . $producto['nombre'] . '";
                    });
                </script>';
            }
            
            
            ?>
        </div>
        <ul class="pagination justify-content-center">
            <?php
            // Calcula el número total de páginas
            $totalPaginas = ceil($totalProductos / $productosPorPagina);

            // Muestra botón "Anterior" si no estás en la primera página
            if ($paginaActual > 1) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaActual - 1) . '">Anterior</a></li>';
            }

            // Muestra números de página
            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo '<li class="page-item ' . ($i == $paginaActual ? 'active' : '') . '"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
            }

            // Muestra botón "Siguiente" si no estás en la última página
            if ($paginaActual < $totalPaginas) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaActual + 1) . '">Siguiente</a></li>';
            }
            ?>
        </ul>


    </div>

</body>

</html>
<?php include './template/footer.php'; ?>