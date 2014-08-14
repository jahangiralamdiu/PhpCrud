<?php
        
        require_once '../dbconnection.php';        
           
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();      
                    
        $id = $_GET['id'];
        
        $query = "delete from student where student_id = '$id'";
        
        if(mysql_query($query))
        {
            echo 'Data deleted successfully';
            echo '<a href="index.php">View Students</a>';
        }