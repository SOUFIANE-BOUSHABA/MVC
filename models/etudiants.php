<?php

function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
    return $conn;
}

function getStudents() {
    $conn = connectToDatabase();

    $sql = "SELECT * FROM etudiant";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }


    return $data;
}

function addStudent($lastName, $firstName, $birthDate, $class) {
    $conn = connectToDatabase();

    $sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `date_naissance`, `classe`) VALUES (NULL,'$lastName','$firstName','$birthDate','$class')";
    mysqli_query($conn, $sql);

}

function delStudent($id) {
    $conn = connectToDatabase();

    $sql = "DELETE FROM `etudiant` WHERE id='$id'";
    mysqli_query($conn, $sql);

}

function updStudent($id, $lastName, $firstName, $birthDate, $class) {
    $conn = connectToDatabase();

    $sql = "UPDATE `etudiant` SET `nom`='$lastName',`prenom`='$firstName',`date_naissance`='$birthDate',`classe`='$class' WHERE id ='$id'";
    mysqli_query($conn, $sql);

}
?>
