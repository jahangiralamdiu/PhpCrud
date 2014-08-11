<html>
    <head>
        <meta charset="UTF-8">
        <title></title>           
    </head>

    <body>
        <form action="update.php" method="post">
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
    </body>
</html>