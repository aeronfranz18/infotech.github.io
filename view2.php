<?php 
include('db.php');

// Retrieve data from the database
$sql = "SELECT * FROM venue ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> VENUE DATA  </h1> ";

     echo "<a href='create2.php'>CREATE USER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> ID </th> 
    <th> Entrance fee </th> 
    <th> Room number </th> 
    <th> Cottage </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['ID'];                

         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["Entrance_fee"]. "</td> 
         <td> " . $row["room_number"]. "</td> 
         <td>" . $row["cottage"]. "</td>";

        echo "<td><a href='update2.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete2.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            background: yellow;
}
table {
  border: 5px dotted #B36C6C;
}

</style>


