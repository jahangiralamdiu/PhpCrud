<?php
        
        require_once 'dbconnection.php';        
           
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();      
                    
        
        if(isset($_POST['submit_button']))
        {     
        
        $name = $_POST['student_name'];
        
        $email = $_POST['student_email'];
        
        $mobile = $_POST['mobile']; 
        
        $courseName = $_POST['courseName'];
            
        
        $queryOne = "insert into student values ('null', '$name', '$email', '$mobile')";        
        
 
        if (mysql_query($queryOne))
            
        {
            $studentID = mysql_fetch_object(mysql_query("select max(student_id) as student_id from student"));
            
            $courseID = mysql_fetch_object(mysql_query("select course_id from courses where title='Laravel'"));
            
            echo $courseID->course_id. ' '.$studentID->student_id;
            
           $queryTwo = "insert into course_map values ('null', '$courseID->course_id', '$studentID->student_id')";
            
            if (mysql_query($queryTwo))
            {
                echo 'Student Added Successfully'; 
            }                   
           
        }
        
         mysql_close($con);
        
        }
