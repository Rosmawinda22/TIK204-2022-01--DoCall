<?php include("inc_header.php")?>
<?php
$katakunci = isset($_GET['katakunci'])?$_GET['katakunci']:"";
?>
<h1>Halaman Admin</h1>
<p>
    <a href="Halaman_input.php"></a>
        <input type="button" class="btn btn-primary" value="Buat Jadwal Baru">
    </a>   
</p>
<form class ="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
    </div>
    <div class="col-auto">
        <input type="submit"  name="cari" value="Cari Tulisan" class="btn btn-secondary"/>
    </div>
</form>
<table class=" table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>nama</th>
            <th>hari</th>
            <th class="col-2">jam</th>
        </tr>
    </thead>
</table>
    <tbody>
        <tr>
            <td class="col-auto">1</td>
            <td>Dokter Hadriansyah.</td>
            <td>Senin, 14.30 WIB.</td>
            <td>
                <span class="badge bg-warning text-dark">Edit</span>    
                <span class="badge bg-danger">Delete</span>
            </td>   
        </tr>    
    <t/body>
<table>
<?php include("inc_footer.php")?>