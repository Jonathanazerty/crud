<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Supercar</title>
</head>
<body>
    <form action="" method="post"><h2><b>DELETE SUPERCAR</b></h2>
    <br>
        <label for="id">Do you want to delete this supercar? </label>
        <input type="text" name="deleteCar" placeholder="This will be deleted"><br><br>
        <button type="submit" name="deleteCar"> Delete 🏎 ❌</button>
        <br> <a href="overview.php"> Go back to the overview</a>
    </form>

    <?php
    if (isset($_POST['deleteCar'])) {
        $cardRepository->delete($_GET['selectedCar']);
        echo "❌ The Supercar has been deleted! ❌";
    }
    ?>

</body>
</html>