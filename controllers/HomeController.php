<?php
include 'models/etudiants.php';
function index() {
    $students = getStudents();
    include 'views/layout.php';
}
?>
