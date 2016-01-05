	<?php include('config.php');

		$id = $_GET['id'];

		$sql = mysql_query("SELECT * FROM data_member WHERE id='$id'");
		
		while($row = mysql_fetch_array($sql))
		{

	?>

	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
					<h4 class="modal-title" id="editModalLabel">
						Edit Data
					</h4>
				</div>
			<div class="modal-body">
				<form class="form-horizontal row">
					<div clas="form-group">
						<!-- Name -->
						<label class="col-sm-2">Name</label>
						<div class="col-md-10 input">
							<input type="text" id="nm" value="<?php echo $row['name'];?>" name="name" class="form-control" placeholder="Name">
						</div>
						<!-- Occupation -->
						<label class="col-sm-2">Occupation</label>
						<div class="col-md-10 input">
							<input type="text" id="occ" value="<?php echo $row['occupation'];?>" name="occupation" class="form-control" placeholder="Occupation">
						</div>
						<!-- Date of birth -->
						<label class="col-sm-2">Date of Birth</label>
						<div class="col-md-10 input">
							<input type="text" id="dob" value="<?php echo $row['date_of_birth'];?>" name="date_of_birth" class="form-control" placeholder="YYY/MM/DD">
						</div>
						<!-- place of birth -->
						<label class="col-sm-2">Place of Birth</label>
						<div class="col-md-10 input">
							<input type="text" id="pob" value="<?php echo $row['place_of_birth'];?>" name="place_of_birth" class="form-control" placeholder="Place of Birth">
						</div>
						<!-- Gender -->
						<label class="col-sm-2">Gender</label>
						<div class="col-md-10 input">
							<select class="form-control" id="gen" name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<!-- Address -->
						<label class="col-sm-2">Address</label>
						<div class="col-md-10 input">
							<textarea class="form-control" id="addr" name="address" placeholder="Address"><?php echo $row['address'];?></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
				<button type="button" class="btn btn-primary" data-dismiss="modal"> Save </button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
	<?php } ?>