<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
$username = "alumno";
$password = "AlumnoDuoc.-2024";
$database = "prediccionv3";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre_alumno = $_POST['nombre_alumno'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$rut = $_POST['rut'];
$genero = $_POST['genero'];
$motivacion = $_POST['motivacion'];
$horas_estudio = $_POST['horas_estudio'];
$horas_amigos = $_POST['horas_amigos'];
$horas_deporte = $_POST['horas_deporte'];
$horas_hobbie = $_POST['horas_hobbie'];
$estres = $_POST['estres'];
$satisfaccion = $_POST['satisfaccion'];
$situacion_laboral = $_POST['situacion_laboral'];
$traslado = $_POST['traslado'];
$ingreso_academico = $_POST['ingreso_academico'];
$actividades_duoc = $_POST['actividades_duoc'];
$aprobado = $_POST['aprobado'];
$reprobado = $_POST['reprobado'];
$omitido = $_POST['omitido'];
$convalidar = $_POST['convalidar'];
$telefono = $_POST['telefono'];

// Validar el formato del correo electrónico
if (strpos($correo, '@') !== false) {
    // Si el correo electrónico contiene el carácter '@', mostrar un mensaje de error y detener el procesamiento
/*	echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 400px; margin: 0 auto; width: 58%; height: 100%;">El correo electrónico no puede contener @.</div>';
	echo '<div style="text-align: center; margin-top: 1 px;"><a href="http://201.187.234.121" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5px;">Volver al formulario</a></div>';
    exit; // Detener el procesamiento del formulario
}*/

    echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 100px; margin: 0 auto; width: 58%; height: auto;">
            "El correo electrónico no puede contener @."<br><br>
            <div style="text-align: center; margin-top: 20px;">
                <a href="http://201.187.234.121" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5px;">Volver al formulario</a>
            </div>
          </div>';
   exit;
   }

/*    echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 100px; margin: 0 auto; width: 58%; height: auto;">
            "El correo electrónico no puede contener "@"."
            <div style="text-align: center; margin-top: 20px;">
                <a href="http://201.187.234.121" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5px;">Volver al formulario</a>
            </div>
          </div>';
    } exit; */

// Extraer la parte del correo electrónico antes de "@" para la comparación
$correo_verificar = explode("@", $correo)[0];

// Concatenar la extensión del correo electrónico
$correo_completo = $correo . "@duocuc.cl";

// Verificar si los datos ya existen en la base de datos
$sql_check = "SELECT * FROM formulario_prediccionv3 WHERE correo LIKE '%$correo_verificar%' OR rut = '$rut'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // Si ya existe un registro con el mismo correo o RUT, mostrar un mensaje de error
    echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 100px; margin: 0 auto; width: 58%; height: auto;">
	    "Ya existe un registro con el mismo correo electrónico o RUT en la base de datos."<br><br>
            <div style="text-align: center; margin-top: 20px;">
                <a href="http://201.187.234.121" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5px;">Volver al formulario</a>
            </div>
          </div>';
    } else {
    
// Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO formulario_prediccionv3 (nombre_alumno, edad, correo, rut, telefono, genero, motivacion, horas_estudio, horas_amigos, horas_deporte, horas_hobbie, estres, satisfaccion, situacion_laboral, traslado, ingreso_academico, actividades_duoc, aprobado, reprobado, omitido, convalidar)
VALUES ('$nombre_alumno', $edad, '$correo_completo', '$rut', '$telefono', '$genero', $motivacion, $horas_estudio, $horas_amigos, $horas_deporte, $horas_hobbie, $estres, $satisfaccion ,'$situacion_laboral', $traslado, '$ingreso_academico', '$actividades_duoc', $aprobado, $reprobado, $omitido, $convalidar)";

// if ($conn->query($sql) === TRUE) {
//    echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 400px; margin: 0 auto; width: 58%; height: 100%;">"Gracias por contestar la encuesta."</div>';
//    echo '<div style="text-align: center; margin-top: 20px;"><a href="http://192.168.1.101" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5pxwidth: 58%; height: 100%;; width: 58%; height: 100%;">Volver a la encuesta</a></div>';
//    echo '<div style="text-align: center; font-size: 24px; margin-top: 20px;">Firma: [Reynaldo Mancilla]</div>';
//    } else {
//        echo "Error al ingresar los datos correctamente: " . $conn->error;
//    }
//}


if ($conn->query($sql) === TRUE) {
    // Mostrar el botón de retorno y el mensaje de agradecimiento con la firma
    echo '<div style="text-align: center; background-color: #00BFFF; font-size: 100px; padding: 100px; margin: 0 auto; width: 58%; height: auto;">
            "Gracias por contestar la encuesta."<br><br>
            <div style="text-align: center; margin-top: 20px;">
                <a href="http:///201.187.234.121" style="text-decoration: none; color: #000; background-color: #FFD700; padding: 10px 20px; border-radius: 5px;">Volver al formulario</a>
             </div>
          </div>';
    } else {
        echo "Error al ingresar los datos correctamente: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
