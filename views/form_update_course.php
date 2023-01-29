
		<div class="card" style="margin-bottom: 120px; width: 80%">
			<?php echo $this->session->flashdata('pesan') ?>
			<div class="card-header font-weight-bold bg-primary text-white">
			Update Course
			</div>

			<div class="card-body">
				<?php foreach ($course as $c) :?>
				<form method="POST" action="<?php echo base_url('course/update_course_action') ?>">

				<div class="form-group">
						<label>Course Name</label>
						<input type="text" name="course_name" class="form-control" value="<?php echo $c->course_name ?>">
				</div>

				<div class="form-group">
						<label>Credit Hour</label>
						<input type="text" name="credit_hour" class="form-control" value="<?php echo $c->credit_hour ?>">
				</div>

				<div class="form-group">
						<label>Day</label>
						<input type="text" name="course_day" class="form-control" value="<?php echo $c->course_day ?>">
				</div>

				<div class="form-group">
						<label>Time</label>
						<input type="text" name="course_time" class="form-control" value="<?php echo $c->course_time ?>">
				</div>

				<button type="submit" class="btn btn-primary mt-4">Update</button>
				<button type="reset" class="btn btn-danger mt-4">Reset</button>
				</form>
			<?php endforeach; ?>
			</div>
		</div>