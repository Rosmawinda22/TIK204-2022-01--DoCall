<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form action="" method="POST">
    <table>

        <tr>
            <td class="label">Email</td>
            <td>
                <input type="text" name="email" class="input" value="<?php echo $email ?>" />
            </td>
        </tr>
        <tr>
            <td class="label">Username</td>
            <td>
                <input type="text" name="username" class="input" value="<?php echo $username ?>" />
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
            <td class="label">Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" />Laki-laki
                <input type="radio" name="jenis_kelamin" class="Perempuan" />Perempuan<br>
            </td>
        </tr>
        <tr>
            <td class="label">NIK</td>
            <td>
                <input type="text" name="nik" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">No Hp</td>
            <td>
                <input type="text" name="no_hp" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>
                <textarea name="alamat" rows="4" cols="50" required></br>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="create" value="Create" class="tbl-biru" /> <a href="biodata.php">
            </td>
        </tr>
        <tr>
            <td>
                <p class="login">Have an Account?<a href="admin/login.php">Log In</p>
            </td>
        </tr>

    </table>


</form>


</body>

</html>