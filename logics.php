<?php
if(isset($_POST['submitBtn'])){
    $nameFieldValue = $_POST['nameField'];
    $emailFieldValue = $_POST['emailField'];

    echo "Name is ". $nameFieldValue . "<br>". "Email is ". $emailFieldValue . " <br> ". "Form Submitted Successfully";
}
else {
    echo "Not Submitted";
}
?>