<?php
try {
      $db_conn = new PDO('mysql:host=localhost;dbname=experiment', 'root', '1234');
      $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $json = $_POST['json'];
      $sql = "INSERT INTO dataBLOB (JSONdata) VALUES ('$json')";
      $sql2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')";
      $db_conn->exec($sql);
      $db_conn->exec($sql2);
      echo "New record created successfully";
}
catch(PDOException $e)
{
      echo $sql . "<br>" . $e->getMessage();
}

$db_conn = null;
?>