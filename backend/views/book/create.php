<div class="m-5 w-50 mx-auto">
    <h3 class="text-center">ДОБАВИТЬ КНИГУ</h3>

    <form method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" placeholder="Название" name="name" value="<?=$model->name?>">
    </div>

    <div class="form-group">
        <label for="name">Автор</label>
        <input type="text" class="form-control" id="autor" placeholder="Автор" name="autor" value="<?=$model->autor?>">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description" id="description" rows="3" class="form-control"><?=$model->description?></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Фото</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="urlPhoto" placeholder="<?=$model->urlPhoto?>">
    </div>

    <button type="submit" class="btn w-100 btn-secondary">СОХРАНИТЬ</button>
    </form>
</div>