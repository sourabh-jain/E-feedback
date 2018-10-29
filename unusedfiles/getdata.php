<?php



$NO_OF_ROWS_TO_DISPLAY = 10; /* Default */

$LOWER_RANGE = 1;  /* Upper range of rows to view */
$UPPER_RANGE = 10; /* Lower range of rows to view */

$PFILTER1=''; /* Programme Name filter */
$PFILTER2=''; /* Programme Name filter */
$PFILTER3=''; /* Programme Name filter */
$PFILTER4=''; /* Programme Name filter */

$STATUS1='OK';
$STATUS2='PENDING';
$SORT_BY_NAME='asc';

?><html>
<head>
<script src="js/jquery.min.js"></script>

<script>
function callme()
{
	setInterval("ajaxcall()",2000);
}


</script>


<script>
function ajaxcall()
{

//alert("hi i am calling u ");
$.post( "testdata.php", 
{
	SORT_BY_NAME: "<?php echo $SORT_BY_NAME; ?>" ,
	STATUS1: "<?php echo $STATUS1; ?>",
	STATUS2: "<?php echo $STATUS2; ?>",
	
	LOWER_RANGE: "<?php echo $LOWER_RANGE; ?>",
	
	UPPER_RANGE: "<?php echo $UPPER_RANGE; ?>",
	NO_OF_ROWS_TO_DISPLAY: "<?php echo $NO_OF_ROWS_TO_DISPLAY; ?>"
	
	
}


)
  .done(function( data ) {
    //alert( "Data Loaded: " + data );
	$("#writeme").html(data);
  });
}
  </script>
</head>
<body onLoad="callme()">
<div id="writeme"></div>
</body>
</html>