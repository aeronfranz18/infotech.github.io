<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $Entrance_fee = $_POST['Entrance_fee'];
    $room_number = $_POST['room_number'];
    $cottage = $_POST['cottage'];

    $sql = "UPDATE venue SET entrance_fee='$Entrance_fee', room_number='$room_number', cottage='$cottage' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view2.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}



?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<h2>VENUE</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM venue WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Entrance Fee: </h4>
  <input type="text" name="Entrance_fee" value="<?php echo $row['Entrance_fee'] ?>">
<h4>  Room number: </h4>
  <input type="text" name="room_number" value="<?php echo $row['room_number'] ?>">
<h4>  Cottage: </h4>
  <input type="text" name="cottage" value="<?php echo $row['cottage'] ?>">
<?php
 }
}  ?>
 <p> <input type="submit" name="update" value="Update User"></p> 
</form> 
    
<style type="text/css">
  
table {
  border: 5px dotted #B36C6C;
}




</style>


</style>
</body>
</html>