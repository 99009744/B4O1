<div class="col-10 mx-auto">
<h1>Naam van de persoon van wie je de planning wilt opzoeken:</h1><br>
<form method="POST" action="<?= URL ?>home/findPlanning">
<label for="voornaam" class="col-3">Voornaam:</label>
    <input id="voornaam" type="text " placeholder="voornaam" name="voornaam" required/><br>
    <label for="achternaam" class="col-3">Achternaam:</label>
    <input id="duachternaamur" type="text" placeholder="achternaam" name="achternaam" required/><br>
    <input type="submit" value="Zoek" class="btn btn-primary"/>
   
    </form>
    <a href="<?= URL ?>home/plan" class="btn btn-primary w-100 my-5">Maak een planning</a>
</div>