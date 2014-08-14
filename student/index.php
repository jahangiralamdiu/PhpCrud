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

            <div class="row">
                <div class="col-mid-12">
                    <div class="page-header text-center">
                        <h1>Student Management</h1>
                    </div>
                </div>
            </div>

            <div class="row">

                <nav class="navbar navbar-default" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand glyphicon glyphicon glyphicon-th" href="#"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="http://localhost/PhpCrud/dashboard.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Student <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://localhost/PhpCrud/student/index.php">Students</a></li>
                                    <li><a href="http://localhost/PhpCrud/student/studentregistration.php">Add New</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://localhost/PhpCrud/student/studentregistration.php">View</a></li>                                

                                </ul>
                            </li>                          


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Course<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://localhost/PhpCrud/course/index.php">courses</a></li>
                                    <li><a href="http://localhost/PhpCrud/course/courseregistration.php">Add New</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://localhost/PhpCrud/course/courseregistration.php">View</a></li>                                

                                </ul>
                            </li>

                            <li><a href="#">About Me</a></li> 
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                        </form>

                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>

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

            <div class="row">
                <div class="col-md-12">
                    <div class="well">
                        <p>@Copy Right Information. Developed by Md. Jahangir Alam</p>                     
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
