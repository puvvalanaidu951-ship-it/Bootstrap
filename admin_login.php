<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
}

.login-card{
    width:400px;
    background:#fff;
    border-radius:20px;
    padding:35px;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
}

.login-icon{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:50%;
    background:#0d6efd;
    color:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:35px;
}

.form-control{
    height:50px;
    border-radius:10px;
}

.input-group-text{
    border-radius:10px 0 0 10px;
}

.btn-login{
    height:50px;
    border-radius:10px;
    font-weight:bold;
    font-size:18px;
}

a{
    text-decoration:none;
}

</style>

</head>
<body>

<div class="login-card">

    <div class="text-center mb-4">

        <div class="login-icon">
            <i class="fa-solid fa-user-shield"></i>
        </div>

        <h3 class="mt-3">Admin Login</h3>

        <p class="text-muted">
            Sign in to your dashboard
        </p>

    </div>

    <form action="admin_logincon.php" method="POST">

        <div class="mb-3">  

            <label class="form-label">Username</label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </span>

                <input
                type="text"
                class="form-control"
                name="username"
                placeholder="Enter Username"
                required>

            </div>

        </div>

        <div class="mb-3">

            <label class="form-label">Password</label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="fa-solid fa-lock"></i>
                </span>

                <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Enter Password"
                required>

            </div>

        </div>

        <div class="d-flex justify-content-between mb-3">

            <div class="form-check">

                <input class="form-check-input"
                type="checkbox">

                <label class="form-check-label">
                    Remember Me
                </label>

            </div>

            <a href="#">Forgot Password?</a>

        </div>

        <button
        class="btn btn-primary w-100 btn-login"
        type="submit">

            <i class="fa-solid fa-right-to-bracket"></i>
            Login

        </button>

    </form>

    <hr>

    <div class="text-center">

        <small class="text-muted">
            © 2026 Blood Bank Management System
        </small>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>