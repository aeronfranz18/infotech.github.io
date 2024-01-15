<?php include('db.php');

// Insert data into the database
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name']; 
    $middle_initial = $_POST['middle_initial'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $sql = "INSERT INTO employees (first_name, last_name, middle_initial, age, phone, email, address) VALUES ('$first_name', '$last_name', '$middle_initial', '$age', '$phone', '$email', '$address')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view.php';</script>";
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


    <h2>EMPLOYEES INFORMATION</h2>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      First Name:<br>
      <input type="text" name="first_name"><br>
      Last Name:<br>
      <input type="text" name="last_name"><br>
      Middle Initial:<br>
      <input type="text" name="middle_initial"><br>
      Age:<br>
      <input type="text" name="age"><br>
      Phone:<br>
      <input type="text" name="phone"><br>
      Email:<br>
      <input type="text" name="email"><br>
      Address:<br>
     <input type="text" name="address"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view.php">BACK </a> 
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  Background: lightblue;
}  

</body>
</html>
