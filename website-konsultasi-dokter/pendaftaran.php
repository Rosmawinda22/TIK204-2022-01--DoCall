<?php include("inc_header.php")?>
<style>
    table{
        width: 600px;
    }

    @media screen and (max-width: 700px){
        table{
            width: 90%;
        }
    }
    table td{
        padding: 5px;
    }
    td.label{ width: 40%;}
    .input{
        border: 1px solid #CCCCCC;
        background-color: #dfdfdf;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
    }
    input.tbl-biru{
        border: none;
        background-color: #3f72af;
        margin-left: 90px;
        border-radius: 30px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color: #FFFFFF;
        cursor: pointer;
        font-weight: bold; 
        width: 50%
    }
    input.tbl-biru:hover{
        background-color: #fc5185;
        text-decoration: none;
    }
    .error{
        padding: 20px;
        background-color: #f44336;
        color: #FFFFFF;
        border-radius: 10px;
        margin-bottom: 5px;
    }
    .sukses{
        padding: 20px;
        background-color: #2196F3;
        color: #FFFFFF;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .error ul{margin-left: 10px;}

    .login{
        background-color: #FFFFFF;
        padding: 10px 5px 10px 5px;
        width: 100%;
        margin-top: 5px;
    }

    
</style>
<h3>Sign Up</h3>
<?php 
$email      = "";
$username   = "";
$login      = "";
$error      = "";
$sukses     = "";

if(isset($_POST['create'])){
    $email          = $_POST['email'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $konfirm_pass   = $_POST['konfirm_pass'];

    if($email == '' or $username == '' or $password == '' or $konfirm_pass == ''){
        $error .= "<li>Data salah</li>";
    }
    if($email != ''){
        $sql1   = "select email from members where email = '$email'";
        $q1     = mysqli_query($koneksi, $sql1);
        $n1     = mysqli_num_rows($q1);
        
        if($n1 > 0){
            $error .= "<li>Email sudah terdaftar</li>";
        }

        //validasi email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error  = "<li>Email tidak valid</li>";       }
    }

    //cek kesesuaian password
    if($password != $konfirm_pass){
        $error .= "<li>Password salah</li>";
    }
    if(strlen($password) < 6){
        $error .= "<li>Password minimal 6 karakter</li>";
    }
    if(empty($err)){
        $status             = md5(rand(0,1000));
        $judul_email        = "Halaman Konfirmasi Pendaftaran";
        $isi_email          = "Akun yang kamu miliki dengan email <b>$email</b> telah siap digunakan.<br/>";
        $isi_email          .= "Sebelumnya silakan melakukan aktifasi email di link di bawah ini:<br/>";
        $isi_email          .= url_dasar()."/verifikasi.php?email=$email&kode=$status";

        kirim_email($email,$username,$judul_email,$isi_email);

        $sql1       = "insert into members(email,username,password,status) values ('$email','$username',md5($password),'$status')";
        $q1         = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Proses Berhasil. Silakan cek email kamu untuk verifikasi.";
        }
        
            
    
    }
}
?>
<?php if($error) {echo "<div class='error'><ul>$error</ul></div>";} ?>
<?php if($sukses) {echo "<div class='sukses'>$sukses</div>";} ?>
<form action="" method="POST">
    <table>
       
        <tr>
            <td class="label">Email</td>
            <td>
                <input type="text" name="email" class="input"  value="<?php echo $email?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Username</td>
            <td>
                <input type="text" name="username" class="input"  value="<?php echo $username?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Password</td>
            <td>
                <input type="password" name="password" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Konfirmasi Password</td>
            <td>
                <input type="password" name="konfirm_pass" class="input" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="create" value="Create" class="tbl-biru" />
            </td>
        </tr>
        <tr>
            <td>
            <p class="login">Have an Account?<a href="admin/login.php">Log In</p>        
            </td>
        </tr>
        
    </table>
    

</form>



<?php include("inc_footer.php")?>