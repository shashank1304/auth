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
    <div id="app">
        <header>
            <nav class="ant-menu ant-menu-dark ant-menu-horizontal">
                <div class="ant-menu-item"><a href="index.html">HOME</a></div>
                <div class="ant-menu-item"><a href="challenges.html">Challenges</a></div>
                <div class="ant-menu-item"><a href="scoreboard.html">Scoreboard</a></div>
                <div class="ant-menu-item"><a href="events.html">Events</a></div>
                <div class="ant-menu-item"><a href="admin.html">Admin Panel</a></div>
                <div class="ant-menu-item"><a href="profile.html">Profile</a></div>
                <div class="ant-menu-item"><a href="teams.html">Teams</a></div>
                <div class="ant-menu-item"><a href="statistics.html">Statistics</a></div>
                <div class="ant-menu-item"><a href="settings.html">Settings</a></div> <!-- Added Settings option -->
                <div class="ant-menu-item"><a href="index.php">Login</a></div>
                <div class="ant-menu-item"><a href="index.php">Register</a></div>
            </nav>
        </header>
        <main style="padding: 50px;">
            <div class="ant-typography">
                <h1 class="ant-typography-title">CTF Platform</h1>
                <p class="ant-typography-paragraph">Your one-stop destination for Capture The Flag competitions.</p>
                <p class="ant-typography-paragraph">Explore the challenges, check the scoreboard, and join the events!</p>
            </div>
            <div class="ant-row" style="margin-top: 30px;" gutter={[16, 16]}>
                <div class="ant-col ant-col-8">
                    <div class="ant-card ant-card-bordered">
                        <div class="ant-card-head">
                            <h3 class="ant-card-head-title">Latest Challenges</h3>
                        </div>
                        <div class="ant-card-body">
                            <p>Challenge 1: SQL Injection</p>
                            <p>Challenge 2: XSS Attack</p>
                            <p>Challenge 3: Buffer Overflow</p>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-8">
                    <div class="ant-card ant-card-bordered">
                        <div class="ant-card-head">
                            <h3 class="ant-card-head-title">Upcoming Events</h3>
                        </div>
                        <div class="ant-card-body">
                            <p>Event 1: CTF Beginners</p>
                            <p>Event 2: Advanced CTF</p>
                            <p>Event 3: Pro+ CTF</p>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-8">
                    <div class="ant-card ant-card-bordered">
                        <div class="ant-card-head">
                            <h3 class="ant-card-head-title">Top Teams</h3>
                        </div>
                        <div class="ant-card-body">
                            <p>Team 1: Cyber Warriors</p>
                            <p>Team 2: Hackers United</p>
                            <p>Team 3: Code Breakers</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer style="text-align: center; padding: 20px;">
            <div class="ant-typography">
                <p class="ant-typography-paragraph">© 2023 CTF Platform. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/antd/4.16.13/antd.min.js"></script>
</body>
</html>
