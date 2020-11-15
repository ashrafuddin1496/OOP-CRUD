<?php include_once "app/autoload.php"; ?>
<?php  

	$user = new User;

	if ( isset($_GET['id']) ) {
		
		$id = $_GET['id'];


		$mess = $user -> humaydVaiErOvisap($id);
	}

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	


	<div class="wrap-table ">
		<?php  
			if (  isset($mess) ) {
				echo $mess;
			}
		?>
		<a class="btn btn-primary" href="index.php">Add new</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Uusername</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php  

							$users_data = $user -> humayadVaiErBorkot();

							while( $user = $users_data -> fetch_assoc() ) : 

						?>

						<tr>
							<td>1</td>
							<td><?php echo $user['name']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td><?php echo $user['cell']; ?></td>
							<td><?php echo $user['uname']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="?id=<?php echo $user['id']; ?>">Delete</a>
							</td>
						</tr>

					<?php endwhile; ?>



						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>