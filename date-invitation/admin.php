<?php

session_start();

$correct_username = "admin";
$correct_password = "Prakash123";

$error = "";

if (isset($_POST["login"])) {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (
        $username === $correct_username &&
        $password === $correct_password
    ) {

        $_SESSION["admin_logged_in"] = true;

        header("Location: responses.php");

        exit;

    } else {

        $error = "Invalid username or password.";

    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Login 🔐</title>

    <link rel="stylesheet"
          href="style.css">

</head>

<body>

<div class="container">

    <div class="card">

        <div class="heart">
            🔐
        </div>

        <h1>
            Private Area
        </h1>

        <p class="subtitle">
            Login to view your responses
        </p>

        <?php if ($error): ?>

            <p style="color:red; margin-bottom:20px;">

                <?php echo htmlspecialchars($error); ?>

            </p>

        <?php endif; ?>


        <form method="POST">

            <input
                type="text"
                name="username"
                placeholder="Username"
                required
                style="
                    width:100%;
                    padding:15px;
                    margin-bottom:15px;
                    border:1px solid #ddd;
                    border-radius:10px;
                    font-size:16px;
                "
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                style="
                    width:100%;
                    padding:15px;
                    margin-bottom:20px;
                    border:1px solid #ddd;
                    border-radius:10px;
                    font-size:16px;
                "
            >

            <button
                type="submit"
                name="login"
                class="btn yes"
                style="width:100%;"
            >
                🔓 Login
            </button>

        </form>

    </div>

</div>

</body>

</html>