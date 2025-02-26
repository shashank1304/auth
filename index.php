<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($password === $row['password']) {
                header("Location: home.php");
                exit();
            } else {
                echo "Invalid password";
            }
        } else {
            echo "No user found";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login and Register</title>
    <link rel="stylesheet" href="https://unpkg.com/carbon-components/css/carbon-components.min.css">
    <script src="https://unpkg.com/carbon-components/scripts/carbon-components.min.js"></script>
</head>
<body>
    <header class="bx--header">
        <div class="bx--header__name">Auth Page</div>
    </header>
    <main class="bx--content">
    <h1>Auth</h1>
        <div class="bx--grid">
            <div class="bx--row">
                <div class="bx--col-lg-6">
                    <h2 class="bx--type-expressive-heading-03">Login</h2>
                    <form method="POST" action="">
                        <div class="bx--form-item">
                            <label for="login-username" class="bx--label">Username</label>
                            <input type="text" id="login-username" name="username" class="bx--text-input" required>
                        </div>
                        <div class="bx--form-item">
                            <label for="login-password" class="bx--label">Password</label>
                            <input type="password" id="login-password" name="password" class="bx--text-input" required>
                        </div>
                        <button type="submit" name="login" class="bx--btn bx--btn--primary">Login</button>
                    </form>
                </div>
                <div class="bx--col-lg-6">
                    <h2 class="bx--type-expressive-heading-03">Register</h2>
                    <form method="POST" action="">
                        <div class="bx--form-item">
                            <label for="register-username" class="bx--label">Username</label>
                            <input type="text" id="register-username" name="username" class="bx--text-input" required>
                        </div>
                        <div class="bx--form-item">
                            <label for="register-password" class="bx--label">Password</label>
                            <input type="password" id="register-password" name="password" class="bx--text-input" required>
                        </div>
                        <div class="bx--form-item">
                            <label for="register-email" class="bx--label">Email</label>
                            <input type="email" id="register-email" name="email" class="bx--text-input" required>
                        </div>

                        <button type="submit" name="register" class="bx--btn bx--btn--secondary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
