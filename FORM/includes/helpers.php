<?php

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password']; 

        $query = "SELECT * FROM users";

        $select_data = mysqli_query($connection, $query);

        $data_record = mysqli_num_rows($select_data);

        if (($username and $password) == "" or (empty($username) and empty($password))){
            echo "<h5 class='alert alert-primary' role ='alert'>
                Please fill the available fields
            </h5>";
        // }elseif($data_record > 0){

        //     echo "<h5 class='alert alert-warning' role ='alert'>
        //         Record exist
        //         </h5>";
        }else{
            $insert_query = "INSERT INTO users (username, password)";
            $insert_query .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $insert_query);

            if(!$result){
                die("Error: " . $insert_query . "<br>" . mysqli_error($connection));
            }

            echo "<h5 class='alert alert-success' role='alert'>
                New record created!
            </h5>";

        }



       

    }

?>