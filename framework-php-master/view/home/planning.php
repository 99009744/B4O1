<div class="container">
	
	<div class="mt-2 row justify-content-center col-12">
    <?
	if(!empty($getplanning)){
		
	foreach($getplanning as $planning){ 
		$prijs = $planning['duur'] * 55;?>
		<div class="card col-sm-12 col-md-5 d-inline-block m-3">
			<div class="card-body">
				<p>Gepland door = <? echo $planning['voornaam']?> <? echo $planning['achternaam']?></p>
				<p class="">Datum J/M/D = <? echo $planning['datum'] ?></p>
				<p class="">Begin tijd U/M/S = <? echo $planning['begintijd']?></p>
				<p class="">Duur van de rit = <?= $planning['duur'] ?> uur</p>
				<p class="">Prijs = <?= $prijs ?> euro</p>
				<p class="">Paard = <?= $planning['paard'] ?></p>
				<p class=""><a href="<?= URL ?>home/edit/<?= $planning['voornaam'] . "/" . $planning['achternaam'] . "/" . $planning['id']?>">Edit</a></p>
				<p class=""><a href="<?= URL ?>home/delete/<?= $planning['id'] ?>">Delete</a></p>
			</div>
		</div>
	<? } 
	}
	else{ ?>
		<p>Geen planning gevonden onder deze naam.</p>
	<? }
	?>
	
	</div>
	<a href="<?= URL ?>home/plan" class="btn btn-primary w-100">Maak een planning</a>
</div>