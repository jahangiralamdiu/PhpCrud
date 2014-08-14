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
                    <div class="page-header">
                        <h1>Student Management</h1>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">

                    <ul class="nav nav-pills nav-stacked col-md-6 ">
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="student/index.php">Student</a></li>
                        <li><a href="course/index.php">Course</a></li>
                        <li><a href="#">Help</a></li>

                    </ul>
                </div>

                <div class="col-md-9">

                    <div class="row">

                        <div class="col-md-12">

                            <h3>Courses</h3>

                            <a href="#"><button class="btn-primary">Add new Course</button></a>

                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                    <th>ID </th>
                                    <th>Title</th>
                                    <th>View</th>
                                    <th>Update</th>
                                    <th>Delete</th>                                  
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>Laravel</td>
                                            <td><a>View</a></td>
                                            <td><a href="#">Update</a></td>
                                            <td><a class="alert-link" href="#">Delete</a></td>                                         
                                        </tr>

                                        <tr>
                                            <td>102</td>
                                            <td>ASP.Net</td>
                                            <td><a>View</a></td>
                                            <td><a href="#">Update</a></td>
                                            <td><a class="alert-link" href="#">Delete</a></td>                                            
                                        </tr>

                                        <tr>
                                            <td>103</td>
                                            <td>Unity-3D</td>
                                            <td><a>View</a></td>
                                            <td><a href="#">Update</a></td>
                                            <td><a class="alert-link" href="#">Delete</a></td>                                          
                                        </tr>

                                        <tr>
                                            <td>104</td>
                                            <td>Foundation</td>
                                            <td><a>View</a></td>
                                            <td><a href="#">Update</a></td>
                                            <td><a class="alert-link" href="#">Delete</a></td>

                                        </tr>                                        

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
