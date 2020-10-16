<div class="alert  ">
	<button class="close" data-dismiss="alert"></button>
Question: Advanced Input Field</div>

<p>
	1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.

</p>


<p>
	2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field

	<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]

</p>

<!-- x qty uom unit price amt -->

<div class="alert alert-success">
	<button class="close" data-dismiss="alert"></button>
The table you start with</div>

<table class="table table-striped table-bordered table-hover">
<<<<<<< Updated upstream
<thead>
<th><span id="add_item_button" class="btn mini green addbutton" onclick="addToObj=false">
											<i class="icon-plus"></i></span></th>
<th>Description</th>
<th>Quantity</th>
<th>UOM</th>
<th>Unit Price</th>
<th>Amt</th>
</thead>

<tbody>
	<tr>
	<td> <a href=""> <b>x</b> </a>  </td>
	<td><textarea name="data[1][description]" class="m-wrap description required" rows="2" ></textarea></td>
	<td><input name="data[1][quantity]" class=""></td>
	<td><input name="data[1][unit_price]"  class=""></td>
	
</tr>

</tbody>

</table>


<p></p>
<div class="alert alert-info ">
<button class="close" data-dismiss="alert"></button>
Video Instruction</div>

<p style="text-align:left;">
<video width="78%"   controls>
  <source src="<?php echo Router::url("/video/q3_2.mov") ?>">
Your browser does not support the video tag.
</video>
</p>
=======
	<thead>
		<th><span id="add_item_button" class="btn mini green addbutton" onclick="addToObj=false">
			<i class="icon-plus"></i></span></th>
			<th>Description</th>
			<th>Quantity</th>
			<th>UOM</th>	
		</thead>

		<tbody class="table-row">
			<tr class="tr-class">
				<td> <a href="#" class="remove-tr" id="1"> <b>x</b>  </a> </td>
				<td class="click-textarea"> <span class="desc"></span> </td>
				<td class="click-input-qty"> <span class="qty"></span> </td>
				<td class="click-input-uom"> <span class="uom"></span> </td>
			</tr>
		</tbody>

	</table>


	<p></p>
	<div class="alert alert-info ">
		<button class="close" data-dismiss="alert"></button>
	Video Instruction</div>
>>>>>>> Stashed changes

	<p style="text-align:left;">
		<video width="78%"   controls>
			<source src="<?php echo Router::url("/video/q3_2.mov") ?>">
				Your browser does not support the video tag.
			</video>
		</p>





		<?php $this->start('script_own');?>
		<script>

			// var desc_flag = 0;
			var table_row = "<tr><td> <a href='#' class='remove-tr'> <b>x</b>  </a> </td	><td class='click-textarea'> </td><td class='click-input-qty'></td><td class='click-input-uom'></td></tr>";
			var x = 0;

<<<<<<< Updated upstream
		// alert("suppose to add a new row");
=======
>>>>>>> Stashed changes
		


			$(document).ready(function()
			{

				var desc_input = $('.textarea').val();
				var qty_input = $('.qty').val();
				var uom_input = $('.uom').val();

				$("#add_item_button").click(function()
				{
					// alert("suppose to add a new row");
					$('.table-row').append(table_row);
				});


				// textarea
				$('.click-textarea').click(function()
				{
					// $('.click-textarea').replaceWith("<td><textarea class='textarea'></textarea></td>");
					$('.click-textarea').replaceWith("<textarea class='textarea'></textarea>");
				});

				$('html').focusout(function()
				{
					$('.textarea').remove(); 
					$('.qty').remove(); 
					$('.uom').remove(); 

					$('.desc').text(desc_input);
					$('.qty').text(qty_input);
					$('.uom').text(uom_input);
					console.log(desc_input);

				});

				// textfield text qty
				$('.click-input-qty').click(function()
				{
					$('.click-input-qty').replaceWith("<td><input type='text' class='qty'></td>");
				});
				// textfield text uom

				$('.click-input-uom').click(function()
				{
					$('.click-input-uom').replaceWith("<td><input type='text' class='uom'></td>");
				});

				// remove tr
				$('.remove-tr').click(function()
				{
					$('.tr-class').remove();
					// $(this).parents('table-row').remove();
					// $(this).parents(".control-group").remove();
				});





			});
		</script>
		<?php $this->end();?>

