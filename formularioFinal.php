<?php
session_start();

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $PrimerApellido = $_POST['primerApellido'];
    $SegundoApellido = $_POST['segundoApellido'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Validación de campos
    $errors = array();

    if(empty($nombre)){
        $errors[] = "Por favor, ingrese su nombre";
    }

    if(empty($PrimerApellido)){
        $errors[] = "Por favor, ingrese su primer apellido";
    }

    if(empty($SegundoApellido)){
        $errors[] = "Por favor, ingrese su segundo apellido";
    }

    if(empty($email)){
        $errors[] = "Por favor, ingrese su email";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "El correo electrónico ingresado no es válido";
    }

    if(empty($login)){
        $errors[] = "Por favor, ingrese su nombre de usuario";
    }

    if(empty($password)){
        $errors[] = "Por favor, ingrese su contraseña";
        } elseif(strlen($password) < 4 || strlen($password) > 8){
        $errors[] = "La contraseña debe tener entre 4 y 8 caracteres";
    }

    if(count($errors) > 0){
        // Hay errores, redirige al formulario y muestra los mensajes de error
        $errorString = implode('<br>', $errors);
        echo "<p>$errorString</p>";
        exit();
    } else {
        // No hay errores, procesa los datos del formulario

        // Realiza la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cursosql";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }
        
         $sql = "SELECT * FROM formulariophp WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $errorMessage = "El correo electrónico ya existe en la base de datos";
            echo "<p>$errorMessage</p>";
            exit();
        }
        // Prepara la consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO formulariophp (nombre, PrimerApellido, SegundoApellido, email, login, password)
                VALUES ('$nombre', '$PrimerApellido', '$SegundoApellido', '$email', '$login', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Redirige a una página de éxito o muestra un mensaje de éxito
            $successMessage = "Registro completado con éxito";
            echo "<p>$successMessage</p>";
            echo '<a href="consulta.php">Consulta</a>';
        } else {
            echo "Error al insertar los datos en la base de datos: " . $conn->error;
        }

        // Cierra la conexión a la base de datos
        $conn->close();
    }
}
?>
