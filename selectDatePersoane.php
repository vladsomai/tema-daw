<?php
$servername = "localhost";
$username = "root";
$password = "temadaw";

if(isset($_POST["varsta"]))
  echo json_encode(selectAllPersoane($_POST["varsta"]));
else
  echo json_encode(selectAllPersoane());

function selectAllPersoane($searched_varsta = 0)
{
    global $servername, $username, $password;
    $result=[];
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=temadaw", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($searched_varsta == 0)
         $stmt = $conn->prepare("SELECT * FROM persoane");
        else
         $stmt = $conn->prepare("SELECT * FROM persoane where varsta = $searched_varsta");
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
