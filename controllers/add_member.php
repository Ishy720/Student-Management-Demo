<?php
require_once('../config.php');

if (isset($_POST["submitNewMember"])) {

    //Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $school = $_POST["school"];

    //Instantiate MemberModel
    require_once('../models/MemberModel.php');
    $memberModel = new MemberModel($conn);

    //Add the member to the specified school
    $result = $memberModel->addMemberToSchool($name, $email, $school);

    if ($result) {
        echo "Member added successfully!";
    } else {
        echo "Error adding member.";
    }
    
} else {
    echo "Invalid request.";
}
?>
