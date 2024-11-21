<?php 
 $conection=new mysqli('localhost','root','','db_php_6_7');
// if($conection){
//     echo 'Hello';
// }
    if(isset($_POST['btnSubmit'])){
    
        function insertStudent(){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $pass=$_POST['password'];
            $cpass=$_POST['cpassword'];
            $gender=$_POST['gender'];
            $profile=rand(1,1000).'-'.$_FILES['profile']['name'];
            $tmp_name=$_FILES['profile']['tmp_name'];
            $path='Image/'.$profile;
            move_uploaded_file($tmp_name,$path);
            global $conection;
            $sql="INSERT INTO `tbl_student`(`first_name`, `last_name`, `email`, `phone`, `password`, `confirm_password`, `gender`,`profile`)
             VALUES ('$fname','$lname','$email','$phone','$pass','$cpass','$gender','$profile')";
            $conection->query($sql); 

        }
        insertStudent();
    }
?>