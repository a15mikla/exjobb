<html>
  <head>
    <title>MySQL Experiment</title>
  </head>
  <body>
    <form action="getBLOB.php" method="post">
      <label>Enter data ID:</label>
      <input id="inputData" name="dataID">
      <br>
      <input id="getData" type="submit" value="Enter">
    </form>
    <?php
      // Connect to database
      try {
       $db_conn = new PDO('mysql:host=localhost;dbname=experiment',
       'root', '1234');
      } catch (PDOException $e) {
       echo "Could not connect to database";
      }
      
      // Store value from form in a variable
      $dataID = isset($_POST['dataID']) ? $_POST['dataID'] : false;
      
      // Query 
      $query = "SELECT JSONdata FROM dataJSON WHERE id = ?";
      $sql = $db_conn->prepare($query);
      
      // Bind value from form
      $sql->bindParam(1, $dataID, PDO::PARAM_INT);

      // Execute query and benchmark
      $startTime = microtime(true);
      $sql->execute();
      $endTime = microtime(true);
      $elapsedTime = $endTime - $startTime;
      file_put_contents('timeJSON.xls', "$dataID:$elapsedTime\n", FILE_APPEND);
      
      // Display results
      while($row = $sql->fetch()) {
       $json = $row['JSONdata'];
       echo "Execution time : $elapsedTime seconds<br>";
       echo $json;
      }
      echo "<script>";
      echo "document.getElementById('inputData').setAttribute('value',".$dataID.");";
      echo "</script>";
      ?>
  </body>

  <script type="text/javascript">
    // Focus on input
      var input = document.getElementById('inputData');
      input.focus();
      input.select();
  </script>
</html>