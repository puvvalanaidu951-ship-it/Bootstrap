<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f2f5ff;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container{
    width:800px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 20px rgba(0,0,0,.2);
}

.container h2{
    text-align:center;
    margin-bottom:25px;
    color:#1e3a8a;
}

.row{
    display:flex;
    gap:20px;
    margin-bottom:18px;
}

.input-box{
    flex:1;
}

.input-box label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
}

.input-box input,
.input-box select,
textarea{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:16px;
}

textarea{
    resize:none;
}

button{
    width:100%;
    padding:15px;
    background:#2563eb;
    color:white;
    border:none;
    border-radius:5px;
    font-size:18px;
    cursor:pointer;
    margin-top:20px;
}

button:hover{
    background:#1d4ed8;
}

</style>

</head>
<body>

<div class="container">

<h2>Student Registration Form</h2>

<form method="POST" action="practreg.php">

<div class="row">

<div class="input-box">
<label>Full Name</label>
<input type="text" name="name" required>
</div>

<div class="input-box">
<label>Student ID</label>
<input type="text" name="student_id" required>
</div>

</div>

<div class="row">

<div class="input-box">
<label>Email</label>
<input type="email" name="email" required>
</div>
<div class="input-box">
<label>Password</label>
<input type="password" name="password" required>
</div>

<div class="input-box">
<label>Phone Number</label>
<input type="text" name="phone" required>
</div>

</div>

<div class="row">

<div class="input-box">
<label>Date of Birth</label>
<input type="date" name="dob" required>
</div>

<div class="input-box">
<label>Gender</label>

<select name="gender" required>
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>

</div>

</div>

<div class="row">

<div class="input-box">
<label>Department</label>

<select name="department" required>
<option value="">Select Department</option>
<option>CSE</option>
<option>CSM</option>
<option>AI & ML</option>
<option>ECE</option>
<option>EEE</option>
<option>Civil</option>
<option>Mechanical</option>
</select>

</div>

<div class="input-box">
<label>Year</label>

<select name="year" required>
<option value="">Select Year</option>
<option>1st Year</option>
<option>2nd Year</option>
<option>3rd Year</option>
<option>4th Year</option>
</select>

</div>

</div>

<div class="input-box">
<label>Address</label>
<textarea name="address" rows="4" required></textarea>
</div>

<button type="submit" name="register">Register Student</button>

</form>

</div>

</body>
</html>