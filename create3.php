<?php include('db.php');

// Insert data into the database
if (isset($_POST['submit'])) {
    $Activities= $_POST['activities'];
    $Group_Individual= $_POST['group_individual'];
    $Time= $_POST['time'];

    
    $sql = "INSERT INTO list (Activities, Group_Individual, time) VALUES ('$Activities', '$Group_Individual', '$Time')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view3.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style/style.css">
    <title></title>

</head>
<body>


<center><h2>LIST</h2></center>
    <center><form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Activities:<br>
      <input type="text" name="activities"><br>
      Group/Individual:<br>
      <input type="text" name="group_individual"><br>
      Time:<br>
      <input type="text" name="time"><br>
       <input type="submit" name="submit" value="Submit">
      <a href="view2.php">BACK </a></center> 
<?php

?>

<style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  background: lightpink;
}  

</body>
</html>
