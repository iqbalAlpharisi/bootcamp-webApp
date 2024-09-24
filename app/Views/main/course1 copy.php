<?= $this->extend('layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('htdocs/bootCampWebApp/public/static/IconMateri/codeigniter.png');" id="mask"></div>
            <div class="container w-25 mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Instalasi software </h5>
                    <div class="w-100"></div>
                    <div class="col fw-light">XAMPP & Composer</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-10 px-5 ">
            <div class="isi container">
                <section>
                    <h5 id="pendahuluan">Download Xampp</h5>
                    <div>Download pada alamat berikut : <br>
                        <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe/download">https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe/download</a>
                    </div>
                </section>

                <section>
                    <h5 id="ringkasan"></h5>
                    <div>Bagian ini berisi ringkasan umum topik yang akan Anda pelajari dalam pelajaran ini.</div>
                    <div>
                        <ul>
                            <li>Cara membuat repositori di GitHub.</li>
                            <li>Cara mendapatkan file dari dan ke GitHub.</li>
                            <li>Cara mengambil "snapshot" kode Anda.</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <h5 id="tigas">Tugas</h5>
                    <div class="container penugasan">
                        <div class="fw-bolder">Sebelum Mulai</div>
                        <div>
                            <ul>
                                <li>Github baru-baru ini memperbarui cara penamaan cabang default. Ini berarti Anda perlu memastikan bahwa Anda menggunakan versi git terbaru (2.28 atau yang lebih baru). Anda dapat memeriksa versi Anda dengan menjalankan: git --version</li>
                                <li>Jika Anda belum melakukannya, tetapkan cabang Git default lokal Anda ke main. Anda dapat melakukannya dengan menjalankan: git config --global init.defaultBranch main</li>
                                <li>Untuk informasi lebih lanjut tentang perubahan dari master ke main, lihat GitHub’s Renaming Repository.</li>
                            </ul>
                        </div>
                        <div class="fw-bolder">Buat repositori</div>
                        <div>
                            <ol>
                                <li>Anda seharusnya sudah membuat akun GitHub dalam pelajaran Menyiapkan Git.</li>
                                <li>Dari beranda GitHub, buat repositori baru dengan mengeklik tombol “+” di pojok kanan atas dan pilih “Repositori baru”. Jika Anda menggunakan viewport yang lebih kecil, tombol tersebut mungkin tersembunyi. Jika demikian, klik gambar profil Anda di pojok kanan atas dan tombol akan muncul di samping nama profil Anda.</li>
                                <li>Beri repositori Anda nama “git_test” di kolom input nama repositori. Centang “Tambahkan berkas README”. Kemudian buat repositori dengan mengeklik tombol “Buat repositori” di bagian bawah halaman.</li>
                                <li>Ini akan mengarahkan Anda ke repositori baru Anda di GitHub. Untuk bersiap menyalin (mengkloning) repositori ini ke komputer lokal Anda, klik tombol hijau “Kode”, yang seharusnya berada di sebelah kanan tombol yang menampilkan cabang saat ini (biasanya akan menampilkan cabang utama). Kemudian pilih opsi SSH di bagian “Klon”, dan salin baris di bawahnya. CATATAN: Anda HARUS mengeklik opsi SSH untuk mendapatkan URL yang benar.</li>
                                <li>Mari gunakan baris perintah pada komputer lokal Anda untuk membuat direktori baru untuk semua proyek Odin Anda. Buat direktori bernama repos dengan perintah mkdir di folder home Anda. Folder home Anda dilambangkan dengan ~. Perhatikan bahwa tergantung pada OS Anda, mungkin ada beberapa variasi direktori home - terkadang ~ adalah singkatan dari /Users/your_username dan terkadang singkatan dari /home/your_username. Jika Anda tidak yakin apakah Anda berada di folder home Anda, cukup ketik cd ~. Setelah dibuat, pindah ke sana dengan perintah cd.</li>
                                <pre>
<code class="rounded-3"> mkdir repos 
 cd repos/
</code>
</pre>
                                <li>Sekarang saatnya untuk mengkloning repositori Anda dari GitHub ke direktori repos yang baru Anda buat dengan git clone diikuti dengan URL yang Anda salin pada langkah terakhir. Perintah lengkapnya akan terlihat mirip dengan git clone git@github.com:USER-NAME/REPOSITORY-NAME.git. Jika URL Anda terlihat seperti https://github.com/USER-NAME/REPOSITORY-NAME.git, Anda telah memilih opsi HTTPS, bukan opsi SSH yang diperlukan.</li>
                                <pre>
<code class="rounded-3"> git clone git@github.com:USER-NAME/REPOSITORY-NAME.git
</code>
</pre>
                                <li>Selesai! Anda telah berhasil menghubungkan repositori yang Anda buat di GitHub ke komputer lokal Anda. Untuk mengujinya, cd ke folder git_test baru yang telah diunduh lalu masukkan git remote -v pada baris perintah Anda. Anda akan melihat output yang mirip dengan berikut ini, di mana USER-NAME adalah nama pengguna GitHub Anda:</li>
                                <pre>
<code class="rounded-3"> origin  git@github.com:USER-NAME:git_test.git (fetch)
  origin  git@github.com:USER-NAME:git_test.git (push) 
</code>
</pre>
                            </ol>
                        </div>
                    </div>
                </section>

                <section>
                    <h5 id="check">Knowledge check</h5>
                    <div>Pertanyaan-pertanyaan berikut adalah kesempatan untuk merenungkan topik-topik utama dalam pelajaran ini. Jika Anda tidak dapat menjawab pertanyaan, klik pertanyaan tersebut untuk meninjau materi, tetapi perlu diingat bahwa Anda tidak diharapkan untuk menghafal atau menguasai pengetahuan ini.</div>
                    <ul>
                        <li>Bagaimana cara membuat repositori baru di GitHub?</li>
                        <li>Bagaimana cara menyalin repositori ke mesin lokal Anda dari GitHub?</li>
                        <li>Apa nama default koneksi jarak jauh Anda?</li>
                        <li>Jelaskan apa itu origin di git push origin main.</li>
                        <li>Jelaskan apa itu main di git push origin main.</li>
                        <li>Jelaskan sistem dua tahap yang digunakan Git untuk menyimpan berkas.</li>
                        <li>Bagaimana cara memeriksa status repositori Anda saat ini?</li>
                        <li>Bagaimana cara menambahkan berkas ke staging area di Git?</li>
                        <li>Bagaimana cara melakukan commit pada berkas di staging area dan menambahkan pesan deskriptif?</li>
                        <li>Bagaimana cara melakukan push perubahan ke repositori Anda di GitHub?</li>
                        <li>Bagaimana cara melihat riwayat commit Anda sebelumnya?</li>
                    </ul>
                </section>

                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-arrow-right-short"></i> Selanjutnya</button>
                </section>
            </div>
        </div>

        <div class="col-2 me-auto top-0" id="sidebar">
            <div class="container-fluid mt-4">
                <div>
                    Konten Pelajaran
                </div>
                <ul class="border-end list-unstyled w-100 pe-1" id="course-side-bar">
                    <a href="#pendahuluan" class="pe-auto" id="pendahuluan">
                        <li>Pendahuluan</li>
                    </a>
                    <a href="#ringkasan">
                        <li>Ringkasan Pelajaran</li>
                    </a>
                    <a href="#tugas">
                        <li>Tugas</li>
                    </a>
                    <a href="#check">
                        <li>Knowledge Check</li>
                    </a>
                    <li>Sumber daya tambahan</li>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>