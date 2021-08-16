<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodCARcard - track your collection of SUPER CARS</title>
</head>
<body>

<h1>GoodCARcard - track your collection of SUPER CARS</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= " Id: " . $card['id'] . " <br>Name of the car: " . $card['name'] . "🏷️" . " <br>Price : " . $card['price'] . "$ 💰" . " <br>Type of engine : " . $card['engine'] . "⚙️" . "<br>Topspeed : " . $card['topspeed'] . "km/u 🏁"?></li>
    <?php endforeach; ?>
</ul>
<br>
    <form method="post"><h2><b>NEW SUPERCAR</b></h2>
    <br>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Add name here 🏷️"><br><br>
        <label for="price">Price</label>
        <input type="text" name="price" placeholder="Add price here 💰"><br><br>
        <label for="engine">Engine</label>
        <input type="text" name="engine" placeholder="Add engine here ⚙️"><br><br>
        <label for="topspeed">Topspeed</label>
        <input type="text" name="topspeed" placeholder="Add topspeed here 🏁"><br><br><br>
        <button type="submit" name="addCar">Add 🏎</button>
    </form>
</body>
</html>