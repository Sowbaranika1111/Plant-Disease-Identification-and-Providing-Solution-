<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min_fontAwesome.css">
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3 mb-4">Signup Now</h2>
                <!-- Form start -->
                <form action="#" >
                    <div class="mb-3 row">
                        <label for="firstName" class="col-lg-4 col-form-label">First Name:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="firstName" id="firstName" required/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastName" class="col-lg-4 col-form-label">Last Name:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-lg-4 col-form-label">Email:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email" required/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-lg-4 col-form-label">Password:<span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password"
                                autocomplete="new-password" required/>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Signup</button>
                        <p class="text-center text-muted mt-2">When you register by clicking the Signup Button, you
                            agree to our <a href="#">Terms and
                                Conditions</a> and <a href="#">Privacy Policy</a></p>
                        <p class="text-center">Already have an account?<a href="login.php">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>