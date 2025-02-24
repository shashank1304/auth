<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/carbon-components/css/carbon-components.min.css">
</head>
<body>
    <div class="bx--grid">
        <div class="bx--row">
            <div class="bx--col-lg-6 bx--offset-lg-3">
                <h2 class="bx--type-expressive-heading-04">Login</h2>
                <form action="login_action.php" method="post">
                    <div class="bx--form-item">
                        <label for="username" class="bx--label">Username:</label>
                        <input type="text" id="username" name="username" class="bx--text-input" required>
                    </div>
                    <div class="bx--form-item">
                        <label for="password" class="bx--label">Password:</label>
                        <input type="password" id="password" name="password" class="bx--text-input" required>
                    </div>
                    <button type="submit" class="bx--btn bx--btn--primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/carbon-components/scripts/carbon-components.min.js"></script>
    <script>
        carbonComponents.watch();
    </script>
</body>
</html>
