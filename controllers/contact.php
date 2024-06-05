<?php
    $name= "";
    $phone= "";
    $email="";
    $message="";
    if(
        isset($_POST['name']) && 
        isset($_POST['phone']) && 
        isset($_POST['email']) && 
        isset($_POST['message'])
    ){
        $name= $_POST['name'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $message= $_POST['message'];
    }

    echo $name ." - ". $email." - " .$phone. " - ". $message;


    $url="mysql:host=localhost;dbname=aula_menu";
    $user="root";
    $pass="";

    try{
        $connection = new PDO($url, $user, $pass);

        $res = $connection -> prepare ("INSERT INTO contactform (name, phone, email, message) VALUES (:name; :phone; :email; :message)");
        $res-> bindParam (":name", $name);
        $res-> bindParam (":phone", $phone);
        $res-> bindParam (":email", $email);
        $res-> bindParam (":message", $message);

        $res-> execute();

        echo "Contact form data inserted successfully!";
    }catch(PDOException $ex){
        echo "Erro:" .$ex->getMessage();
    }

    