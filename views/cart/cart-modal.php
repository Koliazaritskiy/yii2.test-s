<?php use yii\helpers\Html; ?>
<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['quantity']?> шт.</td>
                    <td><?= $item['price']?> грн</td>
                    <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Итого: </td>
                <td><?=$session['cart.quantity']?> шт.</td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td><?=$session['cart.sum']?> грн</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h2>Корзина Пуста</h2>
<?php endif; ?>
