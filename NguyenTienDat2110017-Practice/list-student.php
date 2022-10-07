<!doctype html>
<html lang="en">

<head>
    <title>List student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php
require("db.php");
$sql = "SELECT * FROM student";
$pdo_stm = $conn->prepare($sql);
$result = $pdo_stm->execute();
if ($result == FALSE)
    die("<h3>Connect Database error.!</H3>");
if ($pdo_stm->rowCount() <= 0)
    die("<h3>No students have been added yet.!</h3>");
$rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
?>

<body>

    <div class="container col-md-8 mt-5">
        <h1 class="tex-center">List Student</h1>
        <a href="index.php" class="btn btn-primary mt-5">Go to Add new student</a>
        <table class="table table-striped table-inverse mt-5">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $student) { ?>
                <tr>
                    <td scope="row">
                        <?php echo $student['name']; ?>
                    </td>
                    <td>
                        <?php echo $student['age']; ?>
                    </td>
                    <td>
                        <?php echo $student['address']; ?>
                    </td>
                    <td>
                        <?php echo $student['telephone']; ?>
                    </td>
                    <td class="text-right">
                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>