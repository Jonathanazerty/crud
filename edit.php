<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="" method="post"><h2><b>UPDATE SUPERCAR</b></h2>
    <br>
        <label for="name">Update name</label>
        <input type="text" name="updateName" placeholder="Update name here 🏷️"><br><br>
        <label for="price">Update price</label>
        <input type="text" name="updatePrice" placeholder="Update price here 💰"><br><br>
        <label for="engine">Update engine</label>
        <input type="text" name="updateEngine" placeholder="Update engine here ⚙️"><br><br>
        <label for="topspeed">Update topspeed</label>
        <input type="text" name="updateTopspeed" placeholder="Update topspeed here 🏁"><br><br><br>
        <button type="submit" name="UpdateCars">Update 🏎</button>
    </form>
</body>
</html>
<?php

if (isset($_POST['UpdateCars'])){
    if(isset($_POST['UpdateCars']) && !empty($_POST['updateName'])  && !empty($_POST['updatePrice']) && !empty($_POST['updateEngine']) && !empty($_POST['updateTopspeed'])){
        $cardRepository->update($_POST['updateName'], $_POST['updatePrice'], $_POST['updateEngine'], $_POST['updateTopspeed'], $_GET['selectedCar']);
        echo '🆕 Update of the car(s) has been made ! ';

        ?> <br> <a href="index.php"> Go back to the overview </a>
        <?php

    } else {
        echo '⛔ Please fill in all the information.';
    }
}
?>