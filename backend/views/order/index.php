<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">id</th>
        <th scope="col">Имя</th>
        <th scope="col">Email</th>
        <th scope="col">Телефон</th>
        <th scope="col">Книга</th>
        <th scope="col">Статус</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($order_list as $order){
    ?>
        <tr>
        <th scope="row"><?=$order->id?></th>
        <td><?=$order->name?></td>
        <td><?=$order->email?></td>
        <td><?=$order->phone?></td>
        <td><?=$order->book?> <br> <?=$order->book_autor?></td>
    <?php
        if ($order->approval){
            echo "<td><input class = 'status' type='checkbox' value='$order->id' checked disabled></td>";
        } else {
            echo "<td><input class = 'status' type='checkbox' value='$order->id'></td>";
        }
    ?>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

<script src="/TEST/backend/views/order/JS/script.js"></script>