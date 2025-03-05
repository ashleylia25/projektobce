<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okresy Zlínského kraje</title>
</head>
<body>
    <h1>Okresy Zlínského kraje</h1>
    <ul>
        <?php foreach ($okresy as $okresy): ?>
            <li><a href="/okresy/<?= $okresy['id'] ?>/obce"><?= $okresy['nazev'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
