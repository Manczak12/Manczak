<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oceny</title>
</head>
<body>
<h1>Wstaw oceny</h1>
    <form method="post" action="wstaw_ocene.php">
        <label for="id_ucznia">ID ucznia</label><br>
        <input type="number" id="id_ucznia" name="id_ucznia" required><br><br>

        <label for="ocena">Ocena</label><br>
        <input type="number" id="ocena" name="ocena" min="1" max="6" step="0.5" required><br><br>

        <input type="submit" value="Wstaw ocenę">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "2c");

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $id = $_POST["id"];
    $ocena = $_POST["ocena"];


    $sql = "UPDATE uczniowie2c SET ocena = '$ocena' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Ocena została zaktualizowana pomyślnie!</p>";
    } else {
        echo "<p>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>
