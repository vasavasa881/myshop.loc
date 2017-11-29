<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <?php if ($user['role']=='admin'): ?><a href="/admin">Перейти в адміністративний блок</a> <?php endif; ?>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/">Список покупок</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>