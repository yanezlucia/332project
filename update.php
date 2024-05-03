<?php
    require_once "connect.php";
    if(isset($_POST["isbn"]) && isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["publisher"]) && isset($_POST["num_copies"]) && isset($_POST["genre"])){
        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $num_copies = $_POST['num_copies'];
        $genre = $_POST['genre'];
        
        $id = $_GET["id"];
        $sql = "UPDATE books SET isbn= '$isbn', title= '$title', author= '$author', publisher= '$publisher', num_copies= $num_copies, genre= '$genre'  WHERE isbn= '$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
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
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php 
                require_once "connect.php";
                $sql_query = "SELECT * FROM books WHERE isbn = '".$_GET["id"]."'";
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $isbn = $row['isbn'];
                        $title = $row['title'];
                        $author = $row['author'];
                        $publisher = $row['publisher'];
                        $num_copies = $row['num_copies'];
                        $genre = $row['genre'];
            ?>
                            <form action="updatedata.php?id=<?php echo $isbn; ?>" method="post">
                                <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="">ISBN</label>
                                            <input type="text" name="isbn" id="isbn" class="form-control" value="<?php echo $isbn ?>" required>
                                        </div>
                                        <div class="form-group  col-lg-4">
                                            <label for="">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $title ?>" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="">Author</label>
                                            <input type="text" name="author" id="author" class="form-control" value="<?php echo $author ?>" required>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="">Publisher</label>
                                            <input type="text" name="publisher" id="publisher" class="form-control" value="<?php echo $publisher ?>" required>
                                        </div>
                                        <div class="form-group  col-lg-4">
                                            <label for="">Number of Copies</label>
                                            <input type="number" name="num_copies" id="num_copies" class="form-control" value="<?php echo $num_copies ?>" required>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="">Genre</label>
                                            <input type="text" name="genre" id="genre" class="form-control" value="<?php echo $genre ?>" required>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-lg-12" style="display: grid;align-items:  flex-end;">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                                        </div>
                                </div>
                            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>

</html>
