<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?php echo base_url('Vaccine/add_vaccine')?>" class="btn btn-primary">Add Vaccination Record</a>
	</div>

	<div class="card" style="margin-bottom: 120px; width: 80%">
		
		<div class="card-header">
			Vaccination Record
	</div>



	<div class="card-body">
		
		<table class="table table-bordered table-striped">
			<tr>
				<th>Vaccination Dose</th>
				<th>Status</th>
				<th>Date</th>
				<th>Vaccine Name</th>
				<th>Place</th>
				<th>Batch No.</th>
				<th>Action</th>
			
			</tr>
			<?php $no=1; foreach($vaccine as $v): ?>
			<tr>
				<td><?php echo $no++ ?>
				<td><?php echo $v->status ?></td>
				<td><?php echo $v->date ?></td>
				<td><?php echo $v->vaccineName ?></td>
				<td><?php echo $v->place ?></td>
				<td><?php echo $v->batch ?></td>
				<td>
				
			
				<a href="<?php echo base_url('vaccine/delete_vaccine/').$v->id_vaccine ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
				
				</td>
				
			</tr>

		<?php endforeach; ?>
		</table>
	</div>
</div>