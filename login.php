<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) &&isset($_POST['password'])){
           
            $name=$_POST['username'];
            $password=$_POST['password'];

            
            if($name=="ADMINDEAN" && $password=="12345")
            {
                header("Location: admin_data.html");
            }
            elseif ($name=="ADMINHOD" && $password=="12345") {
               header("Location: admin_data.html");
            }
            elseif ($name=="ADMINFACULTY" && $password=="12345") {
                header("Location: admin_data.html");
            }
           
            else {
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
              //  header("Location: login.html");
  
            }
            
}
else{
    echo "error";
}
}
