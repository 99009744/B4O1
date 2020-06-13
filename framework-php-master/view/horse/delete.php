<h1>Weet je zeker dat je de paarden soort "<? echo $horse[0]["soort"] ?>"" wilt verwijderen?</h1>
    <form action="<? echo URL ?>horse/destroy/<? echo $horse[0]['id'] ?>" method="post" class="deleteForm">
                <input type="hidden" value="<?= $deleteid ?>" name="deleteid"></input>
                <input type="submit" value="YES" class="deleteButton"></input>
            </form>
    <form action="<? echo URL ?>/horse/index" method="post" class="deleteForm">
                <input type="submit" value="NO" class="deleteButton"></input>
            </form>