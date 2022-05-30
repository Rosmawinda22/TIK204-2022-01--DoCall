<?php include("inc_header.php") ?>
<style>
    table {
        width: 600px;
    }

    @media screen and (max-width: 700px) {
        table {
            width: 90%;
        }
    }

    table td {
        padding: 5px;
    }

    td.label {
        width: 40%;
    }

    .input {
        border: 1px solid #CCCCCC;
        background-color: #dfdfdf;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
    }

    input.tbl-biru {
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

    input.tbl-biru:hover {
        background-color: #fc5185;
        text-decoration: none;
    }

    .error {
        padding: 20px;
        background-color: #f44336;
        color: #FFFFFF;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .sukses {
        padding: 20px;
        background-color: #2196F3;
        color: #FFFFFF;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .error ul {
        margin-left: 10px;
    }

    .login {
        background-color: #FFFFFF;
        padding: 10px 5px 10px 5px;
        width: 100%;
        margin-top: 5px;
    }

    p {
        font-size: 15px;
        margin: 10px 0px 10px 0px;
        padding: 10px 0px 10px 0px;
    }
</style>
<h3>Sign Up</h3>
<?php
$nama_dokter      = "";
$password = "";
$asal_apotik   = "";
$alamat     = "";
$error      = "";
$sukses     = "";

if (isset($_POST['create'])) {
    $nama_dokter    = $_POST['nama_dokter'];
    $password       = $_POST['password'];
    $konfirm_pass   = $_POST['konfirm_pass'];
    $asal_apotik    = $_POST['asal_apotik'];
    $alamat         = $_POST['alamat'];
    //cek kesesuaian password
    if ($password != $konfirm_pass) {
        $error .= "<li>Password salah</li>";
    }
    
        
        $sql1       = "INSERT into dokter(nama_dokter, password, asal_apotik, alamat, hari_kosong) values ('$nama_dokter','$password','$asal_apotik', ' $alamat', '-')";
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            echo "<script> 
            alert('Berhasil mendaftar!');
            document.location.href = 'admin/login2.php';
        </script>
    ";
        }
    }

?>
<?php if ($error) {
    echo "<div class='error'><ul>$error</ul></div>";
} ?>
<?php if ($sukses) {
    echo "<div class='sukses'>$sukses</div>";
} ?>
<form action="" method="POST">
    <table>

        <tr>
            <td class="label">Nama Dokter</td>
            <td>
                <input type="text" name="nama_dokter" class="input"/>
            </td>
        </tr>
        <tr>
            <td class="label">Asal Apotik</td>
            <td>
                <input type="text" name="asal_apotik" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>
                <input type="text" name="alamat" class="input" />
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
                <input type="submit" name="create" value="Daftar Dokter" class="tbl-biru" /> <a href="biodata.php">
            </td>
        </tr>
        <tr>
            <td>
                <p class="login">Login <a href="admin/login2.php">sebagai dokter</a></p>
            </td>
        </tr>

    </table>


</form>



<?php include("inc_footer.php") ?>