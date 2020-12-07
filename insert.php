<?php
include 'connection.php';
if(!null==(filter_input(INPUT_POST, 'submit')))
{
    $CustName = $_REQUEST['CustName'];
    $orderdate = $_REQUEST['orderdate'];
    $item = $_REQUEST['item'];
    $thickness = $_REQUEST['thickness'];
    $size = $_REQUEST['size'];
    $quantity = $_REQUEST['quantity'];
 // Insertion to customer table   
    
         $sql = "insert into customer(CustName) Values ('".$CustName."')";
        
         $result = mysqli_query($conn,$sql);
    // retrieve last customer id
    $CustID = $conn->insert_id;
    //echo $CustID;die;
  $result = '';

// insertion to CustOrder Table
    $sql2 = "INSERT INTO custorder (CustID, orderdate) VALUES ('".$CustID."', '".$orderdate."')"; 
    $result2 = mysqli_query($conn,$sql2);
    //retrieve last order id
    $OrderID = $conn->insert_id;
    //mysqli_free_result($result2);
// insertion to Orderitem table
    
    for($i=0;$i<count($_REQUEST['thickness']);$i++){
        $sql3 = "INSERT INTO orderitem (OrderID,item, thickness, size, quantity) VALUES(".$OrderID.",'".$_REQUEST['item'][$i]."','".$_REQUEST['thickness'][$i]."','".$_REQUEST['size'][$i]."',".$_REQUEST['quantity'][$i].")";
        $result3 = mysqli_query($conn,$sql3);
    }
    $sql4= "UPDATE product INNER JOIN orderitem ON (product.item = orderitem.item) AND (product.thickness = orderitem.thickness) AND (product.size = orderitem.size) 
             SET orderitem.ProductID = product.ProductID
            WHERE OrderID=".$OrderID."";

        $result4 = mysqli_query($conn,$sql4);
    
    if($result4){
        echo '<script type="text/javascript">'; 
        echo 'alert("Data Submitted Successfully");'; 
        echo 'window.location = "index.php";';
        echo '</script>';
    } 
    else{
   echo "ERROR: Could not able to execute. " . mysqli_error($conn);
        }
}
$conn->close();
?>