<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">PHP CRUD operations with MySQL</h1>
        <div class="container">
            <form action="adddata.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">ISBN</label>
                        <input type="text" name="isbn" id="isbn" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-4">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Author</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Publisher</label>
                        <input type="text" name="publisher" id="publisher" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-4">
                        <label for="">Number of Copies</label>
                        <input type="number" name="num_copies" id="num_copies" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Genre</label>
                        <input type="text" name="genre" id="genre" class="form-control" required>
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-lg-12" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>
</body>

</html>
