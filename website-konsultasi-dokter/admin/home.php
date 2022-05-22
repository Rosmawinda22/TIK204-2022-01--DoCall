<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php include("../inc/inc-koneksi.php")?>
<?php include("../inc/inc_fungsi.php")?>
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
    p {
        font-size: 20px;
        margin: 20px 10px 20px 10px;
        margin-left: 12%;
        margin-bottom: 5px;
        padding: 10px 0px 10px 0px;
    }
    h2 {
        font-family: 'comic sans ms';
        font-weight: 800;
        margin-left: 12%;
        font-size: 30px;
        margin-top: 0px;
        margin-bottom: 20px;
        color: #000000;
        width: 100%;
        line-height: 50px;
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
    .lokasi-img{
        float:left;
        margin-left: 12%;

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
        <div class="section">
            <div>
                <p>Hi, patient.....</p>
                <h2><a href="dokter.php">Let's Find Your Doctor</h2>
                <img src="https://img.freepik.com/free-vector/doctors-concept-illustration_114360-1515.jpg?size=626&ext=jpg&uid=R30937509&ga=GA1.2.1590461729.1650771405" margin-left="12%"/>
            </div>
        </div>  
    </div>    
</body>
<?php include_once("../inc_footer.php")?>



