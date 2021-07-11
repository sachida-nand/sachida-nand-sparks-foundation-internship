<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php global $title; ?>
    <title><?php echo isset($title) ? $title : "Basic Banking System"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <nav>
        <div class="logo">
            <h1><a href="index.php"><i class="fas fa-university"></i> Basic Banking System</a></h1>
        </div>
        <ul class="nav-links">
            <li><a class="nav-itmes" href="index.php">Home</a></li>
            <li><a class="nav-itmes" href="adduser.php">Add User</a></li>
            <li><a class="nav-itmes" href="user.php">Users</a></li>
            <li><a class="nav-itmes" href="transaction.php">Make Transaction</a></li>
            <li><a class="nav-itmes" href="transHistory.php">Transaction History</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>