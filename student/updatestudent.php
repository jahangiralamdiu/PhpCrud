<html>
    <head>
        <meta charset="UTF-8">
        <title></title>           
    </head>

    <body>
        <form action="update.php" method="post">
            <fieldset>

                <legend>Update Course</legend>
              
                <label for="id">Student ID : </label>
                
                <?php
                echo "<input type='text' name='id' value='$_GET[id]'/>";
                ?>    
                
                 <label for="name">Student Name : </label>
                
                <?php
                echo "<input type='text' name='name' value='$_GET[name]'/>";
                ?>  
                
                <label for="title">Moble </label>

                <?php
                echo "<input type='text' name='mobile' value='$_GET[mobile]'/>";
                ?> 
                
                <label for="email">Email</label>

                <?php
                echo "<input type='text' name='email' value='$_GET[email]'/>";
                ?> 


                <input type="submit" name="submitBtn" value="Submit"/>

            </fieldset>
            
        </form> 
    </body>
</html>