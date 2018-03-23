<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <h1>Кабинет пользователя</h1>
                <h3> Привет <?php echo $user['name'];?>!</h3>

                <ul>
                    <li><a href="/cabinet/edit">Редактировать данные</a></li>
                    <?php if ($user['role'] == 'admin'):?>
                    <li><a href="/admin">Админпанель</a></li>
                    <?php endif;?>
                </ul>

            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include ROOT . '/views/layouts/footer.php'; ?>