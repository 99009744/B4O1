<div class="container">
	<a href="<?= URL ?>student/create">Create Employee</a>
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
	<? 
	foreach($students as $student){ ?>
		<tr>
			<td><? echo $student['student_id'] ?></td>
			<td><? echo $student['student_name'] ?></td>
			<td><a href="<?= URL ?>student/edit/<? echo $student['student_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>student/delete/<? echo $student['student_id'] ?>">Delete</a></td>
		</tr>
	<? } ?>
	</table>
</div>