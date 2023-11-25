
<?php

function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecole";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    return $conn;
}


function getStudents() {
    $conn = connectToDatabase();

    $sql = "SELECT * FROM etudiant";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function addStudent($lastName, $firstName, $birthDate, $class) {
    $conn = connectToDatabase();

    $sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `date_naissance`, `classe`) VALUES (NULL,'$lastName','$firstName','$birthDate','$class')";
    $conn->query($sql);
}

function delStudent($id) {
    $conn = connectToDatabase();

    $sql = "DELETE FROM `etudiant` WHERE id='$id'";
    $conn->query($sql);
}

function updStudent($id,$lastName, $firstName, $birthDate, $class) {
    $conn = connectToDatabase();

    $sql = "UPDATE `etudiant` SET `nom`='$lastName',`prenom`='$firstName',`date_naissance`='$birthDate',`classe`='$class' WHERE id ='$id'";
    $conn->query($sql);
}
?>
