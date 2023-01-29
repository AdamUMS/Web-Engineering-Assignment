<form id="formAssetManage" action="<?=base_url()?>AssetManage/insertAsset" method="post"  style="border:1px solid #ccc">

<div class="container headertop">
		<h2 class="heading">ASSET INVENTORY</h2>
		<p>Add, Display and Delete Assets</p>
</div>

<!-- DISPLAY EXISTING ASSETS -->
<div class="container">
		<table class="table table-striped">
		  <thead class="thead-dark">
		    <tr>
				<th scope="col">Asset ID</th>
				<th scope="col">Asset Name</th>
				<th scope="col">Action</th>
		    </tr>
		  </thead>


		  <tbody>
		  	<?php if(count($asset)>0){?>
		  	<?php foreach($asset as $row):?>

		    <tr>	
		    	<td><?php echo $row->asset_id;?></td>
				<td><?php echo $row->asset_name;?></td>

				<td>
					<a href="<?php echo base_url(); ?>AssetManage/deleteAsset/<?php echo $row->asset_id; ?>" class=btn_delete>DELETE</a>	
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

<!-- INSERT NEW ASSETS -->
<div class="container">
		<form>
			<div class="form-group">
		    	<label for="asset_id">New Asset</label>
		    	<input type="text" name="asset_id" class="form-control" placeholder="Enter Asset ID" required>
		    	<input type="text" name="asset_name" class="form-control" placeholder="Enter Asset Name" required>
		  	</div>
		  		<button class="btn" type="submit">Insert</button>
		  	</div>
		</form>
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

.btn_delete{
  background-color: red;
  color: black;
  padding:.5rem 2rem;
}

</style>

