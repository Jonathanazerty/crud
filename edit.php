<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update <?= $_GET['edit'] ?></title>
</head>
<body>
    <form action="index.php?edit=<?= $_GET['edit'] ?>" method="post"><h2><b>UPDATE SUPERCAR</b></h2>
    <br>
        <label for="id">Update ID</label>
        <input type="text" name="updateID" placeholder="Update ID here 🏷️"><br><br>
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