<?php include 'controller/updateController.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM `employee` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $employee_name = $row['employee_name'];
            $employee_id = $row['employee_id'];
            $employee_designation = $row['employee_designation'];
            $employee_salary = $row['employee_salary'];
            $employee_department = $row['employee_department'];
            $employee_contact = $row['employee_contact'];
            $employee_email = $row['employee_email'];
            $employee_address = $row['employee_address'];
            $employee_city = $row['employee_city'];
            $employee_country = $row['employee_country'];
            $employee_gender = $row['employee_gender'];
        }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php crud application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h2>Employee Managment System</h2>
                        <a class="ms-auto" href="index.php"><button class="btn btn-primary btn-sm">Back</button></a>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Name</label>
                                        <input type="text" class="form-control" name="employee_name"
                                            value="<?php echo $employee_name ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Employee ID</label>
                                        <input type="text" class="form-control" name="employee_id"
                                            value="<?php echo $employee_id ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="employee_designation"
                                            value="<?php echo $employee_designation ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Salary</label>
                                        <input type="text" class="form-control" name="employee_salary"
                                            value="<?php echo $employee_salary ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Department</label>
                                        <input type="text" class="form-control" name="employee_department"
                                            value="<?php echo $employee_department ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contact</label>
                                        <input type="text" class="form-control" name="employee_contact"
                                            value="<?php echo $employee_contact ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="employee_email"
                                            value="<?php echo $employee_email ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="employee_address"
                                            value="<?php echo $employee_address ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" name="employee_city"
                                            value="<?php echo $employee_city ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control" name="employee_country"
                                            value="<?php echo $employee_country ?>">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" name="employee_gender"
                                            value="Male" <?php if ($employee_gender == 'Male') echo "checked" ?>>
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" name="employee_gender"
                                            value="Female" <?php if ($employee_gender == 'Female') echo "checked" ?>>
                                        <label class="form-check-label">Female</label>
                                    </div>
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

    } else {

        header('Location: index.php');
    }
}

?>