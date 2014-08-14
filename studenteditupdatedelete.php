<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student edit update delete</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
         <div id="container">
        
        <h1>Course Registration</h1>

        <div id="cours_reg">
            <form action="studenteditupdatedelete.php" method="post">
                <fieldset>

                    <legend>Course Registration</legend>

                    <label for="title">Course Title : </label>
                    <input type="text" name="title"/>

                    <label for="title">Course Code : </label>

                    <input type="text" name="code"/>

                    <input type="submit" name="submitBtn" value="Submit"/>

                </fieldset>
            </form>       

        </div>

        <div id="course_list">

            <?php
            require_once 'dbconnection.php';

            $dbConnection = new DbConnection();

            $con = $dbConnection->getConnection();


            if (isset($_POST['submitBtn'])) {

                $title = $_POST['title'];

                $code = $_POST['code'];

                $query = "insert into courses values ('null', '$title', '$code')";

                if (mysql_query($query)) {
                    echo 'Data Inserted';
                }
            }

            $query = "select * from courses";

            $resultObj = mysql_query($query);

            echo '<br/> <h3>Course List</h3>';

            echo '<table border="1">';
            echo '<tr>';

            echo '<th>Course ID</th>';

            echo '<th>Title</th>';

            echo '<th>Code</th>';

            echo '</tr>';

            while ($dataRow = mysql_fetch_object($resultObj)) {
                echo '<tr>';

                echo '<td>' . $dataRow->course_id . '</td>';

                echo '<td>' . $dataRow->title . '</td>';

                echo '<td>' . $dataRow->code . '</td>';

                echo '<td>' . "<a href='updatecourse.php?id=$dataRow->course_id&title=$dataRow->title&code=$dataRow->code'>Update</a>" . '</td>';

                echo '<td>' . "<a href='deletecourse.php?id=$dataRow->course_id'>Delete</a>" . '</td>';

                echo '</tr>';
            }


            echo '</table border="1">';



            mysql_close($con);
            ?>

        </div>
        
         </div>

         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="js/bootstrap.min.js"></script>
    </body>
</html>