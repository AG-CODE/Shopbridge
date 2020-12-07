<?php
include 'connection.php';
$sql = "SELECT  DISTINCT size FROM product order by size";
$sql2 = "SELECT DISTINCT thickness FROM product order by thickness";
$result = $conn->query($sql); // size result
$result2 = $conn->query($sql2); // thickness result
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Customer Report</title>
 </head>
<body>
    <div class="container-fluid" style="font-family:Helvetica, Arial, sans-serif">
    <div class="row">
                    <div class="form-group col-xs-2">
                        <label for="choosecustomer">Customer:</label>
                        <?php
                        //Fetching all customer names
                        $query='select * FROM customer order by CustID';
                        $output = $conn->query($query);
                        ?>
                            <select class="form-control" name="CustName" id="CustName">
				<option value="">Select Customer, Customer ID</option>
                                <?php
                                if($output -> num_rows >0){
                                    while($row = $output->fetch_assoc()){
                                        echo '<option value="'.$row['CustID'].'" '.(($row['CustID'] == $_REQUEST['CustID'])?'selected="selected"':'').'>'.$row['CustName'].','.$row['CustID'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">Customer not Available</option>';
                                }
                                ?>
                            </select>
                    </div>
        
                    <div class="form-group col-xs-2">
			<label for="choosedate">Order Date:</label>
                            <select class="form-control" name= "orderdate" id="orderdate">
				<option value="">Select orderdate</option>
                            </select>
                    </div>
        
                    <div class="form-group col-xs-2">
                        <label for="chooseitem">Item:</label>
                            <select class="form-control" name= "item" id="item">
                                <option value="">Select item</option>
                            </select>
                    </div>
                    
		</div> 
        </div> 
    <br/>
<?php
$i=0;
if($result->num_rows>0){
    while($row1 = $result->fetch_assoc()){
        $sizearray[$i]= $row1['size']; // array of size
        $i++;
    }
}
else{
    echo "No size result found";
}
?>
<?php if($_POST){?>
<div class="container" id="div1">
    <table class="table table-bordered" border='2'>
        <tr>
                <th>
                    Customer Name
                </th>
                <th>
                  <?php  
                  $ID = $_REQUEST['CustID'];
                  $Q = "SELECT CustName FROM customer WHERE CustID =$ID";
                  $R = mysqli_query($conn, $Q);  
                  $row = $R->fetch_assoc();
                  echo $row['CustName'];
                  ?>
                </th>
                <th>
                    Order Date
                </th>
                <th>
                  <?php  
                  $ID = $_REQUEST['OrderID'];
                  $Q = "SELECT orderdate FROM custorder WHERE OrderID =$ID";
                  $R = mysqli_query($conn, $Q);  
                  $row = $R->fetch_assoc();
                  echo $row['orderdate'];
                  ?>
                </th>
                <th>
                    Item
                </th>
                <th>
                  <?php
                  echo  $_REQUEST['item'];
                  ?>
                </th>    
            </tr>
    </table>
    <table class="table table-bordered" border='2'>
        <thead>
            <tr>

                <th>Thickness\Size</th>
                <?php for($i=0;$i<sizeof($sizearray);$i++)
                { 
                ?>   
                <th> 
                    <?php echo $sizearray[$i]; // printing each size ?>  
                </th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
<?php
$j=0;
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        $thicknessarray[$j]= $row2['thickness']; // array of thickness
        $j++;
    }
}
else{
    echo "No thickness result found";
}

    for($j=0,$k=0;$k<sizeof($thicknessarray);$k++)
        {  
?>
            <tr>
                <th> <?php echo $thicknessarray[$k]; // printing each thickness ?> </th>
<?php
                    for($j=0;$j<sizeof($sizearray);$j++)
                        {
?>
                            <th> 
                                <?php
                                    $quantity=0;
                                    $query = "Select quantity  FROM product 
                                             INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) 
                                             INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID
                                              Where orderitem.thickness='$thicknessarray[$k]'
                                              AND orderitem.size='$sizearray[$j]' And customer.CustID=".$_REQUEST['CustID']." And custorder.OrderID=".$_REQUEST['OrderID']." And orderitem.item='".$_REQUEST['item']."'"; 
                                    //echo $query;die;
                                    $result3 =  $conn->query($query);
                                    //$row = mysqli_fetch_array($result3);
                                    $row = $result3 -> fetch_assoc();
                                    $quantity = $row['quantity'];
                                    if($quantity){
                                        echo $quantity; // printing corresponding size thickness quantity 
                                    }else{
                                        echo 0;
                                    }
                                    
                                ?> 
                            </th> 
<?php
                        }
?>
            </tr>
<?php
        }
$conn->close();
?>
        </tbody>
</table>
 <?php }?>
 </div> 
    <div class="container-fluid" style="font-family:Helvetica, Arial, sans-serif">
        <div class="row">
                    <div class="form-group col-xs-2">
        <a type="button" class="btn btn-danger" href="testpdf.php">View Report</a>
    </div>
            </div>
        </div>
    <script src="js1/default.js?v=13"></script> 
    <script>
        $('#item').on('change',function(){
            var item = $('#item').val();
            var CustID = $('#CustName').val();
            var OrderID = $('#orderdate').val();
           $.ajax({
                method:"post",
                url:"customer_report.php",
                data: {item:item,CustID:CustID,OrderID:OrderID},
                success:function(response){
                    $('#newData').empty().append(response);

                }
            });
        });
    </script>
 </body>
</html>
          

    
     