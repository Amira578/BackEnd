
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.scss">
    <title>sort</title>
</head>
<body>



        <div class="container d-flex justify-content-center flex-column">
            <form method='post' action="order.php">

                <?php
                for ($i = 0; $i < 4; $i++){
                ?>
                <div class="form-group">

                    <div class="row">

                        <div class="col-75">
                            <label for=<?php echo "e$i"?>>employee Name <?php echo $i ?> </label>
                            <input type="text" class="form-control" name=<?php echo "e$i"?>>
                        </div>
                        <div class="col-25">
                            <label for= <?php echo "id$i"?>>ID</label>
                            <input type="number" class="form-control" name=<?php echo "id$i" ?>>
                        </div>
                    </div>
                </div>

                    <?php
                    }
                    ?>

                    <div class="form-group  d-flex justify-content-center">
                        <div class="row">
                            <div class="col-25">
                                <label for="SortType">Sort By</label>
                            </div>
                            <div class="col-75">
                                <select id="SortType" name="sort" class="form-control">
                                    <option selected>Id</option>
                                    <option> Name</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn  submit-btn">Submit</button>
                    </div>
            </form>
        </div>

</body>
</html>