<div class="m-5 w-75 mx-auto">
    <div class="row">
        <div class="col-md-4">
            <img src="/TEST/onload/<?=$book->urlPhoto?>" class="card-img-top mx-auto" alt="..." style = "width: auto; hieght: 100">
        </div>
        <div class="col-md-8">
            <h3><?=$book->name?></h3>
            <h3><?=$book->autor?></h3>
            <p><?=$book->description?></p>
            <a href="/TEST/frontend/order/create?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">ЗАКАЗАТЬ</a>
            <a href="/TEST/frontend/comment/create?id=<?=$book->id?>" class="btn btn-secondary w-100 m-1">ДОБАВИТЬ КОММЕНТАРИЙ</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Комментарии:</h3>
            <?php
                foreach ($comment_list as $comment){
            ?>
                <h5>Aвтор: <?=$comment->autor?></h5>
                <p><?=$comment->comment?></p>
            <?php    
                }
            ?>
        </div>
    </div>
</div>