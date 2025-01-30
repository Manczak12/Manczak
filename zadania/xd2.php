<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Dodaj nowego ucznia</h1>
    <form method="POST" action="">
        <label>Imię</label>
        <input type="text" name="imie" required><br>
        <label>Nazwisko</label>
        <input type="text" name="nazwisko" required><br>
        <label>Data urodzenia</label>
        <input type="date" name="data_urodzenia" required><br>
        <label>Średnia ocen</label>
        <input type="text" name="srednia_ocen" required><br>
        <button type="submit">Dodaj ucznia</button>
    </form>
</body>
</html>


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "2c");


        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }

        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $data_urodzenia = $_POST["data_urodzenia"];
        $srednia_ocen = $_POST["srednia_ocen"];

        $sql = "INSERT INTO uczniowie2c (imie, nazwisko, data_urodzenia, srednia_ocen) 
                VALUES ('$imie', '$nazwisko', '$data_urodzenia', '$srednia_ocen')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Uczeń został dodany pomyślnie!</p>";
        } else {
            echo "<p>Błąd " . $conn->error . "</p>";
        }
        $conn->close();
    }
    ?>