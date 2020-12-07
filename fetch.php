<?php  
 include 'connection.php';

 if(isset($_REQUEST['ID']))  
 {  
   $ID=$_REQUEST['ID'];
      $query = "SELECT customer.CustID,CustName,custorder.OrderID,orderdate,orderitem.ID,orderitem.item,orderitem.thickness,orderitem.size,orderitem.quantity FROM product 
                INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) 
                INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID
                WHERE orderitem.ID =$ID";
      
    $result = mysqli_query($conn, $query);  
    $row = $result->fetch_assoc();
    
    echo json_encode($row); 
 
 } 
 ?>