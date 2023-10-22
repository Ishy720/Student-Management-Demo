<?php
require_once('../config.php');

if (isset($_POST["viewMembers"])) {

    //Retrieve selected school ID
    $schoolID = $_POST["school"];

    //Instantiate SchoolModel
    require_once('../models/SchoolModel.php');
    $schoolModel = new SchoolModel($conn);

    //Get members for the selected school
    $members = $schoolModel->displaySchoolMembers($schoolID);

    //Display all members
    if ($members->num_rows > 0) {
        while($row = $members->fetch_assoc()) {
            echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
        }
    } else {
        echo "No members found for this school.";
    }
    
} else {

    //Bad request
    echo "Invalid request.";

}
?>