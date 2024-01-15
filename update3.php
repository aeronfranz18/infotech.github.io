<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $Activities = $_POST['Activities'];
    $Group_Individual = $_POST['Group_Individuals'];
    $Time = $_POST['Time'];

    $sql = "UPDATE list SET Activities='$Activities', Group_Individual='$Group_Individual', Time='$Time' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view3.php';</script>";
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
<h2>LIST</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM list WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Activities: </h4>
  <input type="text" name="entrance_fee" value="<?php echo $row['entrance_fee']?>">
<h4>  Group/Individual: </h4>
  <input type="text" name="group_individual" value="<?php echo $row['group_individual'] ?>">
<h4>  Time: </h4>
  <input type="text" name="time" value="<?php echo $row['time'] ?>">
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