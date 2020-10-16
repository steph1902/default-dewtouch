
<div class="row-fluid">
	<table class="table table-bordered" id="table_records">
		<thead>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Ref_No</th>
				<th>Member_Name</th>

				<th>Member_No</th>
				<th>Member_Pay_Type</th>
				<th>Member_Company</th>
				<th>Payment_By</th>

				<th>Batch_No</th>
				<th>Receipt_No</th>
				<th>Cheque_No</th>
				<th>Payment_Description</th>

				<th>Renewal_Year</th>
				<th>subtotal</th>
				<th>totaltax</th>
				<th>total</th>



				
				<!-- <th>NAME</th>	 -->
			</tr>
		</thead>
		<tbody>
			<?php foreach($migrations as $migration):?>
			<tr>
				<td><?php echo $migration['Migration']['id']?></td>
				<td><?php echo $migration['Migration']['Date']?></td>
				<td><?php echo $migration['Migration']['Ref_No']?></td>
				<td><?php echo $migration['Migration']['Member_Name']?></td>
				
				<td><?php echo $migration['Migration']['Member_No']?></td>
				<td><?php echo $migration['Migration']['Member_Pay_Type']?></td>
				<td><?php echo $migration['Migration']['Member_Company']?></td>
				<td><?php echo $migration['Migration']['Payment_By']?></td>

				<td><?php echo $migration['Migration']['Batch_No']?></td>
				<td><?php echo $migration['Migration']['Receipt_No']?></td>
				<td><?php echo $migration['Migration']['Cheque_No']?></td>
				<td><?php echo $migration['Migration']['Payment_Description']?></td>

				<td><?php echo $migration['Migration']['Renewal_Year']?></td>
				<td><?php echo $migration['Migration']['subtotal']?></td>
				<td><?php echo $migration['Migration']['totaltax']?></td>
				<td><?php echo $migration['Migration']['total']?></td>
			</tr>	
			<?php endforeach;?>
		</tbody>
	</table>
</div>






<?php $this->start('script_own')?>
<script>
$(document).ready(function(){
	$("#table_records").dataTable({
		processing: true,
		serverSide: true,
	});
})
</script>
<?php $this->end()?>

