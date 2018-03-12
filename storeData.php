<?php
try {
      $db_conn = new PDO('mysql:host=localhost;dbname=experiment', 'root', '1234');
      $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $json = $_POST['json'];
      $sql = "INSERT INTO dataBLOB (JSONdata) VALUES ('$json')";
      $db_conn->exec($sql);
      echo "New record created successfully";
}
catch(PDOException $e)
{
      echo $sql . "<br>" . $e->getMessage();
}

$db_conn = null;
?>