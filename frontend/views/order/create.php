<div class="m-5 w-50 mx-auto">
    <h3 class="text-center">ОФОРМИТЬ ЗАКАЗ</h3>

    <form method="POST">

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="autor" placeholder="Имя" name="name" value="<?=$model->name?>">
    </div>

    <div class="form-group">
        <label for="name">email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?=$model->email?>">
    </div>

    <div class="form-group">
        <label for="comment">Телефон</label>
        <input type="phone" class="form-control" id="phone" placeholder="Телефон в формате +xx-xxx-xx-xxx-xx" name="phone" value="<?=$model->phone?>" pattern="\+[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{2}">
    </div>

    <button type="submit" class="btn w-100 btn-secondary">ЗАКАЗАТЬ</button>
    </form>
</div>