<div class="m-5 w-50 mx-auto">
    <h3 class="text-center">ДОБАВИТЬ КОММЕНТАРИЙ</h3>

    <form method="POST">

    <div class="form-group">
        <label for="name">Автор</label>
        <input type="text" class="form-control" id="autor" placeholder="Автор" name="autor" value="<?=$model->autor?>">
    </div>

    <div class="form-group">
        <label for="comment">Комментарий</label>
        <textarea name="comment" id="comment" rows="3" class="form-control"><?=$model->comment?></textarea>
    </div>

    <button type="submit" class="btn w-100 btn-secondary">СОХРАНИТЬ</button>
    </form>
</div>