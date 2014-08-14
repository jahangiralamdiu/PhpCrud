<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student edit update delete</title>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">

            <?php include '../header.php';
            ?>

            <div class="row">

                <div class="col-md-3">

                    <ul class="nav nav-pills nav-stacked col-md-6 ">

                        <li><a href="../dashboard.html">Dashboard</a></li>
                        <li class="active"><a  href="index.php">Student</a></li>
                        <li><a href="../course/index.php">Course</a></li>
                        <li><a href="#">Help</a></li>

                    </ul>

                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-md-12">

                            <h3>Students</h3>

                            <a href="studentregistration.php"><button class="btn-primary">Add Student</button></a>

                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                    <th>ID </th>
                                    <th>Name</th>
                                    <th>View</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Assign Course</th>
                                    </thead>

                                    <tbody>

                                        <?php
                                        require_once '../dbconnection.php';

                                        $dbConnection = new DbConnection();

                                        $con = $dbConnection->getConnection();

                                        $query = "select * from student";

                                        $resultObj = mysql_query($query);

                                        while ($dataRow = mysql_fetch_object($resultObj)) {
                                            echo '<tr>';

                                            echo '<td>' . $dataRow->student_id . '</td>';

                                            echo '<td>' . $dataRow->student_name . '</td>';
                                            
                                            echo '<td>' . "<a href='view.php?id=$dataRow->student_id'>View</a>" . '</td>';

                                            echo '<td>' . "<a href='updatestudent.php?id=$dataRow->student_id&name=$dataRow->student_name&mobile=$dataRow->mobile&email=$dataRow->email'>Update</a>" . '</td>';

                                            echo '<td>' . "<a href='deletestudent.php?id=$dataRow->student_id'>Delete</a>" . '</td>';
                                            
                                            echo '<td>' . "<a href='../course/courseassign.php?id=$dataRow->student_id&name=$dataRow->student_name'>Assign Course</a>" . '</td>';

                                            echo '</tr>';
                                        }
                                        mysql_close($con);
                                        ?>                                       

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>                    

                </div>

            </div>

            

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
