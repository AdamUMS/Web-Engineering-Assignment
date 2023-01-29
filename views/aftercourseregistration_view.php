<form id="formAfterCourseRegistration" action="<?=base_url()?>AfterCourseRegistration" method="post" style="border:1px solid #ccc">
	
	<div class="container headertop">
		<h2 class="heading">COURSES REGISTERED</h2>
	</div>

	<div id="dvContents" class="container">
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Course Code</th>
		      <th scope="col">Course Name</th>
		      <th scope="col">Course Hour</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($coursereg as $row):?>
		    <tr>
		      <td><?php echo $row['course_code_reg'] ?></td>
		      <td><?php echo $row['course_name'] ?></td>
		      <td><?php echo $row['course_hour'] ?></td>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
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

