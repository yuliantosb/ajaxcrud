 <html>
<head>
	<title>AJAX CRUD</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- custome style -->
	<style type="text/css">
		.input {
			margin-bottom: 5px;
		}
		#waiting {
			text-align: center;
			margin-top: 100px;
			font-size: 1.9em;
			font-weight: bold;
		}
	</style>
</head>
<body onload="viewdata();">

	<div class="container">
		<h1>AJAX CRUD</h1>
		<hr>
		<div class="pull-right"><button data-toggle="modal" data-target="#myModal" class="btn btn-primary" title="Add New Data"><span class="glyphicon glyphicon-book"></span></button></div>
		
		<div class="row" id="edit">
			
		</div>
		<div id="viewdata">
			<div id="waiting">

			</div>
			<!-- viewdata is here -->
		</div>
	</div>


	<!-- Modol eh modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
					<h4 class="modal-title" id="myModalLabel">
						Add New Data
					</h4>
				</div>
			<div class="modal-body">
				<form class="form-horizontal row" action="savedata()">
					<div clas="form-group">
						<!-- Name -->
						<label class="col-sm-2">Name</label>
						<div class="col-md-10 input">
							<input type="text" id="nm" name="name" class="form-control" placeholder="Name">
						</div>
						<!-- Occupation -->
						<label class="col-sm-2">Occupation</label>
						<div class="col-md-10 input">
							<input type="text" id="occ" name="occupation" class="form-control" placeholder="Occupation">
						</div>
						<!-- Date of birth -->
						<label class="col-sm-2">Date of Birth</label>
						<div class="col-md-10 input">
							<input type="text" id="dob" name="date_of_birth" class="form-control" placeholder="YYY/MM/DD">
						</div>
						<!-- place of birth -->
						<label class="col-sm-2">Place of Birth</label>
						<div class="col-md-10 input">
							<input type="text" id="pob" name="place_of_birth" class="form-control" placeholder="Place of Birth">
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
							<textarea class="form-control" id="addr" name="address" placeholder="Address"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
				<button type="button" onclick="savedata()" class="btn btn-primary" data-dismiss="modal"> Save </button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->

	<!-- Modol eh modal -->

	

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- tooltip -->
	<script>
		function tooltip(){
		$(function () { $(".btn").tooltip(); });}
	</script>
	<!-- AJAX -->
	<script>
	function viewdata() {
		 $.ajax({
		   type: "GET",
		   url: "php/getdata.php",

		   beforeSend: function(){
				$('#waiting').text('Loading ...').fadeIn('slow');
				},
			success: function(html){
				$('#waiting').fadeOut('slow');
				$('#viewdata').html(html).fadeIn('slow');
				tooltip();
				
		   }
	     
		});
	}

	</script>
	<script>

	function savedata(){

		$.ajax({
			url: "php/savedata.php",
			type: "POST",
			data: {
				name: $("#nm").val(),
				occupation: $("#occ").val(),
				date_of_birth: $("#dob").val(),
				place_of_birth: $("#pob").val(),
				gender: $("#gen").val(),
				address: $("#addr").val(),
			},
			success: function(data){
				$('#viewdata').html(data).fadeIn('slow');
				onload('viewdata');
				tooltip();
				clear();
		   }

		});

	}

	function clear(){
		$("#nm").attr("value","");
		$("#occ").attr("value","");
		$("#dob").attr("value","");
		$("#pob").attr("value","");
		$("#gen").attr("value","");
		$("#addr").attr("value","");
	}

	</script>

	<script>
		function deletedata(val){

			var id =  val;

			$.ajax({
				type: "GET",
				url: "php/deletedata.php?id="+id,
				success: function(data){
					$("#viewdata").html(data);
					onload('viewdata');
					tooltip();
				}
			})
		}
	</script>
	<script>
	function edit(val)
	{
		$('#edit').attr("class","row");

		$.ajax({
			type: "POST",
			url: "php/editdata.php",
			data:'id='+val,	
			success: function(data){
				$("#edit").html(data);
				onload("viewdata");
			}
		})
	}
	function cancel(){
		$('#edit').attr("class","hidden");
	}

	</script>

	<script>
		function update(val){
			var id = val;

			$.ajax({
				type: "POST",
				url: "php/updatedata.php?id="+id,
				data: {
						name: $("#enm").val(),
						occupation: $("#eocc").val(),
						date_of_birth: $("#edob").val(),
						place_of_birth: $("#epob").val(),
						gender: $("#egen").val(),
						address: $("#eaddr").val(),
					},
				success: function(data){
					$("#edit").attr("class", "hide");
					onload('viewdata');
					tooltip();
				}

			});
		}
	</script>
	
</body>
</html>