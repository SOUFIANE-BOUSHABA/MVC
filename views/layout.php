<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Student List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Birth Date</th>
                    <th>Class</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $student['id']; ?></td>
                        <td><?= $student['nom']; ?></td>
                        <td><?= $student['prenom']; ?></td>
                        <td><?= $student['date_naissance']; ?></td>
                        <td><?= $student['classe']; ?></td>
                        <td><a href="">delete </a>  <a href="">update</a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="row">
            <?php foreach ($students as $student): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $student['nom'] . ' ' . $student['prenom']; ?></h5>
                            <p class="card-text">
                                <strong>ID:</strong> <?= $student['id']; ?><br>
                                <strong>Birth Date:</strong> <?= $student['date_naissance']; ?><br>
                                <strong>Class:</strong> <?= $student['classe']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
