<!-- profile.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome to your profile, <?= $user['name'] ?></h1>
    <p>Email: <?= $user['email'] ?></p>
    <a href="/logout">Logout</a>
</body>
</html>
