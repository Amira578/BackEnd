<?php

$employees = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // echo var_dump($_POST);


    for ($i = 0; $i < 4; $i++) {
        $employees[$i] = array("employee" => ucfirst($_POST["e$i"]), "id" => $_POST["id$i"]);
    }

    if ($_POST["sort"] == "Id") {
        $id = array_column($employees, 'id');

        array_multisort($id, SORT_ASC, $employees);
    }
    if ($_POST["sort"] == "Name") {
        $emp = array_column($employees, 'employee');

        array_multisort($emp, SORT_ASC, $employees);

    }
//var_dump($employees);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.scss">
    <title>sort</title>
</head>
<body>
<div class="  my-5 container  d-flex justify-content-center align-items-center">
    <div class="row ">
        <h3 class="bg-primary mb-3">Employee Name</h3>

 <?php

foreach ($employees as $employee) {
    ?>

            <div class="col-md-10">

                <h5><?php echo $employee['employee']?></h5>

            </div>

            <div class="col-md-2">

                <h5><?php echo $employee['id']?></h5>
            </div>

    <?php ;
}
?>
    </div>
</div>

</body>