<input type='text' Id='txt_1_1' onfocusout="alert('')" onmouseout="getBoxes()" name='txt' class="input-small">

<input type='text' Id='txt_2_1' onmouseout="getBoxes()" name='txt' class="input-small">

<input type='text' Id='txt_1_3' onmouseout="getBoxes()" name='txt' class="input-small">

<input type='text' Id='txt_1_4'  onmouseout="getBoxes()" name='txt' class="input-small">

<select class='input-small'>
</select>
<input type="button" onclick="getBoxes();" />

<div id='showinme'>a</div>
    
	<script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        function getBoxes() {
            var boxes = $('.input-small').filter(function() { return $(this).val(); });
			
			var fbox=boxes.length;
			var tbox=$('.input-small').length;
			//var tbox=totalboxes.length;
	
            $('#showinme').html(fbox*100/tbox + "% complete");
        }
    </script>
	
	