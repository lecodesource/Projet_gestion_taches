<?php
include 'connection.php';

if(isset($_POST['signUp'])){
    // Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$checkEmail=" SELECT * From users where email = '$email'";
$result=$conn->query($checkEmail);
if($result->num_rows>0){
    echo "Email Adress Already Exists !";
}
else{
    $insertQuery= "INSERT INTO users( name, email, password) 
        VALUES ('$name ', '$email','$password') ";
    if($conn->query($insertQuery)==TRUE){
        header("location: sigup.html");
    }
    else{
        echo " Error : ".$conn->error;
    }

}


}

if(isset($_POST['sigIn'])){
    $email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql= "SELECT * FROM  users WHERE  email = ' $email' and password = '$password'";
$result=$conn->query($sql);
if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']= $row['email'] ;
    header("location: pageaccueil.php");
    exit();
}
else{
    echo "Not Found , Incorrect Email or Password";
}

}


?>
