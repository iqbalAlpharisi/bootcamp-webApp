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
                    <div class="col fw-light">Composer</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">
                <section>
                    <h5 id="pendahuluan">Pendahuluan</h5>
                    <div>
                        <p>Composer berfungsi untuk menghubungkan project aplikasi dengan library dari packagist.org.
                            Packagist merupakan situs yang menyimpan banyak library PHP yang bisa digunakan melalui Composer.</p>
                        <p>Selain menghubungkan dengan Packagist, Composer punya banyak manfaat untuk Anda. Beberapa di antaranya adalah :</p>
                        <ul>
                            <li>Membuat programming dengan PHP jadi lebih terstruktur dengan konsep MVC.</li>
                            <li>Composer punya fitur autoload sehingga Anda tidak perlu memasukkan semua class PHP yang dibutuhkan.</li>
                            <li>Anda tidak perlu memasukkan package secara manual karena semua package sudah tersedia otomatis di Composer.</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <div>
                        <h5 id="">Cara Install Composer</h5>
                        <p>Cara install Composer yang terdiri dari 8 langkah, yaitu :</p>
                        <ol>
                            <li>Download File Composer</li>
                            <li>Install Composer</li>
                            <li>Tentukan Lokasi File Instalasi</li>
                            <li>Pilih Penggunaan Proxy</li>
                            <li>Review Lokasi Instalasi</li>
                            <li>Review Perubahan Instalasi</li>
                            <li>Instalasi Selesai</li>
                            <li>Cek Instalasi Composer</li>
                        </ol>
                    </div>
                    <div>
                        <h5>1. Download</h5>
                        <p>Sebelum melakukan instalasi, hal pertama yang harus dilakukan adalah mengunduh file Composer. <a href="https://getcomposer.org/Composer-Setup.exe">Buka link di sini untuk mengunduh file tersebut.</a></p>
                    </div>
                    <div>
                        <h5>2. Install Composer</h5>
                        <p>Setelah selesai download file Composer, buka file tersebut dan ikuti instruksi instalasi di bawah ini:
                            <img class="my-4 d-block" src="/img/static/ci4/bab1/image40.png" alt="">
                            Pertama akan muncul halaman seperti pada gambar dibawah ini. Klik Next untuk melanjutkan ke proses instalasi.
                        </p>
                    </div>
                    <div>
                        <h5>3. Tentukan Lokasi File Instalasi</h5>
                        <p>Selanjutnya Anda akan diminta untuk menentukan lokasi file php (php.exe)
                            yang akan digunakan pada command line (PHP CLI- Command Line Interface).
                            <img class="my-4" src="/img/static/ci4/bab1/image22.png" alt="">
                            File tersebut biasanya berada di dalam folder php. Jika Anda menggunakan XAMPP,
                            lokasi file ini akan berada di C:\xampp\php. Pastikan pilih lokasi instalasi
                            Composer berjalan di C:\xampp\php\php.exe. Klik Next apabila lokasi file php sudah benar.
                    </div>
                    <div>
                        <h5>4. Pilih Penggunaan Proxy</h5>
                        <p>
                            Kemudian Anda akan diminta untuk memilih, apakah Anda akan menggunakan proxy atau tidak.
                            Jika Anda ingin menggunakan proxy, klik centang dan masukkan URL proxy Anda.
                            Apabila Anda tidak ingin menggunakan proxy, langsung klik Next untuk melanjutkan instalasi.
                            <img class="my-4" src="/img/static/ci4/bab1/image12.png" alt="">
                        </p>
                    </div>

                    <div>
                        <h5>5. Review Lokasi Instalasi</h5>
                        <p>
                            Selanjutnya pastikan kalau proses instalasi berjalan di lokasi file yang seharusnya, yaitu C:\xampp\php\php.exe. Jika sudah benar, klik Install.
                            <img class="my-4" src="/img/static/ci4/bab1/image28.png" alt="">
                        </p>
                    </div>

                    <div>
                        <h5>6. Review Perubahan Instalasi (Opsional)</h5>
                        <p>Berikutnya adalah tampilan pemberitahuan bahwa telah terjadi perubahan pada Windows environment.
                            Perubahan ini dimaksudkan agar Composer dapat dijalankan pada Command Prompt.
                            Jika Anda sudah pernah menggunakan Composer sebelumnya, opsi ini tidak akan muncul.
                        </p>
                    </div>

                    <div>
                        <h5>7. Instalasi Selesai</h5>
                        <p>Proses instalasi selesai, klik Finish untuk menutup jendela instalasi Composer.
                            <img class="my-4" src="/img/static/ci4/bab1/image2.png" alt="">
                        </p>
                    </div>

                    <div>
                        <h5>8. Cek Instalasi Composer</h5>
                        <p>Setelah proses instalasi Composer selesai, langkah selanjutnya adalah cek instalasi Composer menggunakan Command Prompt.
                            Caranya adalah Tekan Win+R lalu ketik cmd dan klik Ok.
                        </p>
                        <p>
                            Maka Anda akan diarahkan ke jendela Command Prompt masukkan perintah seperti di bawah ini untuk mengecek instalasi sukses atau tidak.
                            <img src="/img/static/ci4/bab1/image9.png" alt="">
                        </p>
                        <p>Apabila muncul seperti gambar di atas, instalasi Anda berhasil. </p>
                    </div>

                </section>

                <div class="note py-3 my-5 container">
                    <h5><i class="bi bi-pencil-square"></i> Instalasi Untuk Mac OS</h5>
                    <p>Berikut Cara instalasi Composer Pada sistem operasi macOS :</p>
                    <ol>
                        <li>
                            <h5>Install Homebrew</h5>
                            Pertama, instal Homebrew (manajer paket untuk macOS) dengan menjalankan perintah ini di Terminal:
                            <pre>
<code class="rounded-3">/bin/bash -c "$(curl -fsSL 
 https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
</code>
</pre>
                        </li>
                        <li>
                            <h5>Install PHP</h5>
                            Berikutnya, instal PHP (diperlukan oleh Composer) menggunakan Homebrew:
                            <pre>
<code class="rounded-3">brew install php
</code>
</pre>
                        </li>

                        <li>
                            <h5>Download and Install Composer</h5>
                            Jalankan perintah berikut untuk mengunduh dan menginstal Composer secara global:
                            <pre>
<code class="rounded-3">php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

EXPECTED_SIGNATURE="$(curl -sS https://composer.github.io/installer.sig)"
ACTUAL_SIGNATURE="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

if [ "$EXPECTED_SIGNATURE" = "$ACTUAL_SIGNATURE" ]; then
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer
else
    echo 'ERROR: Invalid installer signature' >&2
    rm composer-setup.php
fi

php -r "unlink('composer-setup.php');"
</code>
</pre>
                        </li>

                        <li>
                            <h5>Pindahkan Composer ke Direktori dalam PATH Anda</h5>
                            Pindahkan file composer.phar ke /usr/local/bin untuk membuatnya dapat diakses secara global:
                            <pre>
<code class="rounded-3">sudo mv composer.phar /usr/local/bin/composer
</code>
</pre>
                        </li>

                        <li>
                            <h5>Verifikasi Instalasi</h5>
                            Terakhir, verifikasi instalasi dengan memeriksa versi Composer:
                            <pre>
<code class="rounded-3">composer --version
</code>
</pre>
                            Ini akan menampilkan versi Composer, mengonfirmasikan keberhasilan instalasi.
                        </li>


                    </ol>
                </div>

                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <button type="button" class="btn btn-outline-dark px-3"><a href="/ci4/bab1/3" id="nextPage"><i class="bi bi-arrow-right-short"></i> Selanjutnya</a></button>
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
                        <li>Cara Instalasi</li>
                    </a>

                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>