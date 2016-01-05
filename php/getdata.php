<?php include('config.php');
?>

<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Occupation</th>
						<th>Date of Birth</th>
						<th>Place of Birth</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$query 	= mysql_query("SELECT * FROM data_member");
						$i = 1;
						while ($row = mysql_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<?php echo $row['name'];?></span>
						<td>
							<?php echo $row['occupation'];?>
						</td>
						<td>
							<?php echo $row['date_of_birth'];?>
						</td>
						<td>
							<?php echo $row['place_of_birth'];?>
						</td>
						<td>
							<?php echo $row['gender'];?>
						
						<td>
							<?php echo $row['address'];?>
						</td>
						<td>
							<a class="btn btn-success" onclick="edit('<?php echo $row['id']; ?>')"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a title="Delete" onclick="deletedata('<?php echo $row['id']; ?>')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
						<?php $i++; } ?>
				</tbody>
			</table>