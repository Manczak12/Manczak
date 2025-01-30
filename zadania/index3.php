<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usun ucznia</title>
</head>
<body>
    <h1>Usun ucznia</h1>
    <form method="post" action="usun_ucznia.php">
        <label for="id_ucznia">ID ucznia do usunięcia</label><br>
        <input type="number" id="id_ucznia" name="id_ucznia" required><br><br>
        <input type="submit" value="Usuń ucznia">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "2c");

    if ($conn->connect_error) {
        die("Błąd połączenia: " . $conn->connect_error);
    }

    $id_ucznia = $_POST["id_ucznia"];

    $check_sql = "SELECT * FROM uczniowie2c WHERE id = '$id_ucznia'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        $delete_sql = "DELETE FROM uczniowie2c WHERE id = '$id_ucznia'";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<p>Uczeń o ID $id_ucznia został usunięty pomyślnie.</p>";
        } else {
            echo "<p>Błąd podczas usuwania ucznia: " . $conn->error . "</p>";
        }
    } else {
        echo "Uczeń o ID $id_ucznia nie istnieje w bazie danych.</p>";
    }

    $conn->close();
}
?>

