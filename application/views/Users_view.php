<!DOCTYPE html>
<html>
<head>
	<title>User View</title>

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="text-center">
   <h1 class="center">Welcome to first project!!</h1>
</div>

<div class="container">
 <table class="table">
    <thead style="color: red">
	<tr>
		<td>First Name</td>
		<td>Account No</td>
	</tr>
</thead>
   <tbody>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?php echo $user['Name']; ?></td>
		<!--<td><?php echo $user['Account'];?></td>-->
	</tr>
<?php endforeach; ?>
</tbody>
</table>


</div>
</body>
</html>