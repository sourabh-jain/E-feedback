<html>
<head>
<script type="text/javascript">
function toggle(a) {
 if( document.getElementById(a).style.display=='none' ){
   document.getElementById(a).style.display = '';
 }else{
   document.getElementById(a).style.display = 'none';
 }
}
</script>
</head>
<body>

<span onClick="toggle('hidethis');">toggle</span><br /><br />

<table border="1">
<tr>
<td>Always visible</td>
</tr>
<tr id="hidethis">
<td>Hide this</td>
</tr>
<tr>
<td>Always visible</td>
</tr>
</table>

</body>
</html>