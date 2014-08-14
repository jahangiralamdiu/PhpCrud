<?php
        require_once '../dbconnection.php';

        $dbConnection = new DbConnection();

        $con = $dbConnection->getConnection();
        
        if(isset($_POST['submitBtn']))
        {

        $id = $_POST['id'];
        
        $name = $_POST['name'];
        
        $mobile = $_POST['mobile'];
        
        $email = $_POST['email'];
        

        $query = "update student set student_name='$name', mobile='$mobile', email='$email' where student_id='$id' ";

        if (mysql_query($query)) 
        {
            echo 'Data updated successfully';
            echo '<a href="index.php">View Students</a>';
        }
        }
        ?>