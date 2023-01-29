<form id="formCourseDetails" action="<?php echo base_url(); ?>AddCourseReg/addcoursereg/<?php echo $course->course_code; ?>" method="post" style="border:1px solid #ccc">

	<div class="container headertop">
		<h2 class="heading">COURSE DETAILS</h2>
	</div>

	<div class="container">
		<form>
			<div class="form-group">
		    	<label for="course_code">Course Code</label>
		    	<input type="text" name="course_code" value="<?= $course->course_code ?>" class="form-control" placeholder="Enter course name" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="course_name">Course Name</label>
		    	<input type="text" name="course_name" value="<?= $course->course_name ?>" class="form-control" id="coursename" placeholder="Enter course name" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="course_hour">Course Hour</label>
		    	<input type="text" name="course_hour" value="<?= $course->course_hour ?>" class="form-control" id="coursehour" placeholder="Enter course hour" required>
		  	</div>
		  	<div>
		  		<input class="btn" type="submit" name="addcoursereg" value="Confirm Add"/>
		  	</div>
		</form>

	</div>

</form> 

<style>

form{
	background-color: #fefbe9;
}

.headertop{
	margin-top: 100px;
}

label{
	font-size: 1.7rem; 
}

/*Full-width input fields*/
input[type=text]{
	width:100%;
	padding:15px;
	margin:5px 0 22px 0;
	display:inline-block;
	border:none;
	background:white;
	font-size: 1.7rem; 
}

input[type=text]:focus{
	background-color:#ddd;
	outline:none;
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

.btn {
	margin-top: 1rem;
	display: inline-block;
	padding:.9rem 3rem;
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

/*Table*/
table, th, td{
	border:1px solid #183a1d;
	border-collapse: collapse;
}

table{
	margin-top: 20px;
	margin-bottom: 20px;
	background-color:#fefff0;
	margin: 0 auto;
	width:60%;
}

th, td{
	padding: 5px;
	text-align:center
}

thead{
	background-color:#D9B382;
}

</style>
