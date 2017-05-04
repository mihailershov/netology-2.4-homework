<?php

    require_once 'core.php';

    $allFiles = glob('tests/*.json');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test's list</title>
    <link rel="stylesheet" href="styles/list.css">
</head>
<body>
    <a href="admin.php" class="back"><div>< Назад</div></a>
    <h2>Все тесты</h2>
    <hr>

    <!-- Выводим все тесты -->

    <?php if (!empty($allFiles)): ?>
        <?php dispayAllTests($allFiles); ?>
    <?php else: ?>
        <?php echo 'Пока не загружено ни одного теста'; ?>
    <?php endif; ?>

</body>
</html>