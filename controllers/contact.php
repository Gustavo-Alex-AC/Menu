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

    // Tinha um erro no nome da tabela escreveu se "contacform" inves de "contactform"

    /*$url="mysql:host=localhost;dbname=aula_menu";
    $user="root";
    $pass="";

    try{
        $connection = new PDO($url, $user, $pass);

        $res = $connection -> prepare ("INSERT INTO contactform(name, phone, email, message) VALUES(:name; :phone; :email; :message)");
        $res-> bindParam (":name", $name);
        $res-> bindParam (":phone", $phone);
        $res-> bindParam (":email", $email);
        $res-> bindParam (":message", $message);

        $res-> execute();

        echo "Contact form data inserted successfully!";
    }catch(PDOException $ex){
        echo "Erro:" .$ex->getMessage();
    }*/



$url = "mysql:host=localhost;dbname=aula_menu";
$user = "root";
$password = ""; 

try {
  // Connect to the database
  $connection = new PDO($url, $user, $password);


  // Prepare the SQL statement with named placeholders
  $sql = "INSERT INTO contacform (name, phone, email, message) VALUES (:name, :phone, :email, :message)";
  $statement = $connection->prepare($sql);


  // Bind values to placeholders (replace with actual data)
  $statement->bindParam(':name', $name);
  $statement->bindParam(':phone', $phone);
  $statement->bindParam(':email', $email);
  $statement->bindParam(':message', $message);

  // Execute the prepared statement
  $statement->execute();

  echo "Contact form data inserted successfully!";

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  // **Optional:** Log the error for further investigation
  // error_log("PDO Error: " . $e->getMessage(), 3, "/path/to/error.log");
}

// Close the connection
$connection = null;

