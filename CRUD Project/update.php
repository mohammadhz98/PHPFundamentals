<?php
    require_once('dbconfig.php');

    if(!isset($_GET['id']))
    {
        echo "<script>window.location.href='index.php'</script>";
    }
     
    if(isset($_POST['update']))
    {
        $userId = intval($_GET['id']);
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = intval($_POST['phone']);
        $address = $_POST['address'];

        $sql = "UPDATE users SET firstName=:firstName, lastName=:lastName, email=:email, phone=:phone, address=:address WHERE id=:id";
        
        $query = $conn->prepare($sql);

        $query->bindParam(':id', $userId, PDO::PARAM_STR);
        $query->bindParam(':firstName', $fName, PDO::PARAM_STR);
        $query->bindParam(':lastName', $lName, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);

        $query->execute();
        
        
        echo "<script>alert('رکورد مورد نظر با موفقیت ویرایش یافت.');</script>";
        echo "<script>window.location.href='index.php'</script>";
        

    }
        

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container border p-4 mt-4">

        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4">ویرایش اطلاعات</h3>
                <hr />
            </div>
        </div>
        <form method="POST">
            <?php
                $userId = intval($_GET['id']);

                $sql = "SELECT * FROM `users` WHERE id=:id";
                                
                $query = $conn->prepare($sql);
                $query->bindParam('id', $userId, PDO::PARAM_STR);
                $query->execute();

                $result = $query->fetch();
            ?>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>نام</label>
                    <input type="text" name="firstName" class="form-control" value="<?= htmlentities($result['firstName']);?>">
                </div>
                <div class="form-group col-md-6">
                    <label>نام خانوادگی</label>
                    <input type="text" name="lastName" class="form-control" value="<?= htmlentities($result['lastName']);?>">
                </div>
            </div>
            <div class="form-group">
                <label>ایمیل</label>
                <input type="email" name="email" class="form-control" value="<?= htmlentities($result['email']);?>">
            </div>
            <div class="form-group">
                <label>شماره</label>
                <input type="number" name="phone" class="form-control" value="<?= htmlentities($result['phone']);?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>آدرس</label>
                    <textarea class="form-control" name="address" rows="5"><?= htmlentities($result['address']);?></textarea>

                </div>
            </div>
            <input type="submit" class="btn btn-warning" name="update" value="ویرایش">

        </form>


    </div>
</body>
</html>