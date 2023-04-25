<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $fname = $_POST['First'];
    $lname = $_POST['last name'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email']
    $contact = $_POST['contact']
    //connect
    $con = new mysqli('Localhost','root','','gorret');
    if ($con)
    {
        echo "CONNECTED";
        $sql = " INSERT INTO maria(First name,last name,nationality,status,email,contact) VALUES('$First name','$last name','$nationality','$status','$email','$contact')";
        $result = mysqli_query($con,$sql);
        if ($result)
        {
            echo "CLEARED";

        }
        else {
          die (mysqli_error($con));
            # code...
        }
    }
    



}
?>