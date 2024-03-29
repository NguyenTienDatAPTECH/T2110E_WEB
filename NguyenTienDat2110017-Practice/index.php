<!doctype html>
<html lang="en">

<head>
    <title>Add new student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .form-customer {
        padding: 20px 30px;
        box-shadow: 0 2px 5px #ccc;
        border-radius: 8px;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <div class="container col-md-4">

        <form action="create-student.php" method="post" class="mt-5 form-customer">

            <h3 class="text-align-center mb-3">FORM ADD NEW STUDENT</h3>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" />
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" />
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address" />
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Enter telephone" />
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Add student">
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>