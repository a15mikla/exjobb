<?php
try {
      $db_conn = new PDO('mysql:host=localhost;dbname=experiment', 'root', '1234');
      $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $json = $_POST['json'];

      // Uncomment the code according to the datatype you want to store

      /* Storing TinyBLOB
      $query = "INSERT INTO dataTinyBLOB (JSONdata) VALUES ('$json')";
      $query2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')"; */  

      /* Storing BLOB
      $query = "INSERT INTO dataBLOB (JSONdata) VALUES ('$json')";
      $query2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')"; */

       /* Storing MediumBLOB
      $query = "INSERT INTO dataMediumBLOB (JSONdata) VALUES ('$json')";
      $query2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')"; */

       /* Storing LongBLOB
      $query = "INSERT INTO dataLongBLOB (JSONdata) VALUES ('$json')";
      $query2 = "INSERT INTO dataJSON (JSONdata) VALUES ('$json')"; */   

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
