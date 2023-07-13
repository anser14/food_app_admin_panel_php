<?php


include ('config.php');

if(isset($_POST['submit'])){
    $username  = $_POST['username'];
    $password  = $_POST['password'];

    $sql = "select * from `login` where username = '$username' and password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count==1){
        echo'
        <script>window.location.href="Main_Screen.php";
        alert("Successfully logged in...");
        </script>
        ';
    }
    else{
        echo'
        <script>window.location.href="index.php";
        alert("please check your login details...");
        </script>
        ';
    }
}

?>