<?php
    $regName = $_POST['regName'];
    $regnr = $_POST['regnr'];
    $email = $_POST['email'];
    $regpas = $_POST['regpas'];


    $conn = new mysqli('localhost','root','','register');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT into registerdb(regName,regnr,email,regpas)
            values(?,?,?,?");
        $stmt->bind_param("siss",$regName, $regnr, $email, $regpas);
        $stmt->execute();
        echo "Udało się zarejestrować.....";
        $stmt->close();
        $conn->close();
    }

?>