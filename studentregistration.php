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
            foreach ($_POST['courseName'] as $courseName) 
            {                
            
            $studentID = mysql_fetch_object(mysql_query("select max(student_id) as student_id from student"));
            
            $courseID = mysql_fetch_object(mysql_query("select course_id from courses where title='$courseName'"));         
            
            $queryTwo = "insert into course_map values ('null', '$studentID->student_id', '$courseID->course_id')";
            
            if (mysql_query($queryTwo))
            {
                
            } 
            
            }
            
            echo 'Student Added Successfully'; 
                
            echo '<a href="index.php">Add another Student</a>';
           
        }
        
         mysql_close($con);
        
        }
