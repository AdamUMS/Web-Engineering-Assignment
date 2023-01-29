
<form action="<?=base_url()?>Evaluation/addneweva" method="post" style="border:1px solid #ccc">
	<div class="container">
		<h1>Course Evaluation</h1>
		<p>Please fill in this form for course evaluation.</p>


		<label for="name"><b>Student Name</b></label>
		<input type="text" placeholder="Enter Name" name="student_name" required>

		<label for="id"><b>Matric No</b></label>
		<input type="text" placeholder="Enter Matric Number" name="student_id" required>

		
		<label for="session"><b>Curent Session</b></label>
		<select name="sem_session" id="sSession">
			<option value="" disabled="disabled" selected="selected">Please Select</option>
			<option value="1">2021/2022-1</option>
			<option value="2">2021/2022-2</option>
		</select>

		<label for="course_code"><b>Course Code</b></label>
		<input type="text" placeholder="Enter Course Code" name="course_code">

		<label for="section"><b>Section</b></label>
		<input type="text" placeholder="Enter Section No" name="section_no">

		<label for="rating">Rate the overall study experience with this course. (1 - 5)</label>
  <input type="number" id="rating" name="rating" min="1" max="5">
      <div class="clearfix">
        
        <button type="submit" class="signupbtn">Rate</button>
      </div>
      <div>
      	<a href="<?=base_url()?>Evaluation/viewEva">View Past Rating</a>
      </div>

      
		
			
	</div>

</form>

<style>
	body {front-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box}

	/* Full-width input fields */
	input[type=text], input[type=password],input[type=email], input[type=number], select {
		width: 100%;
		padding:  15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: var(--darkbeige);
	}

	input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=email]:focus, select:focus {
		background-color: #ddd;
		outline: none;
	}

	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}

	/* Set a style for all buttons */
	button {
		background-color: seagreen;
		color: black;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 20%;
		opacity: 0.9; 
	}

	button:hover {
		opacity: 1;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
		padding: 14px 20px;
		background-color: #f44336;
	}

	/* Float cancel and signup button and add equal width */
	.cancelbtn, .signupbtn {
		float: left;
		width: 20%;
	}

	/* Add padding to container elements */
	.container {
		padding: 16px;
		width: 80%;
	}

	/* Clear floats*/
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}

	.alert {
		padding: 20px;
		background-color: #f44336;
		color: white;
	}

	.alert_green {
		padding: 20px;
		background-color: #00cc66;
		color: white;
	}

	/* Change styles for cancel button and signup button on extra small screen */
	@media screen and (max-width: 300px) {
		.cancelbtn, .signupbtn {
			width: 20%;
		}
	}
	
</style>