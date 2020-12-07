<?php
include 'connection.php';
if(isset($_REQUEST["ID"]))
 {
 $query = "SELECT OrderID FROM orderitem WHERE ID = '".$_REQUEST["ID"]."'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $OrderID = $row['OrderID'];
 $query4 = "SELECT CustID FROM custorder WHERE OrderID = $OrderID";
 $result4 = mysqli_query($conn, $query4);
 $row = mysqli_fetch_array($result4);
 $CustID = $row['CustID'];
 $query1 = "SELECT * FROM orderitem WHERE OrderID = $OrderID";
 $result1 = mysqli_query($conn, $query1);
 $rows = mysqli_num_rows($result1);
 if($rows > 1){
 $query2 = "DELETE FROM orderitem WHERE ID = '".$_REQUEST["ID"]."'";
 $result2 = mysqli_query($conn, $query2);
 if($result2)
 {
  echo 'Data Deleted';
 }
 }
 if($rows  == 1){
    $query5 = "DELETE FROM orderitem WHERE ID = '".$_REQUEST["ID"]."'";
    $result5 = mysqli_query($conn, $query5);
    $query6 = "DELETE FROM custorder WHERE OrderID = $OrderID";
    $result6 = mysqli_query($conn, $query6);
    $query7 = "DELETE FROM customer WHERE CustID = $CustID";
    $result7 = mysqli_query($conn, $query7);
   if($result7)
    {
        echo 'All of the Data Deleted';
    }  
 }
 
}
?>