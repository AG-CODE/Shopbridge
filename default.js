$(document).ready(function(){	
 
//Include into a page using ajax
$('.test').on('click',function(){
    var id = $(this).attr('id');
       
    $.ajax({
        method:"post",
        url:id+".php",
        success:function(response){
            $('#newData').empty().append(response);
            
        }
    });
});

$(document).on('click','.editdata',function(){
    
    var ID = $(this).attr('id');
    $.ajax({
        method:"post",
        data:{ID:ID},
        url:"fetch.php",
        success:function(response){
            data = JSON.parse(response);
            $('#ID').val(data.ID);
            $('#CustName').val(data.CustName);
            $('#orderdate').val(data.orderdate);
            $('#item').val(data.item);
            $('#thickness').val(data.thickness);
            $('#size').val(data.size);
            $('#quantity').val(data.quantity);
            $('#CustID').val(data.CustID);
            $('#OrderID').val(data.OrderID);
            $('#editmodal').modal('show');
        }
    });
});  
  
  
  
    
$('#CustName').on('change',function(){
        var CustID=$(this).val();
        if(CustID){
            $.ajax({
                type:'POST',
                url:'customerreportdata.php',
                data:'CustID='+CustID,
                success:function(html){
                    $('#orderdate').html(html);
                    $('#item').html('<option value="">Select orderdate first</option>');
                }
            });
        }else{
            $('#orderdate').html('<option value="">Select Customer first</option>');
            $('#item').html('<option value="">Select orderdate first</option>');
        }
    });
    
    $('#orderdate').on('change',function(){
        var OrderID=$(this).val();
        if(OrderID){
            $.ajax({
                type:'POST',
                url:'customerreportdata.php',
                data:'OrderID='+OrderID,
                success:function(html){
                    $('#item').html(html);
                }
            });
        }else{
            $('#item').html('<option value="">Select orderdate first</option>');
        }
    });


});

function myFunction(el) {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
}

    
