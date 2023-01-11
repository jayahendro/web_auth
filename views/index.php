<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your apps</title>
    <link href="../bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="w-100 h-100 col-12 d-flex justify-content-center align-items-center align-content-center">
    <div class="px-3 py-5 border shadow bg-body rounded-3 col-11 col-sm-7 col-md-4">
        <div class="d-flex flex-column align-items-center mb-4">
            <img src="images/your_logo.png"
                 alt="logo"
                 width="104"
                 height="104">
            <span class="mt-2 fw-bold">Company Name</span>
        </div>
        <form action="" class="mt-4 mb-4">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="username" placeholder="name@example.com">
                <label for="username">Email or Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="text-center">
                <input class="btn btn-primary w-100" type="submit" value="Submit">
            </div>
        </form>
        <div class="text-center">
            Don't have an account? <a href="/register" class="text-decoration-none link-primary">Register</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="../bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>