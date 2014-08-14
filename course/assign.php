<?php
        
        require_once '../dbconnection.php';        
           
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();      
                    
        
        if(isset($_POST['submit_button']))
        {     
        
        $studentID = $_POST['student_id'];
        
      
            
            foreach ($_POST['course_id'] as $courseID) 
            {           
                
            
            $queryTwo = "insert into course_map values ('null', '$studentID', '$courseID')";
            
            if (mysql_query($queryTwo))
            {
                
         
                
            } 
            
            }
            
            echo 'Course Assigned Successfully'; 
                
            echo '<br/> <a href="index.php">Assing Course</a>';
           
        }
        
         mysql_close($con);
 
