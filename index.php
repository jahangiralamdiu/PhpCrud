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
            
            <label for="course">Select Course : </label>
            
            <select name="course">

                <?php
                require_once 'dbconnection.php';

                $dbConnection = new DbConnection();

                $con = $dbConnection->getConnection();

                mysql_select_db('ftfl');

                $query = mysql_query("select title from courses");

                while ($data = mysql_fetch_object($query)) {
                    echo "<option>" . $data->title . "</option>";
                }
                ?>

            </select>
            
        <input type="submit" value="Submit" name="submit_button"/>
            
        </fieldset>
            
        </form>
        
        <?php
        
        require_once 'dbconnection.php';        
           
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();      
                    
        
        if(isset($_POST['submit_button']))
        {
            
        $ID = $_POST['student_id'];
        
        $name = $_POST['student_name'];
        
        $email = $_POST['student_email'];
        
        $mobile = $_POST['mobile'];  
            
        
        $query = "insert into student values ('null', '$name', '$email', '$mobile')";
 
        if (mysql_query($query))
            
        {
            echo 'Data Inserted'; 
            
            mysql_close($con);
        }
             
        
        echo $ID;
        
        }
        
        $query =mysql_query("select title from courses");
        
        echo 'Course Name : ';
        
        echo '<select>';
               
        while ( $data = mysql_fetch_object($query))
        {
            echo "<option>".$data->title."</option>";
           
        }        
        echo '<select>';
                      
        
        // put your code here
        ?>
    </body>
</html>
