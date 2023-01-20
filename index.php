<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="php/signup.php" method="POST" class="shadow w-450 p-3">
            <h4 class="dispaly-4 text-center">Create Account</h4>
            <?php if(isset($_GET['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error'];?>
                </div>
            <?php }?> 
            <div class="mb-3 ">
                <label class="form-label">Full Name</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="mb-3 ">
                <label class="form-label">Username</label>
                <input type="text" name="uname" class="form-control">
            </div>
            <div class="mb-3 ">
                <label class="form-label">Password</label>
                <input type="pass" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="php/login.php">Login</a>
        </form>
    </div>

</body>

</html>