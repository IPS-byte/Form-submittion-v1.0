<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    // retrive form data
    $name= $_POST["name"];
    $age=(int)$_POST["age"];
    $studentId=$_POST["studentId"];
    $grades_input=$_POST["grades"];
    // convert grades to an array of float
    $grades=array_map("floatval", explode(",",$grades_input));
    // calucate the average grade
    $average_grade=array_sum($grades)/count($grades);
    // display the students information
    echo"<h2>Student information</h2>";
    echo"<p><strong>Name:</strong>$name</p>";
}
?>