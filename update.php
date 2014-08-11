<?php
        require_once 'dbconnection.php';

        $dbConnection = new DbConnection();

        $con = $dbConnection->getConnection();
        
        if(isset($_POST['submitBtn']))
        {

        $id = $_POST['id'];
        $title = $_POST['title'];
        $code = $_POST['code'];

        $query = "update courses set title='$title', code='$code' where course_id='$id' ";

        if (mysql_query($query)) 
        {
            echo 'Data updated successfully';
            echo '<a href="courseregistration.php">View Courses</a>';
        }
        }
        ?>