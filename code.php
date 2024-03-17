<?php
require '../config/function.php';



if(isset($_POST['saveUSER']))
{

    $name  = validate($_POST['name']);
    $phone  = validate($_POST['phone']);
    $email = validate($_POST['email']); 
    $password = validate($_POST['password']);
    $role  = validate($_POST['role']);
   
    if($name != ''  || $email != '' || $phone !='' || $password !='' || $role !='')
     {
             $query ="INSERT INTO users(name,phone,	email,password) VALUES('$name','$phone','$email','$password','$role')";
             $result =mysqli_query($conn, $query);
             if($result){
                redirect('users.php','User/Admin added succesfully');

             }else{
                redirect('users.php','Something Went Wrong');
             }
     }
     else
     {
       redirect('users.php','please fill all the input fields');
     }

}




?>