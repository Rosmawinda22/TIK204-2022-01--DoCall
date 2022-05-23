<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php include("inc_header1.php")?>

<style>
    section {
        margin: auto;
        display: flex;
        margin-bottom: 50px;
    }
    .menu {
        float: right;
    }
    nav {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 80px;
        position: sticky;
        position: -webkit-sticky; 
        top: 0;
        background: #FFFFFF;
        z-index: 1;
        border-bottom:1px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav ul li {
        float: left;
    }

    nav ul li a {
        color: black;
        font-weight: bold;
        text-align: center;
        padding: 0px 16px 0px 16px;
        text-decoration: none;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }
     .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
    }

    .logo a {
        font-size: 50px;
        font-weight: 800;
        float: left;
        font-family: courier;
        color: #364f6b;
    }
    body {
        margin: 0px;
        padding: 0px;
        font-family: 'Open Sans',sans-serif;
    }
    
    #copyright {
        text-align: center;
        width: 100%;
        padding: 50px 0px 50px 0px;
        margin-top: 50px;
    }
    .footer {
        width: 100%;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        margin: 12px;
    }

    .footer-section {
        width: 30%;
        margin-left: 12px;
    }

    ol {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:white;
        font-family: 'Open Sans',sans-serif;
        margin-left: 12%;
        text-align: left;
        font-weight: bold;
        background-color: #FFFFFF;
    }

    
</style>
<body>
    <div>
    <ol>
    <form method="POST" action="proses_bio.php"?>
        NIK                 : <br><input type="textbox" id ="NIK" name="nik"><br></br>
        Tempat Lahir        : <br><input type="textbox" id ="TempatLahir" name="tempatlahir"><br></br>
        Tanggal Lahir       : <br><input type="date" id ="TanggalLahir" name="tanggallahir"><br></br>
        Jenis Kelamin       : <br>
                              <select name="jenis kelamin">
                                  <option value="">---<br></option>
                                  <option value="Laki-Laki">Laki-laki<br></option>
                                  <option value="Perempuan">Perempuan<br></option>
                              </select><br></br>
        Agama               : <br>
                              <select name="agama">
                                  <option value="">---<br></option>
                                  <option value="islam">Islam<br></option>
                                  <option value="kristen">Kristen<br></option>
                                  <option value="protestan">Protestan<br></option>
                                  <option value="hindu">Hindu<br></option>
                                  <option value="buddha">Buddha<br></option>
                              </select><br></br>
        Alamat              : <br><textarea rows="5" cols="60" id="alamat" name="alamat"></textarea><br>
        <input type="submit" name="submit" class="tbl-biru" value="SIMPAN"><input type="reset" name="reset" value="CANCEL">
        <br><br><br><br></br>
    </form>
    </ol>
    <?php include("inc_footer.php")?>
</body>        