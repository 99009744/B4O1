<div class="col-10 mx-auto">
<h1>Update je planning:</h1><br>
<form method="POST" action="<?= URL ?>home/update/<?= $info[0][0]['id'] ?>">
<label for="begintijd" class="col-3">Begintijd:</label>
    <input id="begintijd" type="text "value="<?= $info[0][0]['begintijd'] ?>" name="begintijd" required/><br>
    <label for="duur" class="col-3">Duur:</label>
    <input id="duur" type="number" value="<?= $info[0][0]['duur'] ?>" name="duur" min="1" max="12" required/><br>
    <label for="datum" class="col-3">Datum:</label>
    <input id="datum" type="date" value="<?= $info[0][0]['datum'] ?>" name="datum" required/><br>
    <label for="voornaam" class="col-3">Vooraam:</label>
    <input id="voornaam" type="text " value="<?= $info[0][0]['voornaam'] ?>" name="voornaam" required/><br>
    <label for="achternaam" class="col-3">Achternaam:</label>
    <input id="achternaam" type="text " value="<?= $info[0][0]['achternaam'] ?>" name="achternaam" required/><br>
    <label for="paard" class="col-3">paard:</label>
    <select name="paard" id="paard">
    <? foreach($info[2] as $horse){ ?>
        <option value="<?= $horse['soort'] ?>"><?= $horse['soort'] ?></option>
    <? } ?>
    </select>

    <input type="submit" value="Update!" class="btn btn-primary"/>
   
    </form>
</div>