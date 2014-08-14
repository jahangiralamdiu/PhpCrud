<?php
            require_once '../dbconnection.php';

            $dbConnection = new DbConnection();

            $con = $dbConnection->getConnection();


            if (isset($_POST['submitBtn'])) {

                $title = $_POST['title'];

                $code = $_POST['code'];

                $query = "insert into courses values ('null', '$title', '$code')";

                if (mysql_query($query)) {
                    echo 'Data Inserted'.'<br/>';
                    echo '<a href="courseregistration.php">Add Another course</a>';
                }
            }