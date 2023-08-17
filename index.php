<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Расписание группы</title>
</head>
<body>
    <header>
        <h1>Расписание группы <?php echo $_GET['group']; ?></h1>
    </header>
    <main>
        <p>Номер группы: <?php echo $_GET['id']; ?></p>
        <table>
            <tr>
                <th>День недели</th>
                <th>Предмет</th>
                <th>Время</th>
            </tr>
            <!-- Здесь может быть ваш PHP-код для вывода расписания -->
        </table>
    </main>
</body>
</html>
