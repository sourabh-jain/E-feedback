
     		
<script>
setInterval("ajaxcall()",10000);
function callme()
{
	setInterval("ajaxcall()",10000);
}


</script>


<script>
function ajaxcall()
{

//alert("hi i am calling u ");
$.post( "settimestamp.php", 
{
	username: "<?php echo $_SESSION['use']; ?>" 
	
	
}


)
  .done(function( data ) {
   
	//$("#writeme").html(data);
  });
}
  </script>
