<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>

            #cours_reg
            {
                width: 600px;
                margin-top: 100px;
                margin-left: 150px;
            }
            
            #course_list 
            {
                width: 600px;
                margin-left: 150px; 
            }

        </style>

    </head>
    <body>
        
        <div id="container">
        
        <h1>Course Registration</h1>

        <div id="cours_reg">
            <form action="courseregistration.php" method="post">
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
    </body>
</html>
