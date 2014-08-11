<html>
    <head>
        <meta charset="UTF-8">
        <title></title>           
    </head>

    <body>
        <form action="updatecourse.php" method="post">
            <fieldset>

                <legend>Update Course</legend>
              
                <label for="id">Course ID : </label>
                
                <?php
                echo "<input type='text' name='id' value='$_GET[id]'/>";
                ?>    
                
                 <label for="title">Course Title : </label>
                
                <?php
                echo "<input type='text' name='title' value='$_GET[title]'/>";
                ?>  
                
                <label for="title">Course Code : </label>

                <?php
                echo "<input type='text' name='code' value='$_GET[code]'/>";
                ?> 

                <input type="submit" name="submitBtn" value="Submit"/>

            </fieldset>
        </form>     


        <?php
        require_once 'dbconnection.php';

        $dbConnection = new DbConnection();

        $con = $dbConnection->getConnection();

        $id = $_POST['id'];
        $title = $_POST['title'];
        $code = $_POST['code'];

        echo '<>';

        $query = "update courses set title='$title', code='$code'";

        if (mysql_query($query)) {
            echo 'Data updated successfully';
        }
        ?>
    </body>
</html>