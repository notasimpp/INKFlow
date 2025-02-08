<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InkFlow</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="formbox" style="height: 350px;">
        <form action="validate.php" method="post" onsubmit="return validate()">
            <h1 id="login">Login</h1>
            <input type="text" id="uname" name="uname" placeholder="Username"><br><br>
            <input type="password" id="pass" name="pass" placeholder="Password"><br><br>
            <div id="error" style="color: rgb(211, 36, 36);">
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "per") {
                            echo "<p style='color: red;'>Incorrect Password.</p>";
                        } elseif ($_GET['error'] == "uer") {
                            echo "<p style='color: red;'>Username not found.</p>";
                        }
                    }
                ?>
            </div><br>
            <button type="submit" id="submit" name="submit">Login</button><br><br>
            Don't have an account? <a href="register.php" style="color: #7494ec;">Register</a><br>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>
