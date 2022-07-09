<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Login Page</title>

</head>

<body>
    <h3>Login As a Admin or User</h3>
    <form method="post" action="addproduct.php" value="admin">
        <button type="submit" name="admin" class="btn btn-outline-primary">Admin</button>
    </form>
    <form method="post" action="shoping.php" value="user">
        <button type="submit" name="user" class="btn btn-outline-primary">User</button>
    </form>

</body>

</html>