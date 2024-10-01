<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container w-25 mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Instalasi software </h5>
                    <div class="w-100"></div>
                    <div class="col fw-light">XAMPP</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">

                <section class="sect1">
                    <h5 id="sect1">Download Xampp</h5>
                    <div>Download pada alamat berikut : <br>
                        <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe/download">https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe/download</a>
                    </div>
                </section>

                <section class="sect2">
                    <h5 id="sect2">Instalasi</h5>
                    <div>
                        <p>Jika anda menggunakan Windows Vista ke atas (termasuk Windows 10 dan Windows 11), akan muncul jendela peringatan untuk tidak menginstall XAMPP pada folder C:\Program Files.
                            Alasannya karena proteksi keamanan dari Windows akan menghalangi beberapa fitur XAMPP.
                        </p>
                        Ini sebenarnya tidak masalah karena folder default XAMPP nanti ada di C:\xampp, bukan di C:\Program Files. Klik saja OK.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image5.png" alt="">
                        Setelah jendela peringatan, jendela tampilan awal instalasi XAMPP akan muncul, klik Next untuk melanjutkan.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image1.png" alt="">
                        <p> Tampilan berikutnya adalah "Select Component", pada layar ini kita bisa memilih aplikasi apa saja yang akan diinstall.
                            Disarankan untuk membiarkan pilihan default (semua aplikasi akan diinstall).</p>
                        <p>Namun jika memiliki kendala di keterbatasan ruang harddisk, boleh memilih aplikasi penting saja, yakni: Apache, MySQL, PHP, dan phpmyadmin.
                            Setelah itu, lanjutkan dengan klik tombol Next.</p>
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image48.png" alt="">
                        Di jendela "Installation Folder" kita bisa mengubah folder instalasi default XAMPP ke folder lain. Dalam tutorial ini saya akan biarkan pilihan default di C:\xampp. Lalu klik tombol Next untuk melanjutkan.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image60.png" alt="">
                        Untuk jendela "Language", kita bisa menukar bahasa. Agar lebih umum biarkan saja pilihan default di "English". Klik tombol Next untuk melanjutkan.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image18.png" alt="">
                        Jika semuanya berjalan lancar, tampilan berikutnya adalah "Ready to Install", klik tombol Next untuk memulai proses instalasi.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image35.png" alt="">
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image17.png" alt="">
                        Proses intallasi akan di proses beberapa saat hingga layar tampilan menjadi "Completing the XAMPP". Biarkan ceklist "Do you want to start the Control Panel now?" karena kita akan langsung mencoba XAMPP setelah ini.
                        Akhiri proses installasi XAMPP dengan klik tombol Finish.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image13.png" alt="">
                    </div>
                </section>

                <section class="sect3">
                    <h5 id="sect3">Running Xampp</h5>
                    <div>
                        <p>Setelah XAMPP berhasil di install, akan tampil jendela "XAMPP Control Panel". Di jendela inilah kita akan menjalankan seluruh aplikasi yang ada di XAMPP, diantaranya Apache Web Server dan MySQL.</p>
                        Untuk test drive dari XAMPP, langsung saja klik tombol Start pada bagian Action Apache. Sesaat kemudian Module Apache akan berwarna hijau menandakan aplikasi Web server Apache sudah berjalan.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image55.png" alt="">
                        jika firewall aktif di komputer anda, akan muncul jendela peringatan untuk membolehkan web server Apache berjalan melewati firewall. Pastikan untuk mengizinkannya dengan mencentang checklist yang tersedia, lalu klik Allow access.
                        <img class="my-5 d-block" src="/img/static/ci4/bab1/image36.png" alt="">
                        Selanjutnya buka web browser seperti Google Chrome. Pada kolom address ketikkan localhost dan tekan Enter.
                        Jika anda melihat halaman XAMPP, berarti instalasi XAMPP telah berhasil dan Web Server Apache telah sukses berjalan.
                        <img class="my-5 d-block object-fit-contain" src="/img/static/ci4/bab1/image16.png" alt="">
                        Jika mengalami masalah ketika menjalankan Apache, besar kemungkinan port 80 bentrok dengan aplikasi lain.
                    </div>
                </section>



                <div class="note py-3 my-5 container">
                    <h5><i class="bi bi-pencil-square"></i> Note Tambahan</h5>
                    <p> Untuk yang bermasalah dengan XAMPP, gunakan software alternative bernama LARAGON. Pastikan meng-uninstall xampp terlebih dahulu.</p>
                    <li><a href="https://www.jetorbit.com/blog/apa-itu-laragon-dan-cara-install-laragon/">Apa Itu Laragon, Fitur, dan Cara Install Laragon (jetorbit.com)</a></li>
                </div>

                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <a href="<?= $nextSlug ?>" id="nextPage"><button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-arrow-right-short"></i> Selanjutnya</button></a>
                </section>
            </div>
        </div>

        <div class="col-2 me-auto top-0" id="sidebar">
            <div class="container-fluid mt-4">
                <div>
                    Konten Pelajaran
                </div>
                <ul class="border-end list-unstyled w-100 pe-1" id="course-side-bar">
                    <a href="#sect1" class="pe-auto" id="pendahuluan">
                        <li>Downloads</li>
                    </a>
                    <a href="#sect1">
                        <li>Instalasi</li>
                    </a>
                    <a href="#sect3">
                        <li>Running</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>