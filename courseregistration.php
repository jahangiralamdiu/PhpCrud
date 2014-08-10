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
        <form action="courseregistration.php" method="post">
            <fieldset>
                
                <legend>Course Registration</legend>
                
                <label for="title">Course Title : </label>
                <input type="text" name="title"/>
                
                 <label for="title">Course Code : </label>
                 
                <input type="text" name="code"/>
                
                <input type="submit" name="submitBtn" value="Submit"/>
                
            </fieldset>
        </form>
        <?php
        
        require_once 'dbconnection.php';
                
        
        if(isset($_POST['submitBtn']))
        {
      
        $title = $_POST['title'];
        
        $code = $_POST['code'];
  
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();       
        
        $query = "insert into courses values ('null', '$title', '$code')";
 
        if (mysql_query($query))
            
        {
            echo 'Data Inserted'; 
            
            mysql_close($con);
        }
      

        }
        // put your code here
        ?>
    </body>
</html>
