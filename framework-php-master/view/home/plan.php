<? if($check = 'NULL'){
    echo 'Naam ombekend, registreer je eerst';
} ?>

<div class="col-10 mx-auto">
<form method="POST" action="<?= URL ?>home/createplanning">
    <label for="begintijd" class="col-3">Begintijd:</label>
    <input id="begintijd" type="text " placeholder="begintijd" name="begintijd" required/><br>
    <label for="duur" class="col-3">Duur:</label>
    <input id="duur" type="time" placeholder="Duur" name="duur" required/><br>
    <label for="datum" class="col-3">Datum:</label>
    <input id="datum" type="text " placeholder="JJJJ-MM-DD" name="datum" required/><br>
    <label for="voornaam" class="col-3">Vooraam:</label>
    <input id="voornaam" type="text " placeholder="Voornaam" name="voornaam" required/><br>
    <label for="achternaam" class="col-3">Achternaam:</label>
    <input id="achternaam" type="text " placeholder="Achternaam" name="achternaam" required/><br>

    <input type="submit" value="Maak aan!" class="btn btn-primary"/>
    </form>
    </div>