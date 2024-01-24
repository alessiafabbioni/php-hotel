<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
    <?php include 'hotels.php'; ?>
</head>
<div class="container mt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro (km)</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($hotels as $hotel): ?>
            <tr>
                <td><?= $hotel['name'] ?></td>
                <td><?= $hotel['description'] ?></td>
                <td><?= $hotel['parking'] ? 'Disponibile' : 'Non disponibile' ?></td>
                <td><?= $hotel['vote'] ?></td>
                <td><?= $hotel['distance_to_center'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>