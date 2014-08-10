<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    <form method="post">
        <label for="courseName">Name : </label>
        <input type="text" name="courseName"/>
    </form>
        
    </head>
    <body>
        <?php
         require_once 'dbconnection.php';                
            
            
        
        $dbConnection = new DbConnection();
        
        $con = $dbConnection->getConnection(); 
        
        mysql_select_db('ftfl');
        
        $query =mysql_query("select title from courses");
        
        echo 'Course Name : ';
        
        echo '<select>';
               
        while ( $data = mysql_fetch_object($query))
        {
            echo "<option>".$data->title."</option>";
           
        }        
        echo '<select>';
         ?>
    </body>
</html>
