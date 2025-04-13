<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulačka</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'aside.php'; ?>
    <?php
    if (isset($_SESSION['msg'])) {
        echo '<p>' . htmlspecialchars($_SESSION['msg']) . '</p>';
        unset($_SESSION['msg']);
    }
    ?>

    <form action="kalkulacka_vypocet.php" method="post">
        <input type="text" name="cislo" required>
        <br><br>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
        <input type="submit" name="operation" value="=">
    </form>
</body>
</html>

<?php include 'footer.php'; ?>
</body>
</html>
