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
        
        <form action="index.php" method="post">
            
            <fieldset>
                
            <legend>Student Information</legend>
            
            <label for="student_id">Student ID : </label>
            <input type="text" name="student_id"/>
            
            <label for="student_name">Student Name : </label>
            <input type="text" name="student_name"/>
            
            <label for="student_email">Email : </label>
            <input type="email" name="student_email"/>
            
            <label for="mobile">Mobile : </label>
            <input type="number" name="mobile"/>
            
            <input type="submit" value="Submit" name="submit_button"/>
            
            </fieldset>
            
        </form>
        
        <?php
        
        require_once 'dbconnection.php';
                
        
        if(isset($_POST['submit_button']))
        {
            
        $ID = $_POST['student_id'];
        
        $name = $_POST['student_name'];
        
        $email = $_POST['student_email'];
        
        $mobile = $_POST['mobile'];   
        
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();       
        
        $query = "insert into student values ('null', '$name', '$email', '$mobile')";
 
        if (mysql_query($query))
            
        {
            echo 'Data Inserted'; 
            
            mysql_close($con);
        }
      
        
        
        echo $ID;
        
        }
        
       
        
        
        // put your code here
        ?>
    </body>
</html>
