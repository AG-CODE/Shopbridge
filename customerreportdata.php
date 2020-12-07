<?php
include 'connection.php';

if(!empty($_REQUEST["CustID"])){
    //Fetch order date based on Customer ID
    $query = "SELECT * from custorder WHERE CustID=".$_REQUEST['CustID']." ORDER By orderdate ASC";
    $result =  $conn->query($query);
    
    //Generate HTML of orderdate options list
    if($result->num_rows > 0){
        echo '<option value="">Select orderdate</option>';
        while($row = $result -> fetch_assoc()){
            //passing order id 
            echo '<option value="'.$row['OrderID'].'">'.$row['orderdate'].'</option>';
        }
    }else{
        echo '<option value="">Orderdate not Available</option>';
    }
} elseif(!empty($_REQUEST["OrderID"])){
    //Fetch item data based or orderdate 
    $query = "SELECT Distinct item from orderitem WHERE OrderID=".$_REQUEST['OrderID']." ORDER By item ASC";
    $result =  $conn->query($query);
    //Generate HTML of distinct item list
    if($result->num_rows > 0){
       echo '<option value="">Select item</option>';
        while($row = $result -> fetch_assoc()){
            //passing item name value
            echo '<option value="'.$row['item'].'">'.$row['item'].'</option>';
        }
    }else{
        echo '<option value="">item not Available</option>';
    } 
}
?>