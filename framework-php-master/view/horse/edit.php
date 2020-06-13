<form method="POST" action="<?= URL ?>horse/update/<? echo $horse[0]['id'] ?>">
    <label for="soort">Soort:</label>
    <input id="soort" type="text " value="<? echo $horse[0]['soort'] ?>" name="soort" required/><br>
    <label for="info">Info</label>
    <input id="info" type="text " value="<? echo $horse[0]['info'] ?>" name="info" required/><br>
    <label for="prijs">Prijs:</label>
    <input id="prijs" type="text " value="<? echo $horse[0]['prijs'] ?>" name="prijs" required/><br>
    <label for="afbeelding">afbeelding:</label>
    <input id="afbeelding" type="text " value="<? echo $horse[0]['afbeelding'] ?>" name="afbeelding" required/><br>

    <input type="submit" value="Update!" class="btn btn-primary"/>
   
    </form>