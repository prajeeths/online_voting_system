<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-box label {
            display: block;
            margin-bottom: 5px;
        }

        .form-box input[type="text"],
        .form-box input[type="password"],
        .form-box input[type="email"],
        .form-box input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-box input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-box p {
            text-align: center;
            margin-top: 15px;
        }

        .form-box p a {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['register'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                

                   
                    header('Location: login.php');
                    exit;
                }
            }
            ?>
            
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required><br><br>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br><br>
                
               
                
                <input type="submit" name="register" value="Register">
            </form>
            
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
