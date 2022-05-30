<?php include_once("inc_header.php") ?>
        <!-- untuk home -->
        <section id="home">
        <img src="https://img.freepik.com/free-vector/call-doctor-concept-doctors-answer-patient-questions-phone_1150-50289.jpg?size=626&ext=jpg&uid=R30937509&ga=GA1.2.1590461729.1650771405">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('9') ?>  </p>
                <h2><?php echo ambil_judul('9') ?></h2>
                <p><?php echo maximum_kata(ambil_isi('9'), 30) ?></p>
                <p><a href="<?php echo buat_link_halaman('9')?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('10') ?></p>
                <h2><?php echo ambil_judul('10') ?></h2>
                <p>Kemajuan teknologi membuat hampir semua hal bisa diakses secara digital, termasuk booking jadwal konsultasi dokter. Ini tentu membawa keuntungan, karena anda dapat mencari dan memilih dokter sesuai kebutuhan kesehatan anda.Jangan sampai pasien di apotik anda menunggu lama di bagian pendaftaran. Berikan pasien pengalaman berobat yang nyaman di apotik anda bersama DoCall.</p>
                <p>Konsultasikan masalah kesehatan anda. Dokter-dokter kami siap untuk memberikan siagnosis yang tepat sesuai dengan kondisi kesehatan yang anda rasakan.</p>
                <p><a href="<?php echo buat_link_halaman('10')?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/cartoon-married-couple-communicating-with-doctor-flat-illustration_74855-20057.jpg?size=626&ext=jpg&uid=R30937509&ga=GA1.2.1590461729.1650771405">
        </section>
        <?php include_once("inc_footer.php") ?>

        
    