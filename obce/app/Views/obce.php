<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obce v okresech</title>
</head>
<body>
    <h1>Obce v okresech</h1>
    <table>
        <thead>
            <tr>
                <th>Pořadí</th>
                <th>Název</th>
                <th>Adresní místo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($obce as $index => $obce): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $obce['nazev'] ?></td>
                    <td><?= $obce['adresni_misto'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <?= $pager->links() ?>
    </div>
</body>
</html>