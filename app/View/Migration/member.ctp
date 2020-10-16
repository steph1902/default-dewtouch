
<div class="row-fluid">
	<table class="table table-bordered" id="table_records">
		<thead>
			<tr>
				<th>ID</th>
				<th>Member_Name</th>
				<th>Member_No</th>
				<th>Member_Pay_Type</th>
				<th>Member_Company</th>
			
			</tr>
		</thead>
		<tbody>
			<?php foreach($migrations as $migration):?>
			<tr>
				<td><?php echo $migration['Migration']['id']?></td>
				<td><?php echo $migration['Migration']['Member_Name']?></td>
				
				<td><?php echo $migration['Migration']['Member_No']?></td>
				<td><?php echo $migration['Migration']['Member_Pay_Type']?></td>
				<td><?php echo $migration['Migration']['Member_Company']?></td>
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

