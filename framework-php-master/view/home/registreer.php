<div class="col-10 mx-auto">
<form method="POST" action="<?= URL ?>home/createUser">
    <label for="voornaam" class="col-3">Vooraam:</label>
    <input id="voornaam" type="text " placeholder="Voornaam" name="voornaam" required/><br>
    <label for="achternaam" class="col-3">Achternaam:</label>
    <input id="achternaam" type="text " placeholder="Achternaam" name="achternaam" required/><br>
    <label for="postcode" class="col-3">Postcode:</label>
    <input id="postcode" type="text " placeholder="Postcode" name="postcode" required/><br>
    <label for="mail" class="col-3">E-mail:</label>
    <input id="mail" type="text " placeholder="E-mail" name="mail" required/><br>
    <label for="telnummer" class="col-3">Telefoon nummer:</label>
    <input id="telnummer" type="int" placeholder="Telefoon nummer" name="telnummer" required/><br>

    <input type="submit" value="Maak aan!" class="btn btn-primary"/>
    </form>
    </div>