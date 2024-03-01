 <?php

 
use hotel\Room;
use src\functions\Database;

error_reporting(E_ALL);
 ini_set('display_errors', 1);

 
include '../src/hotel/Room.php';

include '../src/functions/Database.php';

function addNewRoom(){
    
    $roomTable = 'Rooms';
  
    if (isset($_POST['submit'])) {
    
        // Retrieve POST data
        $room_no = $_POST['room_no'];
        $type = $_POST['type'];
        $accessibility = $_POST['accessibility'];
        $price = $_POST['price'];

        // Create a new User object
        $room = new Room($room_no, $type, $accessibility, $price);
        
        
        //create the conection
        $connection = new Database(); 
        
        //call the insert to  DB Function Here      
        $connection->insert($roomTable, $room->roomArray());
      
       

  echo "Table data stored successfully!";
        
        
           }
        
        
        
  }

