<?php


include('dbcon.php');


if(isset($_POST['save'])){
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $username=$_POST['user_name'];
    $Email=$_POST['Email'];
    $Phonenumber=$_POST['Phone_number'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirm_password'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    
if($password!=$confirmpassword){
    echo "<script type='text/javascript'>alert('Incorrect password');</script>";
    echo "<script>document.location='register.php'</script>"; 
    
}
else{
    mysqli_query($con,"INSERT INTO users_tables(firstname,lastname,username,email,phonenumber,password,confirmpassword,age,gender) 
    VALUES('$firstname','$lastname','$username','$Email','$Phonenumber','$password','$confirmpassword','$age','$gender')")or die(mysqli_error($con));

echo "<script type='text/javascript'>alert('Successfully added new users!');</script>";
        echo "<script>document.location='index.php'</script>"; 

}

  
}
