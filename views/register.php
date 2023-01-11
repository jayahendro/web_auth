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
        <form action="/users" method="POST" class="mt-4 mb-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" placeholder="example">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="example">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmPassword" placeholder="confirm password">
                <label for="confirmPassword">Confirm Password</label>
            </div>
            <div class="text-center">
                <input class="btn btn-primary w-100" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <div class="text-center">
            Already have an account? <a href="/login" class="text-decoration-none link-primary">Login</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="../bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>