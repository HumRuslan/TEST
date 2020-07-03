<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Автор</th>
        <th scope="col">Книга</th>
        <th scope="col">Комментарий</th>
        <th scope="col">Статус</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($comment_list as $comment){
    ?>
        <tr>
        <th scope="row"><?=$comment->id?></th>
        <td><?=$comment->autor?></td>
        <td><?=$comment->book?> <br> <?=$comment->book_autor?></td>
        <td><?=$comment->comment?></td>
    <?php
        if ($comment->approval){
            echo "<td><input class = 'status' type='checkbox' value='$comment->id' checked disabled></td>";
        } else {
            echo "<td><input class = 'status' type='checkbox' value='$comment->id'></td>";
        }
    ?>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

<script src="/TEST/backend/views/comment/JS/script.js"></script>