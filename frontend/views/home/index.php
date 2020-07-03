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
                <a href="/TEST/frontend/book/item?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">ПРОСМОТРЕТЬ</a>
                <a href="/TEST/frontend/order/create?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">ЗАКАЗАТЬ</a>
            </div>
        </div>
    </div>
    <?php
    }
?>   
</div>