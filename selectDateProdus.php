<?php
$servername = "localhost";
$username = "root";
$password = "temadaw";

echo json_encode(selectAllProdus());

function selectAllProdus()
{
    global $servername, $username, $password;
    $result=[];
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=temadaw", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM produse");
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
