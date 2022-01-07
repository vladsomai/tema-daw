<?php
$servername = "localhost";
$username = "root";
$password = "temadaw";

echo json_encode(insertProdus($_POST["produs"],$_POST["pret"]));

function insertProdus($produs, $pret_buc, $bucati = 1) {
    $result = [];
    global $servername, $username, $password;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=temadaw", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("call insertProdus('$produs',$pret_buc,$bucati);");
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
       