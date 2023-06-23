<?php include('include/DbConfig.php');
session_start();
$action=$_GET['action'];
if($action=='login'){
    $username=$_POST['username'];
    $password= md5($_POST['password']);
    $loginqry="select * from user where username=? and password=? limit 1";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$loginqry)){
        echo "Statements Failed";
    }else{
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $count=mysqli_num_rows($result);
        if($count >= 1){
            $row=mysqli_fetch_assoc($result);
            $_SESSION['det']=$row['id'];
            ?><script>location.href="index.php"</script><?php
        }else{
            echo "Incorrect Username or Password";
        }
    }
}else if($action=='logout'){
    session_destroy()
    ?><script>location.href="index.php"</script><?php
}
?>