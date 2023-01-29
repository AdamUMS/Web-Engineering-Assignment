<form id="formAssetManage" action="<?=base_url()?>RequestManage" method="post" style="border:1px solid #ccc">

<div class="container headertop">
		<h2 class="heading">ASSET REQUEST MANAGEMENT</h2>
		<p>List Approval and Update Approval Value</p>
	</div>


<div class="container">
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      	<th scope="col">ID</th>
				<th scope="col">Student Name</th>
				<th scope="col">Email</th>
				<th scope="col">PhoneNo</th>
				<th scope="col">Date Start</th>
				<th scope="col">Date End</th>
				<th scope="col">Time</th>
				<th scope="col">Asset Name</th>
				<th scope="col">Student ID</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
		    </tr>
		  </thead>


		  <tbody>
		  	<?php if(isset($form)>0){?>
		  	<?php foreach($form as $row):?>

		    <tr>
				<td><?php echo $row->form_id;?></td>
				<td><?php echo $row->student_name;?></td>
				<td><?php echo $row->email;?></td>
				<td><?php echo $row->phoneNo;?></td>
				<td><?php echo $row->booking_dateStart;?></td>
				<td><?php echo $row->bookingdateEnd;?></td>
				<td><?php echo $row->booking_time;?></td>	
				<td><?php echo $row->asset_name;?></td>
				<td><?php echo $row->student_id;?></td>
				<td><?php echo $row->status;?></td>

				<td>
					<a href="#" class=btn_approve>APPROVE</a>
				</td>

		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	<?php 
	}
	else{
		echo "<p>No Courses Found</p>";
	}
	?>
</div>

</form>

<!-- STYLE-->
<style>

form{
	background-color: #fefbe9;
}
.headertop{
	margin-top: 100px;
}

.container{
	padding:16px;
	width:80%;
	margin-bottom: 20px;
	background-color: #e1eedd;
	margin-left: auto;
	margin-right: auto;
}

.heading
{
	text-align: left;
	color: #D9B382;
	text-transform: uppercase;
	padding-top: 5px;
	padding-bottom: 5px;
	font-size: 4rem;
}

p{
	font-size: 1.7rem;
}

.btn {
	margin-top: 1rem;
	display: inline-block;
	padding:.5rem 2rem;
	font-size: 1.7rem;
	color: #f0a04b;
	background: var(--bg);
	cursor: pointer;
}

.btn:hover {
	font-size: 1.8rem;
	color: #f0a04b;
	background: var(--bg);
}
.addcoursebtn:hover{
	color: green;
}

.dropcoursebtn:hover{
	color: red;
}

/*Table*/
table, th, td{
	border-bottom: 1px solid #d6d6d6;
    border-top: 1px solid #d6d6d6;
	border-collapse: collapse;
}

table{
	margin-top: 20px;
	margin-bottom: 20px;
	background-color:white;
	margin: 0 auto;
	width:90%;
}

tr:nth-child(even) {
	background: #f2f2f2;
}


th, td{
	padding: 5px;
	text-align:center;
}

thead{
	background-color:#f2f2f2;
}

/*Button Colour*/

.btn_approve{
  background-color: green;
  color: black;
  padding:.5rem 2rem;
}



</style>

