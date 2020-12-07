<!DOCTYPE html>
<html>
<head>
<title> Customers Orders Details</title>  
</head>
<body>
<div class="container" id="div1">
<table id="example" class="table table-bordered table-dark display" border='2' >
<thead>
    <tr>
        <th scope="col">Item No</th>
        <th scope="col">Customer No</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Order Date</th>
        <th scope="col">Item</th>
        <th scope="col">Thickness(in mm)</th>
        <th scope="col">Size (in ft)</th>
        <th scope="col">Quantity</th>
        <th scope="col"> Action </th>
    </tr>
</thead>
</table> 
</div>   
<!-- Edit Modal -->
 <div id="editmodal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header"> 
                     <h4 class="modal-title" id="myModalLabel">Edit Customer Data</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                </div>  
            <form action="updateform" method="POST"> 
                <div class="modal-body">
                <input type="hidden" name="ID" id="ID">
                <input type="hidden" name="CustID" id="CustID">
                <input type="hidden" name="OrderID" id="OrderID">
                    <div class="form-group">
                        <label>Customer Name </label>
                        <input type="text" name="CustName" id="CustName" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>orderdate </label>
                        <input type="Date" name="orderdate" id="orderdate" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Item </label>
                        <select class="form-control" name="item" id="item">
				<option value="">Select</option>
				<option value="Com">Com</option>
				<option value="MR">MR</option>
                                <option value="PF">PF</option>
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Thickness </label>
                        <select class="form-control" name="thickness" id="thickness">
                            <option value="">Select</option>
                                <option value="1819MM">1819MM</option>
                                <option value="15/16MM">15/16MM</option>
                                <option value="12MM">12MM</option>
                                <option value="8/9MM">8/9MM</option>
                                <option value="6MM(7)">6MM(7)</option>
                                <option value="6M(5)">6M (5)</option>
                                <option value="4MM(5)">4MM(5)</option>
                                <option value="4MM(3)">4MM(3)</option>
                                <option value="B/B">B/B</option>
                                <option value="25MM B/B">25MM B/B</option>
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Size </label>
                        <select class="form-control" name="size" id="size">
                            <option value="">Select</option>
				<option value="8 x 4">8 x 4</option>
				<option value="7 x 4">7 x 4</option>
				<option value="6 x 4">6 x 4</option>
				<option value="5 x 4">5 x 4</option>
				<option value="8 x 3">8 x 3</option>
				<option value="7 x 3">7 x 3</option>
				<option value="6 x 3">6 x 3</option>
				<option value="5 x 3">5 x 3</option>
				<option value="8 x 2.5">8 x 2&frac12</option>
				<option value="7 x 2.5">7 x 2&frac12</option>
				<option value="6 x 2.5">6 x 2&frac12</option>
				<option value="5 x 2.5">5 x 2&frac12</option>
                            </select>
                    </div>
                    
                    <div class="form-group">
                        <label>quantity </label>
                        <input type="number" name="quantity" id="quantity" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update_data" id="update_data" class="btn btn-primary" data-dismiss="modal">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal ends--> 

 <script>
    
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"retrieve.php",
                    type:"post",
                    data: {}
                },
                'columnDefs': [ {
                   'targets': [8], /* column index */
                   'orderable': false, /* true or false */
                }]
            });
        });
        
        //update data 
       $(document).on("click", "#update_data", function() { 
		$.ajax({
			url: "update.php",
			type: "POST",
			cache: false,
			data:{
				CustID: $('#CustID').val(),
                                ID: $('#ID').val(),
                                OrderID: $('#OrderID').val(),
				CustName: $('#CustName').val(),
				orderdate: $('#orderdate').val(),
				item: $('#item').val(),
				thickness: $('#thickness').val(),
                                size: $('#size').val(),
                                quantity: $('#quantity').val(),
			},
			success: function(response){
                                $('#editmodal').modal().hide();
				alert('Data updated successfully !');
				location.reload();					
				}
			});
	}); 
        
        

$(document).on('click', '.deletedata', function(){
   var ID = $(this).attr("ID");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"deletedata.php",
     method:"POST",
     data:{ID:ID},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#example').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
  
   function fetch_data(){
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"retrieve.php",
                    type:"post",
                    data: {}
                },
                'columnDefs': [ {
                   'targets': [8], /* column index */
                   'orderable': false, /* true or false */
                }]
            });
        }

    </script>
    
    <script src="js1/default.js"></script>   
</body>
</html>