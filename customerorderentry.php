<!DOCTYPE html>
<html>
 <head>
 <title> Customer Order Entry Form</title>
 </head>
<body>
<div class="container-fluid" style="font-family:Helvetica, Arial, sans-serif">
    <form style="font-family:Helvetica, Arial, sans-serif" class="form-inline" action="insert.php" method="post">
        <div>
	<h3 id="heading" style="color: #544a7d; text-align:center; font-family:Helvetica, Arial, sans-serif; letter-spacing: 1px;">  Enter Customer Order Details </h3><br/>
        <div class="well well-lg container-fluid" style="border: double;  text-align: justify; padding:6px ">
            <div class="row">
		<div class="form-group col-xs-3">
                    <label for="inputCustName">Party Name:</label>
                </div>
                <div class="form-group col-xs-3">
                    <input type="text" class="form-control" name="CustName" id="inputCustName" placeholder="CustName">
                </div>
            </div><br/>
		
            <div class="row">
		<div class="form-group col-xs-3">
                    <label for="selectorderdate">Order Date:</label>
                </div>
		<div class="form-group col-xs-3">
                    <input type="date" class="form-control" name="orderdate" id="inputorderdate" placeholder="mm/dd/yyyy">
                </div>
            </div><br/>
		
            <div id="container1">
		<div class="row">
                    <div class="form-group col-xs-2">
                        <label for="chooseitem">Item:</label>
                            <select class="form-control" name="item[]" id="chooseitem">
				<option value="">Select</option>
				<option value="Com">Com</option>
				<option value="MR">MR</option>
                                <option value="PF">PF</option>
                            </select>
                    </div>
                    <div class="form-group col-xs-2">
                        <label for="choosethickness">Thickness:</label>
                            <select class="form-control" name= "thickness[]" id="choosethickness">
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
                    <div class="form-group col-xs-2">
			<label for="choosesize">Size(ft.):</label>
                            <select class="form-control" name= "size[]" id="choosesize">
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
                    <div class="form-group col-xs-2">
                        <label for="inputquantity">Qty:</label>
                        <input type="number" class="form-control" name="quantity[]" id="inputquantity" placeholder="No. of Units">
                    </div>
                    <button type="button" target="_blank" id="add" class="btn btn-default btn-sm btn btn-success"><b>Add More</b></button>
		</div>
            </div><br/>
            <div class="row">
		<div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block" name="submit" value ="submit">SUBMIT</button> 
		</div>
		<div class="form-group col-xs-12">
                    <button type="reset" class="btn btn-default btn-block" value="reset">RESET</button> 
		</div>
            </div>
        </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(e){	
    //variables

        var maxRows= 360;
        var x = 1;
        var newrow= '<div><div class="row"><div class="form-group col-xs-2">'+
                       '<label for="chooseitem">Item:</label>'+
                                 ' <select class="form-control" name="item[]" id="childchooseitem">'+
                                       '<option value="">Select</option>'+
                                       '<option value="Com">Com</option>'+
                                       '<option value="MR">MR</option>'+
                                       '<option value="PF">PF</option>'+
                               '</select>'+
                        '</div>'+
                       '<div class="form-group col-xs-2">'+
                       '<label for="choosethickness">Thickness:</label>'+
                           ' <select class="form-control" name= "thickness[]" id="childchoosethickness">'+
                                               '<option value="">Select</option>'+
                                               '<option value="1819MM">1819MM</option>'+
                                               '<option value="15/16MM">15/16MM</option>'+
                                               '<option value="12MM">12MM</option>'+
                                               '<option value="8/9MM">8/9MM</option>'+
                                               '<option value="6MM(7)">6MM(7)</option>'+
                                               '<option value="6M(5)">6M (5)</option>'+
                                               '<option value="4MM(5)">4MM(5)</option>'+
                                               '<option value="4MM(3)">4MM(3)</option>'+
                                               '<option value="B/B">B/B</option>'+
                                               '<option value="25MM B/B">25MM B/B</option>'+
                           '</select>'+
                       '</div>'+
                       '<div class="form-group col-xs-2">'+
                               '<label for="choosesize">Size(ft.):</label>'+
                               ' <select class="form-control" name= "size[]" id="childchoosesize">'+
                                       '<option value="">Select</option>'+
                                       '<option value="8 x 4">8 x 4</option>'+
                                       '<option value="7 x 4">7 x 4</option>'+
                                       '<option value="6 x 4">6 x 4</option>'+
                                       '<option value="5 x 4">5 x 4</option>'+
                                       '<option value="8 x 3">8 x 3</option>'+
                                       '<option value="7 x 3">7 x 3</option>'+
                                       '<option value="6 x 3">6 x 3</option>'+
                                       '<option value="5 x 3">5 x 3</option>'+
                                       '<option value="8 x 2.5">8 x 2&frac12</option>'+
                                       '<option value="7 x 2.5">7 x 2&frac12</option>'+
                                       '<option value="6 x 2.5">6 x 2&frac12</option>'+
                                       '<option value="5 x 2.5">5 x 2&frac12</option>'+
                               '</select>'+
                         '</div>'+
                       '<div class="form-group col-xs-2"><label for="inputquantity">Qty:</label>'+
                   ' <input type="number" class="form-control" name="quantity[]" id="childinputquantity" placeholder="No. of Units">'+
                   '</div>'+
                               '<button type="button" target="_blank" class="btn btn-default btn-sm btn btn-danger" id="remove"><b>Remove</b></button>'+
                       '</div></div>';

       //Add rows to the form
        $("#add").click(function(e){
            if(x <= maxRows){
                $("#container1").append(newrow);
                x++;
            }
        });

       //Remove rows from the form
        $("#container1").on('click','#remove',function(e){

            $(this).parent('div').remove();
            x--;
        });
    });
</script>
</body>
</html>