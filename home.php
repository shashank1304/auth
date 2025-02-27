<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://unpkg.com/carbon-components/css/carbon-components.min.css">
    <script src="https://unpkg.com/carbon-components/scripts/carbon-components.min.js"></script>
    <style>
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .social-media {
            text-align: center;
            margin-top: 20px;
        }
        .social-media a {
            margin: 0 10px;
            text-decoration: none;
            color: #3b5998; /* Facebook color */
        }
        .social-media a.twitter {
            color: #1da1f2; /* Twitter color */
        }
        .social-media a.instagram {
            color: #e1306c; /* Instagram color */
        }
    </style>
</head>
<body>
    <header class="bx--header">
        <div class="bx--header__name">Home Page</div>
    </header>
    <main class="bx--content">
        <div class="bx--grid">
            <div class="bx--row">
                <div class="bx--col-lg-12">
                    <h2 class="bx--type-expressive-heading-04">WELCOME </h2>
                </div>
            </div>
            <div class="bx--row">
                <div class="bx--col-lg-4">
                    <button class="bx--btn bx--btn--primary">Shashank</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>