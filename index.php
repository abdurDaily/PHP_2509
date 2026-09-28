<?php
include('./env.php');

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
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 shadow p-5 ">

                    <?php
                    if (isset($_GET['message'])) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_GET['message']; ?>
                        </div>
                    <?php
                    }
                    ?>



                    <form action="./controller.php" method="get" enctype="multipart/form-data">

                        <label for="std_name"> <b>student name : ( * )</b> </label>
                        <input name="std_name" id="std_name" class="form-control mb-2" type="text" placeholder="enter your name">

                        <label for="std_email"> <b>student Email : ( * )</b> </label>
                        <input required name="std_email" id="std_email" class="form-control mb-2" type="email" placeholder="enter your valid email">

                        <label for="std_phone"> <b>student Phone Number: ( * )</b> </label>
                        <input required name="std_phone" id="std_phone" class="form-control mb-2" type="text" placeholder="enter your valid phone number">

                        <button class="btn btn-outline-secondary w-100 mt-3" type="submit">submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>