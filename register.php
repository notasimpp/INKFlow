<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InkFlow</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div id="formbox" >
        <form action="storedata.php" method="post" onsubmit="return validate()" target="stall">
            <h1 id="login">Register</h1>
            <input type="text" id="uname" name="uname" placeholder="Username"><br><br>
            <input type="text" id="email" name="email" placeholder="Email"><br><br>
            <input type="password" id="pass" name="pass" placeholder="Password"><br><br>
            <input type="password" id="pass2" name="pass2" placeholder="Confirm Password"><br><br>
            <br><div id="error" style="color: rgb(211, 36, 36);"></div><br>
            <button type="submit" id="submit" name="submit">Register</button><br><br>
            Already have an account? <a href="login.php" style="color: #7494ec;">Login</a><br>
        </form>
    </div>
    <script src="register.js"></script>
    <iframe name="stall" style="display:none;"></iframe>
</body>
</html>