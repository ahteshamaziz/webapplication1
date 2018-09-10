<?php include('header.php'); ?>

<?php print_r($articles); ?>

<div class="container" style="margin-top: 50px;">
<h1>Welcome Admin!!</h1>
<div class="table">
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Article Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php if(count($articles)): ?>	
    <?php foreach ($articles as $art): ?>
    	
	  <tr>	
		<td>1</td>
		<td><?php echo $art->article_title; ?></td>
		<td><a href="#" class="btn btn-primary">Edit</a></td>
		<td><a href="#" class="btn btn-danger" >Delete</a></td>
	  </tr>
	<?php endforeach; ?>
<?php else: ?>
	<tr>
		<td colspan="3">No Data Available</td>
    </tr>

<?php endif; ?>
 

	</tbody>
</table>  

</div>

<?php include('footer.php'); ?>