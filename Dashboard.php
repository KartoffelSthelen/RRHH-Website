<?php
include('header.php'); // Incluye el encabezado
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Dashboard.css">
    
</head>

<body>
    
    <div class="container"> 
        <aside class="sidebar">
            <a href="index.php">Login</a>
            <a href=Datapersonal.php>Llenado de datos</a>
            <button>Botón 3</button>
            <button>Botón 4</button>
            <button>Botón 5</button>
        </aside>
        
        <main class="main-content">
            <section class="image-section">
                <img src="imagenes/bird-dance.gif" alt="Imagen 1">
            </section>
            <section class="image-section">
                <img src="imagenes/bird-dance.gif" alt="Imagen 2">
            </section>
            <section class="image-section">
                <img src="imagenes/bird-dance.gif" alt="Imagen 3">
            </section>
        </main>
    </div>
    
   
</body>
</html>
<?php
include('footer.php'); // Incluye el pie de página
?>