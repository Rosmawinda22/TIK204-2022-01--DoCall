<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php include("inc/inc-koneksi.php")?>
<?php include("inc/inc_fungsi.php")?>
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
        border-bottom:1px solid #364f6b;
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
 

    
</style>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>DoCall.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="notifikasi.php">Notifikasi</a></li>
                    <li><a href="../index.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
</body>        