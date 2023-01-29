<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Student Profile</h1>
	</div>

	<div class="card" style="margin-bottom: 120px; width:70%" >
		<div class="card-header font-weight-bold bg-primary text-white">
			Student Data
	</div>

<?php foreach($student as $s) : ?>
	<div class="card-body">
		<div class="col-md-9">
			<table class="table">
				<tr>
					<td>Student Matric Number</td>
					<td>:</td>
					<td><?php echo $s->no_student ?></td>
				</tr>

				<tr>
					<td>Student Name</td>
					<td>:</td>
					<td><?php echo $s->nama ?></td>
				</tr>

				<tr>
					<td>Student Gender</td>
					<td>:</td>
					<td><?php echo $s->gender ?></td>
				</tr>

				<tr>
					<td>Student Address</td>
					<td>:</td>
					<td><?php echo $s->alamat ?></td>
				</tr>

				<tr>
					<td>Student Phone Number</td>
					<td>:</td>
					<td><?php echo $s->no_telepon ?></td>
				</tr>

				

			</table>
		</div>
	</div>
<?php endforeach; ?>

</div>