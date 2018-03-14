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
      $query = "SELECT JSONdata FROM dataBLOB WHERE id = ?";
      $sql = $db_conn->prepare($query);
      
      // Bind value from form
      $sql->bindParam(1, $dataID, PDO::PARAM_INT);
      $sql->execute();
      $startTime = microtime(true);
      
      // Display results
      while($row = $sql->fetch()) {
       $endTime = microtime(true);
       $json = $row['JSONdata'];
       $elapsed = $endTime - $startTime;
       echo "Execution time : $elapsed seconds<br>";
       echo $json;
       //file_put_contents('time.xls', "$dataID:$elapsed\n", FILE_APPEND);
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