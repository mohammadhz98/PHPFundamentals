<?php
    require_once('dbconfig.php');

    if(isset($_POST['insert']))
    {
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = intval($_POST['phone']);
        $address = $_POST['address'];

        $sql = "INSERT INTO users (firstName, lastName, email, phone, address) VALUES (:firstName, :lastName, :email, :phone, :address)";
        $query = $conn->prepare($sql);
        $query->bindParam(':firstName', $fName, PDO::PARAM_STR);
        $query->bindParam(':lastName', $lName, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->execute();

        $lastInsertId = $conn->lastInsertId();
        if($lastInsertId)
        {
            echo "<script>alert('رکورد مورد نظر با موفقیت اضافه شد.');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else
        {
            echo "<script>alert('مشکلی رخداده است.');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container border p-4 mt-4">

        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4">وارد کردن اطلاعات</h3>
                <hr />
            </div>
        </div>

        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>نام</label>
                    <input type="text" class="form-control" placeholder="مثال : علی" name="firstName">
                </div>
                <div class="form-group col-md-6">
                    <label>نام خانوادگی</label>
                    <input type="text" class="form-control" placeholder="مثال : کریمی" name="lastName">
                </div>
            </div>
            <div class="form-group">
                <label>ایمیل</label>
                <input type="email" class="form-control" placeholder="مثال : ali@gmail.com" name="email">
            </div>
            <div class="form-group">
                <label>شماره</label>
                <input type="number" class="form-control" placeholder="مثال : 0912813774" name="phone">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>آدرس</label>
                    <textarea class="form-control" rows="5" name="address"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="insert" value="ثبت">
        </form>
    </div>
</body>
</html>