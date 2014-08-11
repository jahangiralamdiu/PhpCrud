<?php
        
        require_once 'dbconnection.php';        
           
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();      
                    
        
        if(isset($_POST['submit_button']))
        {     
        
        $name = $_POST['student_name'];
        
        $email = $_POST['student_email'];
        
        $mobile = $_POST['mobile']; 
     
        $queryOne = "insert into student values ('null', '$name', '$email', '$mobile')";        
        
 
        if (mysql_query($queryOne))
            
        {
            $studentID = mysql_insert_id();
            
            foreach ($_POST['courseID'] as $courseID) 
            {           
                
            
            $queryTwo = "insert into course_map values ('null', '$studentID', '$courseID')";
            
            if (mysql_query($queryTwo))
            {
                
            } 
            
            }
            
            echo 'Student Added Successfully'; 
                
            echo '<br/> <a href="index.php">Add another Student</a>';
           
        }
        
         mysql_close($con);
        
        }
