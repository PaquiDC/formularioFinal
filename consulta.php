<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<?php
// Realiza la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Realiza la consulta para obtener los registros de la tabla
$sql = "SELECT * FROM formulariophp";
$result = $conn->query($sql);

// Muestra los registros en una tabla
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Email</th><th>Login</th><th>Password</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['PrimerApellido'] . "</td>";
        echo "<td>" . $row['SegundoApellido'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['login'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
