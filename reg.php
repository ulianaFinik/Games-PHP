<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Registration</h2>
            <p>Enter your details below</p>

            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Name</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line" name="email">

                <label>Password</label>
                <input type="password" class="one-line" name="password">

                <button type="submit">Get reg</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>