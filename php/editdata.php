
<?php 
	
		include('config.php');
		
		$id = $_POST['id'];

		$sql = mysql_query("SELECT * FROM data_member WHERE id='$id'");
		
		while($row = mysql_fetch_array($sql))
		{

?>
<div class="col-md-12"><h3>Edit Area</h3></div>
			<div class="col-md-12 row">
				<div class="col-md-2">
					<input type="text" class="form-control" name="name" id="enm" value="<?php echo $row['name'];?>">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" name="occupation" id="eocc" value="<?php echo $row['occupation'];?>">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" name="date_of_birth" id="edob" value="<?php echo $row['date_of_birth'];?>">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" name="place_of_birth" id="epob" value="<?php echo $row['place_of_birth'];?>">
				</div>
				<div class="col-md-2">
					<select name="gender" class="form-control" id="egen">
						<option value="<?php echo $row['gender'];?>" selected><?php echo $row['gender'];?></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="col-md-2">
					<textarea class="form-control" name="address" id="eaddr" ><?php echo $row['address'];?></textarea>
				</div>
			</div>

			<div class="col-md-12">
				<div style="margin-top: 10px;">
					<button class="btn btn-success" onclick="update(<?php echo $row['id'];?>)">Update</button>
					<button class="btn btn-warning" onclick="cancel()">Cancel</button>
				</div>
				<hr>
			</div>
			<?php } ?>