<?php 
include("../inc/inc-koneksi.php");

$username       = "";
$password       = "";
$error          = "";

if(isset($_POST['Login'])){
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    if($username == '' or $password == ''){
        $error      = "Silakan masukkan semua isian";
    }else{
        $sql1       = "SELECT * from user where nama = '$username'";
        $q1         = mysqli_query($koneksi, $sql1);
        $r1         = mysqli_fetch_array($q1);
        $n1         = mysqli_num_rows($q1);
    
        if($n1 < 1){
            $error      = "Username tidak ditemukan";
        }elseif($r1['password'] != $password){
            $error      = "Password Salah";
        }else{
            $_SESSION['data']     = $username;
            $id = $r1['id'];
            header("Location:../project_apotik/backend/setuser.php?id=$id");
            exit();
        }
    }
}

?>
<style>
    .register{
        background-color: #FFFFFF;
        padding: 10px 5px 10px 5px;
        width: 100%;
        margin-top: 5px;
    }
    tbl-biru:hover{
        background-color: #fc5185;
        text-decoration: none;
    }
    .tbl-biru{
        border: none;
        background-color: #3f72af;
        margin-left: 90px;
        border-radius: 20px;
        margin-top: 10px;
        padding: 15px 20px 15px 20px;
        color: #FFFFFF;
        cursor: pointer;
        font-weight: bold; 
        width: 40%
    }
    .login{
        width: 100%;
       margin-left: 30%;
        margin-bottom: 30px;
    }
    .lokasi_img{
        width: 100%;
        border-radius: 50%;
        margin-bottom: 20px;
    }
    

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="width:100%;max-width:330px;margin:auto;padding:15px">
    <form action="" method="POST">
        <h3 class="login">Login</h3>
        <img src="https://img.freepik.com/free-vector/flat-hand-drawn-patient-taking-medical-examination-illustration_23-2148859982.jpg?size=338&ext=jpg&uid=R30937509&ga=GA1.2.1590461729.1650771405" class="lokasi_img">
        <?php
        if($error){
        ?>
        <div class="error">
            <?php echo $error ?>
        </div>
        <?php 
        }



        ?>
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>: </td>
                <td><input type="text" class="input" id="username" name="username" placeholder="Masukkan username anda" value="<?php echo $username ?>"/></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>: </td>
                <td><input type="password" class="input" id="password" name="password" /></td>
            </tr>
        </table>
        <button type="submit" class="tbl-biru" name="Login" >Login</button>
        <div>
            <p class="register">Don't have an account? <a href="../pendaftaran.php">SignUp</p>
        </div>
    </form>
</body>
</html>

