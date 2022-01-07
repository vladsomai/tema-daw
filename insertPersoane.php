<?php
$servername = "localhost";
$username = "root";
$password = "temadaw";

if(isset($_POST["varsta"]) && isset($_POST["nume"]))
  echo json_encode(insertPersoana($_POST["nume"], $_POST["varsta"]));
else
  echo json_decode("Invalid request");

function insertPersoana($nume,$varsta)
{
    global $servername, $username, $password;
    $result=[];
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=temadaw", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("call insertPersoana(\"$nume\",$varsta);");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
       
        $result = $stmt->fetchAll();
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      $conn = null;
      return $result;
}
?>
