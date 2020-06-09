<h1>Weet je zeker dat je de student genaamd <? echo $student[0]["student_name"] ?> wilt verwijderen?</h1>
    <form action="<? echo URL ?>student/destroy/<? echo $student[0]['student_id'] ?>" method="post" class="deleteForm">
                <input type="hidden" value="<?= $deleteid ?>" name="deleteid"></input>
                <input type="submit" value="YES" class="deleteButton"></input>
            </form>
    <form action="<? echo URL ?>/student/index" method="post" class="deleteForm">
                <input type="submit" value="NO" class="deleteButton"></input>
            </form>