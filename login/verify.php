<?php
$con=mysqli_connect('localhost','root','',);
mysqli_select_db($con,'userform');

$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM `login` WHERE email='".$email."' && password='".$password."' limit 1";

$result=mysqli_query($con,$sql);

if(isset($_SESSION['submit'])){
    // header("location: ../index.php");
}

else{            
    if(mysqli_num_rows($result)==1){
        session_start();
        while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) 
		{
			$_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['type'] = $row['type'];
}

 
        header("location: ../admin/dashboard.php");
        exit;
    }
    else{
        $sql1="SELECT * FROM `user` WHERE email='".$email."' && password='".$password."' limit 1";
        $result1=mysqli_query($con,$sql1);
        if(mysqli_num_rows($result1)==1){
            session_start();
            while($row1=mysqli_fetch_array($result1,MYSQLI_BOTH)) 
            {
                $_SESSION['email'] = $row1['email'];
                $_SESSION['name'] = $row1['name'];
                $_SESSION['type'] = $row1['type'];
                $_SESSION['id'] = $row1['id'];
            }
            

            header("location: ../table.php");  
            exit;
        }
        else{
            echo "<script>alert('wrong email or password');window.location='login.php'</script>";
        }
    }
}
?>