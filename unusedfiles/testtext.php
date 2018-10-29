<input type='text' Id='txt_1_1' onfocusout="getBoxes()"  onmouseout="getBoxes()"  name='txt' class="input-small">

<input type='text' Id='txt_2_1' onfocusout="getBoxes()"  onmouseout="getBoxes()"  name='txt' class="input-small">

<input type='text' Id='txt_1_3' onfocusout="getBoxes()"  onmouseout="getBoxes()"  name='txt' class="input-small">

<input type='text' Id='txt_1_4'  onfocusout="getBoxes()"  onmouseout="getBoxes()"  name='txt' class="input-small">

<select class='input-small'>
</select>
<input type="button" onclick="getBoxes();" />

<div name='progressbar' class='progress-bar'>sajdsdsskjfkasfasjfksjfksj<br>sdasdhsjahjfhsja</div>
    
	<script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        function getBoxes() {
            var boxes = $('.input-small').filter(function() { return $(this).val(); });
			
			var fbox=boxes.length;
			var tbox=$('.input-small').length;
			//var tbox=totalboxes.length;
	
            //$('[name=progressbar]').html(fbox*100/tbox + "% complete");
			
			$('[name=progressbar]').css('width',fbox*100/tbox + '%');
        }
    </script>
	
	