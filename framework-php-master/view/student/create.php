<form method="POST" action="<?= URL ?>student/store">
    <label for="naam">Naam:</label>
    <input id="name" type="text " placeholder="Naam" name="name" required/><br>
    <label for="id">Student number</label>
    <input id="id" type="text " placeholder="Student number" name="id" required/><br>
    <input type="submit" value="Maak aan!" class="btn btn-primary"/>
   
    </form>