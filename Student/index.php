<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    h1{
        text-transform: uppercase;
        text-align: center;
    }
    form{
        /* background-color: blue; */
        width: 50%;
        height: 100%;
        padding: 15px 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 5px 0 0 5px;
    }
    .section{
        width: 60%;
        margin: auto;
        height: 550px;
        display: flex;
        
    }
    .rigth{
        background-image: url('https://pics.craiyon.com/2023-06-16/931faf32947d40c5840c920ca14273e8.webp');
        width: 50%;
        height: 100%;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 0 5px 5px 0;
        background-size: cover;
        background-repeat: no-repeat;
        
    
    }
</style>
<body>
    <div class="container-fluid">
        <div class="container mt-5">
            <h1>Student Registeration Form</h1>
            <div class="section mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="first name">
                    </div>
                    <div class="form-group">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label for="pass" class="form-label">Password</label>
                        <div class="input d-flex gap-3">
                        <input type="password" name="password" id="pass" class="form-control" placeholder="password">
                        <input type="password" name="cpassword"  class="form-control" placeholder="confirm password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="me-3 mt-3">Gender</label>
                        <input type="radio" name="gender" id="gender" value="Male" class="me-2">Male &emsp; &emsp;
                        <input type="radio" name="gender" id="gender" value="Female" class="me-2">Female
                    </div>
                    <div class="form-group">
                        <label for="profile" class="form-label">Profile</label>
                        <input type="file" name="profile" id="profile" class="form-control">
                    </div>
                    <button type="submit" name="btnSubmit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>
                <div class="rigth">

                </div>
            </div>
        </div>
    </div>
    <?php  include 'functions.php' ?>
</body>
</html>