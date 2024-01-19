<?php
    require_once __DIR__ . '/users.php';

    $conn = new mysqli('localhost','root','root','my_db','3306');

    $query = 'SELECT * FROM users';
    $result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users OOP</title>

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach($result as $row) {
                $id = $row['id'];
                ${"user_$id"} = new userDisplay($row['name'],$row['surname'],$row['email'], $row['psw']);
            ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ${"user_$id"}->getName() . ' '; echo ${"user_$id"}->getSurname(); ?></h5>
                        <p class="card-text"><strong>Email:</strong> <?php echo ${"user_$id"}->getEmail(); ?></p>
                        <p class="card-text"><strong>Password:</strong> <?php echo ${"user_$id"}->getPsw(); ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>