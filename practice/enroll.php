<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form For Enroll</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text */
        }
        .form-control, .form-select {
            background-color: #333;
            border: 1px solid #444;
            color: #ffffff;
        }
        .form-control:focus, .form-select:focus {
            border-color: #555;
            background-color: #222;
            color:#ffffff;
        }
        .form-check-input {
            border-color: #444;
            background-color: #333;
        }
        .form-check-input:checked {
            background-color: #0d6efd;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0a58ca;
        }
        .btn-primary:hover {
            background-color: #0a58ca;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <form action="data.php" method="get">
            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text"  name="username" class="form-control" id="username" required>
            </div>

            <!-- Email address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" name="cpass" class="form-control" id="confirm-password" required>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Terms and Conditions -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">Agree to terms and conditions</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
