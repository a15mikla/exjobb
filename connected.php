<?php

// check if the form has been submitted and display the results
if (isset($_POST['dataID'])) {

  include('db_connect.php');
  $conn = OpenCon();
  // escape the post data to prevent injection attacks
  $dataID = mysqli_real_escape_string($conn, $_POST['dataID']);

  $sql = "SELECT JSONdata FROM dataBLOB WHERE id = '$dataID'"; 
  $result=mysqli_query($conn, $sql);

  // check if the query returned a result
  if (!$result) {
      echo 'There are no results for your search';
  } else {
    // result to output the table 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      echo $row['JSONdata'];
    }
  }

  mysqli_close($conn);
} // end submitted
else
{
// not submitted to output the form
?>
<form action="connected.php" method="post">
  <label>Enter data ID:</label>
  <input name="dataID" type="number" placeholder="Type Here">
  <br>
  <input type="submit" value="Enter">
</form>
<?php
} // end not submitted
?>