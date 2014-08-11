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
        
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection();
                
        
        if(isset($_POST['submitBtn']))
        {
      
        $title = $_POST['title'];
        
        $code = $_POST['code'];               
        
        $query = "insert into courses values ('null', '$title', '$code')";
 
        if (mysql_query($query))
            
        {
            echo 'Data Inserted'; 
            
            
        }
      

        }
        
        $query = "select * from courses";
        
        $resultObj = mysql_query($query);
      
        echo '<table border="1">';
        
        while($dataRow = mysql_fetch_object($resultObj))
        {
            echo '<tr>';
            
            echo '<td>'.$dataRow->course_id.'</td>';
            
            echo '<td>'.$dataRow->title.'</td>';
            
            echo '<td>'.$dataRow->code.'</td>';
            
            echo '<td>'."<a href='updatecourse.php?$dataRow->course_id'>Update</a>".'</td>';
            
            echo '<td>'."<a href='deletecourse.php?id=$dataRow->course_id'>Delete</a>".'</td>';
            
            echo '</tr>';
        }
       
        
        echo '</table border="1">';
        
        
        
        mysql_close($con);
        
        ?>
    </body>
</html>
