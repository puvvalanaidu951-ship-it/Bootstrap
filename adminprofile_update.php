<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:#f4f6f9;
}

.profile-card{
    max-width:900px;
    margin:50px auto;
    background:#fff;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
}

.profile-header{
        background:linear-gradient(to right, #fd0d0d, #9f2121);

    color:white;
    text-align:center;
    padding:30px;
    border-radius:15px 15px 0 0;
}

.profile-img{
    width:130px;
    height:130px;
    border-radius:50%;
    border:5px solid white;
    object-fit:cover;
}

.form-control{
    border-radius:10px;
}

.btn{
    border-radius:10px;

}

</style>

</head>

<body>

<div class="container">

<div class="profile-card">

    <!-- Header -->

    <div class="profile-header">

        <img src="https://wallpapers.com/images/hd/cool-profile-picture-ld8f4n1qemczkrig.jpg"
        class="profile-img mb-3">

        <h3>Admin Profile</h3>

        <p>Update your account information</p>

    </div>

    <!-- Form -->

    <div class="p-4">

        <form>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Full Name
                    </label>

                    <input
                    type="text"
                    class="form-control"
                    placeholder="Admin"
                   
                </div>

                <div class="col-md-6 mb-3">

                   

                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                    type="email"
                    class="form-control"
                   >

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Phone
                    </label>

                    <input
                    type="text"
                    class="form-control"
                   >

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Address
                </label>

                <textarea
                class="form-control"
                rows="3"
                placeholder="Enter your address"></textarea>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        New Password
                    </label>

                    <input
                    type="password"
                    class="form-control"
                    placeholder="Leave blank if unchanged">

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Confirm Password
                    </label>

                    <input
                    type="password"
                    class="form-control"
                    placeholder="Confirm Password">

                </div>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Profile Picture
                </label>

                <input
                type="file"
                class="form-control">

            </div>

            <div class="text-end">

                <button
                type="reset"
                class="btn btn-secondary">

                <i class="fa-solid fa-rotate-left"></i>

                Reset

                </button>

                <button
                type="submit"
                class="btn btn-danger">

                <i class="fa-solid fa-floppy-disk"></i>

                Update Profile

                </button>

            </div>

        </form>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>