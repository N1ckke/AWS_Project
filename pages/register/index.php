<?php
session_start();

if (isset($_SESSION['logged']) AND $_SESSION['logged'] === true) {
	header("Location: ../");
	return;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="../../style/login_register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="../../includes/register.php" method="post">
            <div class="box">
                <div class="header">
                    <h4>Register</h4>
                </div>
                <div class="input-container">
                    <div>
                        <h2>Email</h2>
                        <input class="input" type="email" name="email" required>
                    </div>
                    <div>
                        <h2>Password</h2>
                        <input class="input" type="password" name="password" required>
                    </div>
                </div>
                <div class="footer">
                    <a class="subtitle" href="../login/">ho gia' un account</a>
                    <input class="input-button" type="submit" value="Entra">
                </div>
            </div>
        </form>
    </div>
</body>
</html>