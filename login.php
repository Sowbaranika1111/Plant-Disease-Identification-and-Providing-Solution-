<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up and Login Page</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min_fontAwesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5 py-3 ">
            <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
                <h2 class="text-center pt-3">Login</h2>
                <!-- Form start -->
                <form action="#">
                    <div class="mb-3 row">
                        <label for="email" class="col-lg-4 col-form-label">Email:<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" id="email" autocomplete="email"
                                required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                title="Please enter a valid email address" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-lg-4 col-form-label">Password:<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="password" id="password"
                                autocomplete="password" required pattern=".{8,}"
                                title="Password must be at least 8 characters" required />
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-success">Sign in</button>
                            <p class="text-center text-muted mt-2"> Register now for free by clicking here - <a
                                    href="signUp.php">Register</a></p>
                            <a href="plantsPrjt.php"
                                class="home-page text-center text-bold mt-2 fw-bold border-top border-5 p-3">CROP CARE
                                AI</a>
                        </div>
                </form>
                <!-- Form end -->
            </div>
        </div>
    </div>
</body>

</html>