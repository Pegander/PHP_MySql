
<?php
//Always start with session_start because header checks session
session_start();
include "createDatabase.php";
include "./Base/header.php";
include "mysqli_connect.php";

//If user is logged in check what privilage the user has
if(isset($_SESSION["usertype"])){
        //Use Switch to decice what level of privilage the user has
        switch($_SESSION["usertype"]){
            case "PL1":
            //Show all events, add event and delete event
            $sql = "SELECT * FROM upcomingEvents";
            $result = $dbc->query($sql);
            if($result->num_rows > 0) {
                //Cycle array made by fetch_assoc
                while($row = $result->fetch_assoc()){
                    echo 
                    "<p>Eventid: " .$row["id"] . 
                    "</p><p>Event: " .$row["eventName"] . 
                    "  </p><p>Info om event: " . $row["eventInfo"] . 
                    "</p></p><p>Plats: " . $row["eventPlace"] . 
                    "</p></p><p>När är eventet: " . $row["eventTime"] . "</p><br/>";
                }    
            } else {
                echo "Inga event för tillfället";
            }
            echo 
            "<div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 text-center'>
                        <a href='/php_mysql/html/eventAdder.php' class='btn btn-info' role='button'>Lägg till event</a> 
                        <br />
                    </div>
                </div>
            </div>
            
            <form class='justify-content-center'  method='POST' action='removeEvent.php'>
                <div class='form-group'>
                    <label for='id'>Eventid för event att ta bort:</label>
                    <input type='number' name='id'>
                    <input class='btn btn-info' type='submit' value='Ta bort'>
                </div>
            </form>"; 
                break;

            case "PL2":
            //Show all events, add event
            $sql = "SELECT * FROM upcomingEvents";
            $result = $dbc->query($sql);
            if($result->num_rows > 0) {
                //Cycle array made by fetch_assoc
                while($row = $result->fetch_assoc()){
                    echo "<p>Event: " .$row["eventName"] . "  </p><p>Info om event: " . $row["eventInfo"] . "</p></p><p>Plats: " . $row["eventPlace"] . "</p></p><p>När är eventet: " . $row["eventTime"] . "</p><br/>";
                }    
            } else {
                echo "Inga event för tillfället";
            };
            echo 
            "<div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 text-center'>
                        <a href='/php_mysql/html/eventAdder.php' class='btn btn-info' role='button'>Lägg till event</a> 
                        <br />
                    </div>
                </div>
            </div>"; 
                break;

            case "PL3":
            //Show all events
                $sql = "SELECT * FROM upcomingEvents";
                $result = $dbc->query($sql);
                if($result->num_rows > 0) {
                    //Cycle array made by fetch_assoc
                    while($row = $result->fetch_assoc()){
                        echo "<p>Event: " .$row["eventName"] . "  </p><p>Info om event: " . $row["eventInfo"] . "</p></p><p>Plats: " . $row["eventPlace"] . "</p></p><p>När är eventet: " . $row["eventTime"] . "</p><br/>";
                    }    
                } else {
                    echo "Inga event för tillfället";
                };
                break;
        } 
} else {
    $sql = "SELECT * FROM upcomingEvents";
    $result = $dbc->query($sql);
    if($result->num_rows > 0) {
        //Cycle array made by fetch_assoc
        while($row = $result->fetch_assoc()){
            //Check if eventtime > this time (if eventtime is expired)
            $eventtime = $row["eventTime"];
            $eventdate = strtotime($eventtime);
            if (date("Y-m-d", $eventdate) > date("Y-m-d")){
                //Print out only if event has not happened
                echo "<p>Event: " .$row["eventName"] . "  </p><p>Info om event: " . $row["eventInfo"] . "</p></p><p>Plats: " . $row["eventPlace"] . "</p></p><p>När är eventet: " . $row["eventTime"] . "</p><br/>";
            }    
        } 
    
    } else {
        echo "Inga event för tillfället";
    };
}
include "./Base/footer.html";
?>