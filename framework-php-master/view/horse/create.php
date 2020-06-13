<form method="POST" action="<?= URL ?>horse/store">
    <label for="soort">Soort:</label>
    <input id="soort" type="text" placeholder="Soort" name="soort" required/><br>
    <label for="info">Info:</label>
    <input id="info" type="text" placeholder="Info" name="info" required/><br>
    <label for="prijs">Prijs:</label>
    <input id="prijs" type="text" placeholder="Prijs" name="prijs" required/><br>
    <label for="afbeelding">Afbeelding:</label>
    <input id="afbeelding" type="text" placeholder="Afbeelding" name="afbeelding" required/><br>
    <input type="submit" value="Maak aan!" class="btn btn-primary"/>
   
    </form>