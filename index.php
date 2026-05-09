<?php

$host = getenv('MYSQLHOST') ;
$port = getenv('MYSQLPORT') ;
$user = getenv('MYSQLUSER') ;
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE') ;

$conexion = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Esto es vital para los acentos
mysqli_set_charset($conexion, "utf8");
?>
<?php
// 2. Consulta para obtener los programas de la tabla
$query = "SELECT * FROM programas";
$resultado = mysqli_query($conexion, $query); 

// Verificación de seguridad
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Institucional - Programas Estudiantiles</title>
    <style>
        :root {
            --primario: #800020; /* Color guinda institucional */
            --secundario: #b8860b; /* Dorado */
            --gris-claro: #f4f4f4;
            --texto: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            color: var(--texto);
            background-color: #fff;
        }

        /* --- HEADER --- */
        header {
            background-color: var(--primario);
            color: white;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 4px solid var(--secundario);
        }

        .logo-container img {
            height: 80px; /* Ajustar según tu logo real */
            background: white;
            padding: 5px;
            border-radius: 5px;
        }

        /* --- NAV --- */
        nav {
            background-color: #333;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 1rem 1.5rem;
            display: block;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: var(--secundario);
        }

        /* --- CONTENIDO --- */
        main {
            max-width: 1000px;
            margin: auto;
            padding: 2rem;
        }

        section {
            margin-bottom: 3rem;
            padding-top: 60px; /* Compensar el nav fixed */
        }

        h2 {
            color: var(--primario);
            border-bottom: 2px solid var(--secundario);
            display: inline-block;
        }

        .programa-card {
            background: var(--gris-claro);
            padding: 1.5rem;
            margin: 1rem 0;
            border-left: 5px solid var(--primario);
            border-radius: 4px;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 3rem;
        }

        .social-links a {
            color: var(--secundario);
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-container">
            <!-- Reemplaza la URL por la ruta de tu logo real -->
            <img src="cbtis.jpg" alt="Logotipo Institucional">
        </div>
        <h1>Portal de Programas y Servicios Estudiantiles</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#academico">Apoyo Académico</a></li>
            <li><a href="#bienestar">Bienestar y Salud</a></li>
            <li><a href="#integral">Desarrollo Integral</a></li>
            <li><a href="#emprendimiento">Emprendimiento y Clubes</a></li>
        </ul>
    </nav>

    <main>
        <!-- SECCIÓN ACADÉMICA -->
        <section id="academico">
            <h2>Apoyo Académico</h2>
            <div class="programa-card">
                <h3>SINATA (Tutorías)</h3>
                <p>Sistema Nacional de Tutorías Académicas. Brindamos acompañamiento para fortalecer tu trayectoria escolar y evitar el rezago. Es una estrategia diseñada por la Subsecretaría de Educación Media Superior (SEMS) en México para apoyar a los estudiantes durante su bachillerato.</p>
            </div>
            <div class="programa-card">
                <h3>PRONAFOLE (Lectura)</h3>
                <p>Programa Nacional de Fomento a la Lectura. Espacio dedicado a enriquecer el vocabulario y la comprensión lectora de la comunidad estudiantil. El PRONAFOLE es el Programa Nacional de Fomento a la Lectura. Es el "brazo literario" de la educación media superior y su misión es que los alumnos no solo lean por obligación, sino que aprendan a disfrutar y comprender lo que leen.</p>
            </div>
        </section>

        <!-- SECCIÓN BIENESTAR -->
        <section id="bienestar">
            <h2>Bienestar y Salud</h2>
            <div class="programa-card">
                <h3>FORMALASA</h3>
                <p>El FORMALASA es el programa de Formación para la Salud, una iniciativa integral diseñada para que los estudiantes no solo estén sanos físicamente, sino que también tengan las herramientas para tomar decisiones responsables sobre su cuerpo y su vida.

En las escuelas técnicas (como la DGETI), este programa se divide principalmente en dos pilares que mencionas en tu base de datos:


</p>
                <ul>
                    <li><strong>Consultorio Médico:</strong> Atención primaria y primeros auxilios. Es el primer contacto para la salud física. Se encarga de la atención de primeros auxilios, campañas de vacunación, detección de problemas visuales o auditivos y el seguimiento del seguro facultativo (IMSS).</li>
                    <li><strong>Consultorio Sexual-mente Responsable:</strong> Orientación profesional sobre salud reproductiva y prevención. Es un espacio de orientación (muchas veces psicológica y preventiva) sobre salud reproductiva. Aquí se tratan temas de prevención de embarazos no deseados, prevención de enfermedades de transmisión sexual (ITS) y el ejercicio de una sexualidad libre, informada y segura.</li>
                </ul>
            </div>
        </section>

        <!-- SECCIÓN INTEGRAL -->
        <section id="integral">
            <h2>Desarrollo Integral</h2>
            <div class="programa-card">
                <h3>ECALE (Cine)</h3>
                <p>El ECALE son las siglas de Educación con Calidad Lectora y Estética. Es un programa muy padre porque rompe con la idea de que en la escuela solo se viene a estudiar libros de texto; su objetivo es sensibilizarte a través del arte, específicamente el cine.</p>
            </div>
            <div class="programa-card">
                <h3>AMA DGETI (Medio Ambiente)</h3>
                <p>Acciones para el Medio Ambiente. Programa dedicado al cuidado del entorno, reforestación y cultura del reciclaje. El AMA DGETI es el programa de Acciones para el Medio Ambiente. Es la iniciativa "verde" de la institución, diseñada para que los estudiantes no solo aprendan teoría sobre ecología, sino que realicen acciones de impacto real en sus planteles y comunidades.</p>
            </div>
        </section>

        <!-- SECCIÓN EMPRENDIMIENTO -->
        <section id="emprendimiento">
            <h2>Emprendimiento y Talento</h2>
            <div class="programa-card">
                <h3>MEEMS</h3>
                <p>Modelo de Emprendimiento de la Educación Media Superior. Impulsa tus ideas de negocio y proyectos innovadores. El MEEMS es el Modelo de Emprendimiento de la Educación Media Superior. Es el programa diseñado para que los estudiantes no solo se preparen para buscar un empleo, sino para que tengan la capacidad de crear sus propias empresas o proyectos innovadores.
Es el espacio ideal para los alumnos con mentalidad de "tiburones" o inventores.</p>
            </div>
            <div class="programa-card">
                <h3>Oferta de Clubes</h3>
                <p>Desarrolla tus habilidades en nuestros diversos espacios:</p>
                <ul>
                    <li><strong>Deportivos:</strong> Fútbol, Básquetbol y Voleibol.</li>
                    <li><strong>Culturales:</strong> Danza, Música y Teatro.</li>
                    <li><strong>Ciencias:</strong> Robótica, Química y Matemáticas.</li>
                </ul>
            </div>
        </section>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Programa</th>
                        <th>Descripción</th>
                        <th>Área de Impacto</th>
                        <th>Requisitos de Participación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Punto 3: Ciclo while para generar las filas dinámicamente
                    while ($row = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td><strong>" . $row['nombre'] . "</strong></td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['area_impacto'] . "</td>";
                        echo "<td>" . $row['requisitos'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <section id="contacto" class="formulario-consulta">
            <h3>¿nuestra pagina te ayudo? </h3>
            <p>Envíanos en que te ayudo mas.</p>
            <form method="POST">
                <label>opinion:</label>
                <input type="text" id="opinion" name="opinion" placeholder="escribe" required>
                <button type="submit" name="enviar" class="btn-submit">Enviar Consulta</button>
                <?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['enviar'])){
    // 1. Recibimos datos
    $opinion = $_POST['opinion'];
    $sql = "INSERT INTO parecio (opinion) VALUES ('$opinion')";
    $query = mysqli_query($conexion, $sql);

    if($query){
        echo "¡Muchas gracias por escribir en que te ayudo mas!.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($conexion);
    }
} 
?>
    </main>

    <footer>
        <div class="contacto">
            <p><strong>Dirección:</strong> Av. Institucional No. 123, Col. Centro.</p>
            <p><strong>Teléfono:</strong> (123) 456-7890 | <strong>Email:</strong> contacto@escuela.edu.mx</p>
        </div>
        <hr style="width: 50%; border: 0.5px solid #444;">
        <div class="creditos">
            <p>&copy; 2026 - Desarrollado por: <strong>[yeshua said herrera benavides]</strong></p>
            <div class="social-links">
                <a href="#">Facebook</a> | 
                <a href="#">Instagram</a> | 
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

</body>
</html>