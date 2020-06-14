<h1>Weet je zeker dat je deze planning wilt verwijderen "</h1>
    <form action="<? echo URL ?>home/destroy/<?= $id ?>" method="post" class="deleteForm">
                <input type="hidden" value="<?= $id ?>" name="deleteid"></input>
                <input type="submit" value="YES" class="deleteButton"></input>
            </form>
    <form action="<? echo URL ?>/home/planning" method="post" class="deleteForm">
                <input type="submit" value="NO" class="deleteButton"></input>
            </form>