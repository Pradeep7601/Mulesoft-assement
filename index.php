<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('ASN' , 'rakshit' , 'sanvi' , 'rakshith' , 2019),('Kirik Party' , 'rakshit' , 'rashmika' , 'shetty' , 2017),('kgf 1' , 'yash' , 'shreenidhi' , 'prashanth' , 2018),('theri' , 'vijay' , 'samanta' , 'nelson' , 2016),('kgf 2' , 'yash' , 'shreenidhi' , 'prashanth' , 2018),('bahubali' , 'prabhas' , 'anushka' , 'rajamouli' , 2016),('bahubali 2' , 'prabhas' , 'anushka' , 'rajamouli' , 2018)";       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("Movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>