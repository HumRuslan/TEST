<div class="row">
    <div class="col-md-12">
        <a href="/TEST/backend/book/create" type="button" class="w-100 btn btn-secondary">ДОБАВИТЬ КНИГУ</a>
    </div>
</div>

<div class="row p-1">
<?php
    foreach ($book_list as $book){
?>
    <div class="col-md-2">
        <div class="card w-100">
            <img src="/TEST/onload/<?=$book->urlPhoto?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$book->name?></h5>
                <p class="card-text"><?=$book->autor?></p>
                <a href="/TEST/backend/book/update?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">РЕДАКТИРОВАТЬ</a>
                <a href="/TEST/backend/book/delete?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">УДАЛИТЬ</a>
            </div>
        </div>
    </div>
    <?php
    }
?>   
</div>