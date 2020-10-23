<?php
require_once('config001.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/iTracer_logo_small .png">
    <title>iTracer</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div>
        <?php
        if(isset($_POST['add'])){
            $id              = $_POST['id'];
            $projectID       = $_POST['projectID'];
            $issueID         = $_POST['issueID'];
            $developer       = $_POST['developer'];
            $tester          = $_POST['tester'];
           
            
            $sql = "INSERT INTO todolist (id, issueID, projectID, developer, tester ) VALUES (?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$id,$projectID,$issueID,$developer,$tester]);
        }
        ?>
    </div>
    <div class="page-wrapper bg-dark p-t-100 p-b-50" style="background-image: url(assets/img/2153948.png);">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Issue</h2>
                </div>
                <div class="card-body">
                    <form action="issue.php" method="post"> 
                        <div class="form-row">
                         <div class="name">Issue<span style="color: red;">*</span></div> 
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-6" type="text" name="issueID" placeholder="Project Id: 2740 " id="issueID" required>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Project Id<span style="color: red;">*</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="projectID" placeholder="Issue Id: 2740" id="projectID" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ID No.<span style="color: red;">*</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="id" placeholder="5 or 6 or ...." id="id" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Assign Developer<span style="color: red;">*</span></div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6" name="developer" id="developer" required>
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Meanhazul Abedin Turase</option>
                                        <option>Tausif Jaman</option>
                                        <option>Raihan Chowdhury</option>
                                        <option>Ikramul Rofy</option>
                                        <option>Shuvo Abrar Ahmed</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Assign Tester</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-6" name="tester" id="tester" required>
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Meanhazul Abedin Turase</option>
                                        <option>Tausif Jaman</option>
                                        <option>Raihan Chowdhury</option>
                                        <option>Ikramul Rofy</option>
                                        <option>Shuvo Abrar Ahmed</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Discription</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Full Discription"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload File</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your file. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" value="submit" name="add" id="add" href="dashboard.php"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->