<?php
	include 'connection.php';
	if(isset($_REQUEST['ID']))  
 {
        $CustID=$_REQUEST['CustID'];
        $OrderID=$_REQUEST['OrderID'];
        $ID=$_REQUEST['ID'];
        $CustName = $_REQUEST['CustName'];
        $orderdate = $_REQUEST['orderdate'];
        $item = $_REQUEST['item'];
        $thickness = $_REQUEST['thickness'];
        $size = $_REQUEST['size'];
        $quantity = $_REQUEST['quantity'];
        $sql = "Select * FROM product 
                INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) 
                INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID
                WHERE (orderitem.ID=$ID)";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $CustIDold = $row['CustID'];
        $OrderIDold = $row['OrderID'];
        $IDold = $row['ID'];
        $CustNameold = $row['CustName'];
        $orderdateold = $row['orderdate'];
        $itemold = $row['item'];
        $thicknessold = $row['thickness'];
        $sizeold = $row['size'];
        $quantityold = $row['quantity'];
        
	$sql1 = "UPDATE product INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID SET customer.CustName = '$CustName', custorder.orderdate = '$orderdate', orderitem.item = '$item', orderitem.thickness = '$thickness', orderitem.size = '$size', orderitem.quantity = $quantity
                WHERE (customer.CustID=$CustID) AND (custorder.OrderID=$OrderID) AND (orderitem.ID=$ID)";

        $sql2 = "UPDATE product INNER JOIN orderitem ON (product.item = orderitem.item) AND (product.thickness = orderitem.thickness) AND (product.size = orderitem.size) 
                SET orderitem.ProductID = product.ProductID WHERE (orderitem.ID=$ID)";
	$result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
}
?>