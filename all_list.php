<?php
include('./env.php');
$query = "SELECT * FROM student_info ORDER BY id DESC";
$result = mysqli_query($connection, $query);
$records = mysqli_fetch_all($result, 1);




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>




    <nav class="navbar shadow navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./all_list.php">student List</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section>
        <div class="container py-5">
            <table class="table  table-hover table-striped">
                <tr>
                    <th>SN.</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Phone </th>
                    <th>Action</th>
                </tr>

                <?php
                foreach ($records as $key => $record) {
                ?>

                    <tr>
                        <td> <?= ++$key ?> </td>
                        <td> <?= $record['std_name'] ?> </td>
                        <td><?= $record['std_email'] ?></td>
                        <td><?= $record['std_phone'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="./delete.php?dlt_id=<?= $record['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>




                <?php

                }
                ?>


            </table>
        </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>