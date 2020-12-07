<?php
include 'connection.php';
$request=$_REQUEST;
$col =array(
    0 => 'orderitem.ID',
    1 => 'customer.CustID',
    2 => 'customer.CustName',
    3 => 'custorder.orderdate',
    4 => 'orderitem.item',
    5 => 'orderitem.thickness',
    6 => 'orderitem.size',
    7 => 'orderitem.quantity'
);  //create column like table in database
 
$sql ='SELECT orderitem.ID,customer.CustID,customer.CustName,custorder.orderdate,orderitem.item,orderitem.thickness,orderitem.size,orderitem.quantity FROM product 
INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) 
INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID';
$query=mysqli_query($conn,$sql);
 
$totalData=mysqli_num_rows($query);
 
$totalFilter=$totalData;
 
//Search
$sql ='SELECT orderitem.ID,customer.CustID,customer.CustName,custorder.orderdate,orderitem.item,orderitem.thickness,orderitem.size,orderitem.quantity FROM product 
INNER JOIN ((customer INNER JOIN custorder ON customer.CustID = custorder.CustID) 
INNER JOIN orderitem ON custorder.OrderID = orderitem.OrderID) ON product.ProductID = orderitem.ProductID WHERE 1=1';

if(!empty($request['search']['value'])){
    $sql.=" AND (orderitem.ID Like '".$request['search']['value']."%' ";
    $sql.=" OR customer.CustID Like '".$request['search']['value']."%' ";
    $sql.=" OR customer.CustName Like '".$request['search']['value']."%' ";
    $sql.=" OR custorder.orderdate Like '".$request['search']['value']."%' ";
    $sql.=" OR orderitem.item Like '".$request['search']['value']."%' ";
    $sql.=" OR orderitem.thickness Like '".$request['search']['value']."%' ";
    $sql.=" OR orderitem.size Like '".$request['search']['value']."%' ";
    $sql.=" OR orderitem.quantity Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($conn,$sql);
$totalData=mysqli_num_rows($query);
 
//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";
 
$query=mysqli_query($conn,$sql);
 
$data=array();
while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //customer id
    $subdata[]=$row[2]; //name
    $subdata[]=$row[3]; //orderdate
    $subdata[]=$row[4]; //item
    $subdata[]=$row[5]; //thickness
    $subdata[]=$row[6]; //size
    $subdata[]=$row[7]; //quantity
    //create event on click in button edit in cell datatable for display modal dialog ;$row[0] is id in table on database
    $subdata[]='<button type="button" class="btn btn-primary btn-xs editdata" data-toggle="modal" data-target="#myModal" id="'.$row[0].'">Edit</button>
                <button type="button" class="btn btn-danger btn-xs deletedata" id="'.$row[0].'">Delete</button>';  
    $data[]=$subdata;
}
 
$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
 
echo json_encode($json_data);
?>






