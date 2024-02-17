<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>

<body>
    <h2>php TEST</h2>

    <form action="/test" method="post">
        <input type="text" name="username" required>
        <input type="submit">
    </form>

    <form action="../api/test2.php" method="post">
        <input type="text" name="username" required>
        <input type="submit">
    </form>

</body>
</html>
