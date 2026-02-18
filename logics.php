<?php
if(isset($_POST['submitBtn'])){
    $nameFieldValue = $_POST['nameField'];

    echo $nameFieldValue . " <br> ". "Form Submitted Successfully";
}
else {
    echo "Not Submitted";
}
?>