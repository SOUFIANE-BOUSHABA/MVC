
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
?>
