<section class="aboutBooking">
<div class="aboutAssetBooking">
	<h2>Welcome to Student Asset Booking</h2>
	<p>Student can book any University's asset for educational purpose. Please fill in the form below to book an University's asset.</p>
</div>
</section>
<!--Asset about section ends -->

<!--Asset slide show section starts -->
<section class="slideBooking">
<div class="slidershow middle">
		<div class="slides">
		 <input type="radio" name="r" id="r1" checked>
		 <input type="radio" name="r" id="r2">
		 <input type="radio" name="r" id="r3">
		 <input type="radio" name="r" id="r4">
		 <div class="slide s1">
		  <img src="<?=base_url()?>public/img/asset1.jpg" alt=" ">
		 </div>
		 <div class="slide">
		  <img src="<?=base_url()?>public/img/asset2.jpg" alt=" ">
		 </div>
		 <div class="slide">
		  <img src="<?=base_url()?>public/img/asset3.jpg" alt=" ">
		 </div>
		 <div class="slide">
		  <img src="<?=base_url()?>public/img/asset4.jpg" alt=" ">
		 </div>
		</div>
		<div class="navigation">
		 <label for="r1" class="bar"></label>
		 <label for="r2" class="bar"></label>
		 <label for="r3" class="bar"></label>
		 <label for="r4" class="bar"></label>
		</div>
	</div>
</section>


<div class="bookingcontainer">
		<form id="StudentBookingRegistration" action="<?=base_url()?>studentBooking/addBooking" method="post" name="StudentBookingRegistration" class="registration-booking" onsubmit="return(validateBooking());">

			<table cellpadding="2" width="90%" align="center" cellspacing="2">
				<tr>
					<td><label for="name">Full Name:</label></td>
					<td><input type="text" name="name" id="name" size="30" placeholder="Enter your name"></td>
				</tr>

				<tr>
					<td><label for="studentID">Matric Number:</label></td>
					<td><input type="text" name="studentID" id="studentID" placeholder="Enter your matric number"></td>
				</tr>

				<tr>
					<td><label for="emailid">Email:</label></td>
					<td><input type="text" name="emailid" id="emailid" placeholder="Enter your email address"></td>
				</tr>

				<tr>
					<td><label for="phoneNumber">Phone Number:</label></td>
					<td><input type="number" name="phoneNumber" id="phoneNumber" placeholder="e.g. 0000000000"></td>
				</tr>

				<tr>
					<td><label for="asset">Asset:</label></td>
					<td>
						<select name="asset" id="asset">
							<option value="-1" selected>Select Asset</option>
							<option value="1">Laptop</option>
							<option value="2">Ipad</option>
							<option value="3">AR Glasses</option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label for="dateStart">Booking Date Start:</label></td>
					<td><input type="text" name="dateStart" id="dateStart" placeholder="yyyy-mm-dd"></td>
				</tr>

				<tr>
					<td><label for="dateEnd">Booking Date End:</label></td>
					<td><input type="text" name="dateEnd" id="dateEnd" placeholder="yyyy-mm-dd"></td>
				</tr>

				<tr>
					<td><label for="time">Booking Time (24 hours):</label></td>
					<td><input type="text" name="time" id="time" placeholder="00:00 - 00:00"></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" class="submit" name="submit" value="submit form" onclick="myFunction()"></td>
				</tr>

			</table>
		</form>
	    </div>

		<p id="demo"></p>
	</div>
<!--form section ends-->

<script type="text/javascript">
	var counter = 1;
    setInterval(function(){
	document.getElementById('r' + counter).checked =true;
	counter++;
	if(counter > 4){
		counter = 1;
	}
},5000);

function validateBooking()
{
	if(document.StudentBookingRegistration.name.value == "" )
	{
		alert( "Please provide your Name!" );
		document.StudentBookingRegistration.name.focus() ;
		return false;
	}

	if(document.StudentBookingRegistration.studentID.value == "" )
	{
		alert( "Please provide your Matric Number!" );
		document.StudentBookingRegistration.studentID.focus() ;
		return false;
	}

	if(document.StudentBookingRegistration.dateStart.value == "" )
	{
		alert( "Please provide your booking date start!" );
		document.StudentBookingRegistration.dateStart.focus() ;
		return false;
	}

	if(document.StudentBookingRegistration.dateEnd.value == "" )
	{
		alert( "Please provide your booking date end!" );
		document.StudentBookingRegistration.dateEnd.focus() ;
		return false;
	}

	if(document.StudentBookingRegistration.time.value == "" )
	{
		alert( "Please provide your booking time!" );
		document.StudentBookingRegistration.time.focus() ;
		return false;
	}

	if( document.StudentBookingRegistration.asset.value == "-1" )
	{
		alert( "Please select an asset!" );

		return false;
	} 

		var email = document.StudentBookingRegistration.emailid.value;
		atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
			if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
				{
					alert("Please enter correct email ID")
					document.StudentBookingRegistration.emailid.focus() ;
					return false;
				}


		if( document.StudentBookingRegistration.phoneNumber.value == "" ||
		isNaN( document.StudentBookingRegistration.phoneNumber.value) ||
		document.StudentBookingRegistration.phoneNumber.value.length != 10 )
			{
				alert( "Please provide a Mobile No in the format 123." );
				document.StudentBookingRegistration.phoneNumber.focus() ;
				return false;
			}
	alert("The form was submitted")
	return (true);
}

</script>