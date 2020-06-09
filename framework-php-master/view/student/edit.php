<form method="POST" action="<?= URL ?>student/update/<? echo $student[0]['student_id'] ?>">
    <label for="naam">Naam:</label>
    <input id="name" type="text " value="<? echo $student[0]['student_name'] ?>" name="name" required/><br>
    <label for="id">Student number</label>
    <input id="id" type="text " value="<? echo $student[0]['student_id'] ?>" name="id" required/><br>
    <input type="submit" value="Maak aan!" class="btn btn-primary"/>
   
    </form>