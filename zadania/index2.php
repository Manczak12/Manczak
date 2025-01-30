<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2c";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT * FROM uczniowie2c";
$result = $conn->query($sql);

if (!$result) {
    die("Błąd w zapytaniu SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div style="border: 1px dotted black; padding: 10px; margin: 10px;">';
        echo "<strong>ID:</strong> " . $row["id"] . "<br>";
        echo "<strong>Imię:</strong> " . $row["imie"] . "<br>";
        echo "<strong>Nazwisko:</strong> " . $row["nazwisko"] . "<br>";
        echo "<strong>Data urodzenia:</strong> " . $row["data_urodzenia"] . "<br>";
        echo "<strong>Średnia ocen:</strong> " . $row["srednia_ocen"] . "<br>";
        echo '</div>';
    }
} else {
    echo "Brak wyników.";
}

$conn->close();
?>
