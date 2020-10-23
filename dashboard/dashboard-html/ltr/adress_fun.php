<?php
    header('Content-Type: application/json');

    $aResult = array();
    function add($a){
        // $c=$a+$b;
        // return $c;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "itracer";

    // Create connection
      $id=$a;
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `todolist`";

    $result = mysqli_query($conn, $sql);
        // echo  $result;
    $ar1=array();
    while($row = $result->fetch_assoc()) {
        $projectid= $row["projectID"];
        $issueid= $row["issueID"];
        $developer= $row["developer"];
        $tester= $row["tester"];
        $ar2=array($projectid, $issueid, $developer, $tester);
        $ar1=array_merge($ar1,$ar2);
    } 

    $sql = "SELECT * FROM `inprogress`";

    $result = mysqli_query($conn, $sql);
        // echo  $result;
    // $ar1=array();
    while($row = $result->fetch_assoc()) {
        $projectid= $row["projectID"];
        $issueid= $row["issueID"];
        $developer= $row["developer"];
        $tester= $row["tester"];
        $ar2=array($projectid, $issueid, $developer, $tester);
        $ar1=array_merge($ar1,$ar2);
    }

    $sql = "SELECT * FROM `done`";

    $result = mysqli_query($conn, $sql);
        // echo  $result;
    // $ar1=array();
    while($row = $result->fetch_assoc()) {
        $projectid= $row["projectID"];
        $issueid= $row["issueID"];
        $developer= $row["developer"];
        $tester= $row["tester"];
        $ar2=array($projectid, $issueid, $developer, $tester);
        $ar1=array_merge($ar1,$ar2);
    }

    $sql = "SELECT * FROM `approved`";

    $result = mysqli_query($conn, $sql);
        // echo  $result;
    // $ar1=array();
    while($row = $result->fetch_assoc()) {
        $projectid= $row["projectID"];
        $issueid= $row["issueID"];
        $developer= $row["developer"];
        $tester= $row["tester"];
        $ar2=array($projectid, $issueid, $developer, $tester);
        $ar1=array_merge($ar1,$ar2);
    } 
     // return array(
     //    'projectid' => $projectid,
     //    'issueid' => $issueid,
     //    'developer' => $developer,
     //    'tester' => $tester,);

    return $ar1;
      }
      function mult($a,$b){
        $c=$a*$b;
        return $c;
      }

      function divide($a,$b){
        $c=$a/$b;
        return $c;
      }
    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'add':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 1) ) {
                   $aResult['error'] = 'Error in arguments!';
               }
               else {
                   $aResult['result'] = add(floatval($_POST['arguments'][0]));
               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

?>
