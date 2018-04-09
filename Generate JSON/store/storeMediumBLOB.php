<?php
try {
      $db_conn = new PDO('mysql:host=localhost;dbname=experiment', 'root', '12345');
      $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $json = $_POST['json'];
      $query = "INSERT INTO dataMediumBLOB (JSONdata) VALUES ('$json')";
      $query2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')";
      $db_conn->exec($query);
      $db_conn->exec($query2);
      echo "New record created successfully";
}
catch(PDOException $e)
{
      echo $e->getMessage();
}

$db_conn = null;
?>