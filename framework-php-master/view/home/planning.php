Hier zie je jouw geplande ritten:

<div class="container">
	
	<div class="mt-2 row justify-content-center col-12">
    <?
	foreach($getplanning as $planning){ ?>
		<div class="card col-sm-12 col-md-5 d-inline-block m-3">
			<div class="card-body">
				<p>Gepland door = <? echo $planning['voornaam']?> <? echo $planning['achternaam']?></p>
				<p class="">Datum J/M/D = <? echo $planning['datum'] ?></p>
				<p class="">Begin tijd u/m/s = <? echo $planning['begintijd']?>/<? echo $planning['eindtijd']?></p>
				<p class="">Prijs = <? echo $planning['duur'] ?> euro</p>
			</div>
		</div>
	<? } ?>
	</div>
	<a href="<?= URL ?>home/plan" class="btn btn-primary w-100">Maak een planning</a>
</div>