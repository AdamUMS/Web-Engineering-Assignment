<form id="formCourseRegistraion" action="<?=base_url()?>CourseRegistration" method="post" style="border:1px solid #ccc">

	<div class="container headertop">
		<h2 class="heading">COURSE REGISTRATION</h2>
		<p>List of courses.</p>
	</div>

	<!------LIST OF AVAILABLE COURSES------------->

	<div class="container">
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Course Code</th>
		      <th scope="col">Course Name</th>
		      <th scope="col">View Course Details</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (count($course)>0){ ?>
		  	<?php foreach($course as $row):?>

		    <tr>
		      <td><?php echo $row->course_code; ?></td>
		      <td><?php echo $row->course_name; ?></td>
		      <td>
		      	<a href="<?php echo base_url(); ?>CourseDetails/coursedetails/<?php echo $row->course_code; ?>" name="addcoursereg" class="addcoursebtn btn">Details</a>
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

	<hr>
	<!------REGISTERED COURSE------------->
	<div class="container">
		<p>List of courses registered.</p>
	</div>

	<div id="dvContents" class="container">
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Course Code</th>
		      <th scope="col">Course Name</th>
		      <th scope="col">Course Hour</th>
		      <th scope="col">Drop Course</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($coursereg as $row):?>
		    <tr>
		      <td><?php echo $row['course_code_reg'] ?></td>
		      <td><?php echo $row['course_name'] ?></td>
		      <td><?php echo $row['course_hour'] ?></td>
		      <td>
		      	<a href="<?php echo base_url(); ?>DeleteCourseReg/deletecoursereg/<?php echo $row['course_code_reg'] ?>" class="dropcoursebtn btn">Drop</a>
		      </td>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
		
	<a href="<?=base_url()?>AfterCourseRegistration" class="addcoursebtn btn">Confirm Registration</a>
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



</style>

