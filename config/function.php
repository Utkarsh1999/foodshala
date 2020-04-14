<?php
    include('./db_config.php');
    $q = "SELECT * FROM users";           
    $query = mysqli_query($conn,$q);   
    $rows = mysqli_num_rows($query);
    echo $rows;

?>

<!-- Restaurant SignUp Middleware -->
<?php 
    if(isset($_POST['rsign'])){

        $owner_name = mysqli_real_escape_string($conn,$_POST['oname']);
        $owner_contact = mysqli_real_escape_string($conn,$_POST['ocontact']);
        $restro_name = mysqli_real_escape_string($conn,$_POST['rname']);
        $restro_contact = mysqli_real_escape_string($conn,$_POST['rcontact']);
        $restro_email = mysqli_real_escape_string($conn,$_POST['remail']);
        $restro_address = mysqli_real_escape_string($conn,$_POST['raddress']);
        $restro_city = mysqli_real_escape_string($conn,$_POST['rcity']);
        $restro_state = mysqli_real_escape_string($conn,$_POST['rstate']);
        $restro_zip = mysqli_real_escape_string($conn,$_POST['rzip']);

        $restro_password= mysqli_real_escape_string($conn,$_POST['rpassword']);

        $restro_registration_query = "insert into restaurant(owner_name,owner_contactno,name,contact_no,email,address,city,state,pincode,password) values('".$owner_name."','".$owner_contact."','".$restro_name."','".$restro_contact."','".$restro_email."','".$restro_address."','".$restro_city."','".$restro_state."','".$restro_zip."','".$restro_password."')";

        $res = mysqli_query($conn,$restro_registration_query);
        echo $restro_registration_query;
        echo "$res = ".$res;

    }
?>

<!-- User SignUp Middleware -->
<?php 
    if(isset($_POST['usign'])){

        $user_name = mysqli_real_escape_string($conn,$_POST['uname']);
        $user_contact = mysqli_real_escape_string($conn,$_POST['ucontact']);
        $user_email = mysqli_real_escape_string($conn,$_POST['uemail']);
        $user_city = mysqli_real_escape_string($conn,$_POST['ucity']);

        $user_password= mysqli_real_escape_string($conn,$_POST['upassword']);

        $user_registration_query = "insert into users(name,email,contact_no,city,password) values('".$user_name."','".$user_email."','".$user_contact."','".$user_city."','".$user_password."')";

        $res = mysqli_query($conn,$user_registration_query);
        echo $user_registration_query;
        echo "res = ".$res;

    }
?>

<!-- User Login Handler -->
<?php 
    if(isset($_POST['ulogin'])){
        $user_email = mysqli_real_escape_string($conn,$_POST['ulemail']);
        $user_password = mysqli_real_escape_string($conn,$_POST['ulpassword']);
        $user_login_query = "select * from users where email='$user_email' AND password='$user_password'";
        
        $fetched_data = mysqli_query($conn,$user_login_query);
        
        $temp_row_count = mysqli_fetch_assoc($fetched_data); 
        var_dump($temp_row_count);
        if($temp_row_count>0){
            echo "successfully login!";
            header("Location: ../index.php?successLogin");
            exit;
        }
        else{
            echo "Ahh! crap :( \n wrong email/password.";
            header("Location: ../login.php?err");
            exit;
        }

    }
?>

<!-- Restaurant Login Handler -->
<?php 
    if(isset($_POST['rlogin'])){
        $restro_email = mysqli_real_escape_string($conn,$_POST['rlemail']);
        $restro_password = mysqli_real_escape_string($conn,$_POST['rlpassword']);
        $restro_login_query = "select * from restaurant where email='$restro_email' AND password='$restro_password'";
        
        $fetched_data = mysqli_query($conn,$restro_login_query);
        
        $temp_row_count = mysqli_fetch_assoc($fetched_data); 
        var_dump($temp_row_count);
        if($temp_row_count>0){
            echo "successfully login!";
            
            $_SESSION['utype']='restro';
            $_SESSION['rid'] = $temp_row_count['rid'];
            header("Location: ../index.php");
            exit;
        }
        else{
            echo "Ahh! crap :( \n wrong email/password.";
            header("Location: ../login.php?err");
            exit;
        }

    }
?>



<!-- add item handler -->
<?php
    if(isset($_POST['iadd_item'])){

    }
?>