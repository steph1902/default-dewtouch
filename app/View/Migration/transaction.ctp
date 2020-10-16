
<div class="row-fluid">
	<table class="table table-bordered" id="table_records">
		<thead>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Ref_No</th>
				<th>Payment_By</th>
				<th>Batch_No</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($migrations as $migration):?>
			<tr>
				<td><?php echo $migration['Migration']['id']?></td>
				<td><?php echo $migration['Migration']['Date']?></td>
				<td><?php echo $migration['Migration']['Ref_No']?></td>
				<td><?php echo $migration['Migration']['Payment_By']?></td>
				<td><?php echo $migration['Migration']['Batch_No']?></td>
				
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

