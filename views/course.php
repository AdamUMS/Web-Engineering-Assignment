<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?php echo base_url('Course/add_course')?>" class="btn btn-primary">Add Course</a>
	</div>

	<div class="card" style="margin-bottom: 120px; width: 80%">
		
		<div class="card-header">
			Registered Course
	</div>


	<div class="card-body">
		
		<table class="table table-bordered table-striped">
			<tr>
				<th>Course Name</th>
				<th>Credit Hours</th>
				<th>Day</th>
				<th>Time</th>
				<th>Action</th>
			</tr>
			<?php foreach($student_course as $c): ?>
			<tr>
				
				<td><?php echo $c->course_name ?></td>
				<td><?php echo $c->credit_hour ?></td>
				<td><?php echo $c->course_day ?></td>
				<td><?php echo $c->course_time ?></td>
				<td>
				
				<a href="<?php echo base_url('course/update_course/').$c->id_course ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

				<a href="<?php echo base_url('course/delete_course/').$c->id_course ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
				
				</td>
			</tr>

		<?php endforeach; ?>
		</table>
	</div>
</div>