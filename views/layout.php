<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Student List</h1>



        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New Student
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">add contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" name="lastName" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputBirthDate" class="form-label">Birth Date</label>
                                <input type="date" class="form-control" id="inputBirthDate" name="birthDate" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputClass" class="form-label">Class</label>
                                <input type="text" class="form-control" id="inputClass" name="class" required>
                            </div>
                            <button type="submit" name="inserer" class="btn btn-primary">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table container">
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
                <td><a href="?action=delete&id=<?= $student['id']; ?>">delete </a> <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $student['id']; ?>">update</a> </td>
            </tr>

            <div class="modal fade" id="exampleModal<?= $student['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">add contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post">
                               <input type="hidden" class="form-control" id="inputLastName" name="id" value="<?= $student['id']; ?>" required>
                                <div class="mb-3">
                                    <label for="inputLastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="inputLastName" name="lastName" value="<?= $student['nom']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="inputFirstName" name="firstName" value="<?= $student['prenom']; ?>"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputBirthDate" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" id="inputBirthDate" name="birthDate" value="<?= $student['date_naissance']; ?>"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputClass" class="form-label">Class</label>
                                    <input type="text" class="form-control" id="inputClass" name="class" value="<?= $student['classe']; ?>" required>
                                </div>
                                <button type="submit" name="inserer" class="btn btn-primary">Add Student</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </tbody>
    </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>