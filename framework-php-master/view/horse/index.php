<div class="container">
	
	<div class="mt-2 row justify-content-center col-12">
	<? 
	foreach($horses as $horse){ ?>
		<div class="card col-sm-12 col-md-3 d-inline-block m-3">
			<img class="card-img-top img-fluid" src="<?= URL ?>public/afbeelding/<? echo $horse['afbeelding'] ?>">
			<div class="card-body">
				<p class="">Soort: <?= $horse['soort'] ?></p>
				<p class="">Info: <?= $horse['info'] ?></p>
				<p class="">Prijs: <?= $horse['prijs'] ?></p>
				<p class=""><a href="<?= URL ?>horse/edit/<?= $horse['id'] ?>">Edit</a></p>
				<p class=""><a href="<?= URL ?>horse/delete/<?= $horse['id'] ?>">Delete</a></p>
			</div>
		</div>
	<? } ?>
	</div>
	<a href="<?= URL ?>horse/create" class="btn btn-primary w-100">Add horse</a>
</div>