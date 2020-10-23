<?php
function save ($id) {
      // Do your processing
      // Save to database of something
    echo $id;
    // echo $message;

    // date_default_timezone_set("Asia/Dhaka");
    // $year=date("Y-m-d h:i:sa");
    // echo $year;
    //             echo "I have a baaluuuuuuuuuu";
                //$myfile = fopen("/data/23-3-2020/LicChatbot/newfile2.txt", "a+") or die("Unable to open file!");
                //fwrite($myfile, $email);
               // fclose($myfile);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "itracer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `todolist` where id='".$id."'";

     $result = mysqli_query($conn, $sql);
        // echo  $result;

    while($row = $result->fetch_assoc()) {
        $projectid= $row["projectID"];
        $issueid= $row["issueID"];
        $developer= $row["developer"];
        $tester= $row["tester"];
}
    $sql = "UPDATE inprogress SET projectID='".$projectid."',issueID= '".$issueid."', developer= '".$developer."', tester= '".$tester."' WHERE id=9";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    //=========================================================//
    
    $sql = "UPDATE todolist SET projectID=' ',issueID= ' ', developer= ' ', tester= ' ' WHERE id='".$id."'";

    if ($conn->query($sql) === TRUE) {
        echo "deleted row";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }    
    $conn->close();

      return true;
}
// PUT THE POST VARIABLES IN

save($_POST['id']);

?>
