<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
    if(isset($_POST['addCar'])){
        // TODO: create new data
        if(isset($_POST['addCar']) && !empty($_POST['name'])  && !empty($_POST['price']) && !empty($_POST['engine']) && !empty($_POST['topspeed'])){
            $addName = $_POST['name'];
            $addPrice = $_POST['price'];
            $addEngine = $_POST['engine'];
            $addTopspeed = $_POST['topspeed'];

            $sql = "INSERT INTO supercars(name,price,engine,topspeed) VALUES('$addName','$addPrice','$addEngine','$addTopspeed')";
            $result = $this->databaseManager->connection->query($sql);
            echo '✅ <i><b>vroom vroom</b></i> Supercar has been added to the database ! ';
            return $result;

        } else {
            echo '⛔ Please fill in all the information.';
            }    
        }
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        $sql = 'SELECT * FROM supercars';
        // TODO: replace dummy data by real one
         return $this->databaseManager->connection->query($sql);

        // return $result;
        

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update($updateName, $updatePrice, $updateEngine, $updateTopspeed, $oldName)
    {
        //Variables update
        // TODO: update car
            $sqlUpdate = "UPDATE supercars SET name = '$updateName', price = '$updatePrice', engine = '$updateEngine', topspeed = '$updateTopspeed' WHERE name = '$oldName'";
            $result = $this->databaseManager->connection->query($sqlUpdate);
            return $result;
    }

    public function delete(string $oldName)
    {
        //TODO: delete car
            $sqlDelete = "DELETE FROM supercars WHERE name = '$oldName'";
            $result = $this->databaseManager->connection->query($sqlDelete);
            return $result;

        }
    }

