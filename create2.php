<?php include('db.php');

// Insert data into the database
if (isset($_POST['submit'])) {
    $Entrance_fee = $_POST['Entrance_fee'];
    $room_number = $_POST['room_number']; 
    $cottage = $_POST['cottage'];
    
    
    $sql = "INSERT INTO venue (entrance_fee, room_number, cottage) VALUES ('$entrance_fee', '$room_number', '$cottage')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view2.php';</script>";
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


<center><h2>VENUE</h2></center>
    <center><form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     
      Entrance Fee:<br>
      <input type="text" name="entrance_fee"><br>
      Room Number:<br>
      <input type="text" name="room_number"><br>
      Cottage:<br>
      <input type="text" name="cottage"><br>
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
  background: yellow;
}  

</body>
</html>
