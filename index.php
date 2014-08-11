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
    </head>
    <body>
        
        <form action="studentregistration.php" method="post">
            
            <fieldset>
                
            <legend>Student Information</legend>
            
            <label for="student_name">Student Name : </label>
            <input type="text" name="student_name"/>
            
            <label for="student_email">Email : </label>
            <input type="email" name="student_email"/>
            
            <label for="mobile">Mobile : </label>
            <input type="number" name="mobile"/>
            
            <label for="course">Select Course : </label>
            
            <select name="courseID[]" multiple="multiple">

                <?php
                require_once 'dbconnection.php';

                $dbConnection = new DbConnection();

                $con = $dbConnection->getConnection();

                mysql_select_db('ftfl');

                $query = mysql_query("select * from courses");

                while ($data = mysql_fetch_object($query)) {
                    echo "<option value = '$data->course_id' >" . $data->title . "</option>";
                }
                ?>

            </select>
            
        <input type="submit" value="Submit" name="submit_button"/>
            
        </fieldset>
            
        </form>
        
    </body>
</html>
