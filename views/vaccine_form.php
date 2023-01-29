<?php echo $this->session->flashdata('pesan') ?>
<div class="card" style="margin-bottom: 120px; width:90%">
		<div class="card-header font-weight-bold bg-primary text-white">
			Vaccination Record
	</div>


	<div class="card-body">
		<form method="POST" action="<?php echo base_url('vaccine/add_record_action') ?>">
			<div class="form-group">
				<label>MySejahtera ID</label>
				<input type="text" name="sejahtera" class="form-control">
			</div>

			<div class="form-group">
				<label>Vaccine Status</label>
				<input type="text" name="status" class="form-control" placeholder="Yes/No">
			</div>

			<div class="form-group">
				<label>Vaccine Name</label>
				<input type="text" name="vaccineName" class="form-control">
			</div>

			<div class="form-group">
				<label>Date</label>
				<input type="text" name="date" class="form-control">
			</div>

			<div class="form-group">
				<label>PPV</label>
				<input type="text" name="place" class="form-control">
			</div>

			<div class="form-group">
				<label>Vaccine Batch No.</label>
				<input type="text" name="batch" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary mt-4">Save</button>
				<button type="reset" class="btn btn-danger mt-4">Reset</button>


		</form>



	</div>		
