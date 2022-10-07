<!--Ajax cdn included -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    function submitData(action){
        $(document).ready(
            function(){
            var data={
                action:action,
                id:$("#id").val(),
                empid:$("#empid").val(),
                name:$("#name").val(),
                email:$("#email").val(),
                password:$("#password").val(),
                role:$('#role').val(),
                phone:$("#phone").val(),
                address:$("#address").val(),                                     
            };

        $.ajax({
            url:'function.php',
            type:'post',
            data:data,
            success:function(response){
                alert(response);
                if(response=="Deleted Sucessfully"){
                    $("#"+action).css("display","none");
                }
            }
        });
        });
    }
     
</script>