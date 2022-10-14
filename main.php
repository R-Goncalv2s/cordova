<?php
include_once('config.php');
?>
<?php
    if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO `contacts` (firstname, lastname, phone, email)
    VALUES ('$firstname', '$lastname', '$phone', '$email')";

    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully...';
        mysqli_close($conn);
    }
        else{
            echo 'Data insertion failed...'.mysqli_connect_error($conn) ;
        }
}
else{
    echo "Please go back to Input Page.";
}
?>