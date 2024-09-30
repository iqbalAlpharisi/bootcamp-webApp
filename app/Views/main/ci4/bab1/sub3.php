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
                    <div class="col fw-light">Code Igniter 4</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">

                <section class="sect1">
                    <h5 id="sect1">Persiapan</h5>
                    <div>
                        <div>Kita akan meletakkan file-file pekerjaan web didalam folder htdocs. Untuk itu prosedur instalasi Codeigniter akan dimulai dengan membukan windows explorer di
                            <p class="fw-bold">C:/XAMPP/htdocs/</p>
                            <img src="/img/static/ci4/bab1/image34.png" alt="">
                            Ketikkan cmd kemudian tekan ENTER di kolom address bar
                            <img src="/img/static/ci4/bab1/image42.png" alt="">
                            Kemudian akan muncul jendela command prompt. Ketikaan perintah berikut untuk mulai mendowload file-file Codeigniter 4.
                            <pre>
<code class="rounded-3 mt-4">composer create-project codeigniter4/appstarter latihanci4
</code>
</pre>
                            Kemudian tekan ENTER
                        </div>
                    </div>
                </section>

                <section class="sect2">
                    <h5 id="sect2">Proses Instalasi</h5>
                    <div>
                        <div>
                            <img src="/img/static/ci4/bab1/image4.png" alt="">
                            <p>Perhatikan, bagian terakhir dari perintah diatas yaitu latihanci4 akan menghasilkan folder baru bernama latihanci4 didalam folder htdocs.
                                Anda dapat mengganti bagian ini untuk project baru anda nantinya.</p>
                            <img class="my-4" src="/img/static/ci4/bab1/image56.png" alt="">
                            <p>Jika berhasil, anda akan menemukan tampilan seperti diatas.
                                Langkah selanjutnya mengecek folder baru yang dihasilkan dari perintah instalasi codeigniter4 diatas.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="sect3">
                    <h5 id="sect3">Menjalankan Code Igniter</h5>
                    <div>
                        <p>Cek kembali isi dari folder htdocs, maka Anda akan menemuikan folder baru
                            bernama latihanci4 didalam folder htdocs seperti tampak pada gambar dibawah ini.
                        </p>
                        <img src="/img/static/ci4/bab1/image11.png" alt="">
                        <p>Kemudian masuk kedalam folder latihanci4 dan kemudian jalankan perintah cmd kembali.
                            Dengan cara klik pada address bar dan ketikkan cmd kemudian ENTER.</p>
                        <img class="my-4" src="/img/static/ci4/bab1/image50.png" alt="">
                        <img class="mb-4" src="/img/static/ci4/bab1/image38.png" alt="">
                        <p>Kemudian akan muncul command prompt. Ketikkan perintah berikut untuk mulai menjalankan program bawaan dari codeigniter4.</p>
                        <pre>
<code class="rounded-3 mt-4">php spark serve
</code>
</pre>
                        <img src="/img/static/ci4/bab1/image53.png" alt="">
                        <p>Codeigniter4 akan menjalankan built-in server, sehingga kita dapat membuka browser kemudian mengetikan alamat url http://localhost:8080</p>
                        <img class="my-4" src="/img/static/ci4/bab1/image24.png" alt="">
                        <p>Sampai disini Anda telah berhasil melakukan instalasi codeigniter4.
                        <p>Berikutnya, kita akan berkenalan lebih dekat dengan CI4.</p>
                        Harapannya, Anda bisa terbiasa dengan lingkungan kerja atau codebase CI4.
                        Kita akan mulai dengan mengenal struktur direktorinya terlebih dahulu, lalu membahas konsep MVC yang ada di Codeigniter 4.
                        </p>
                    </div>
                </section>

                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <a href="/ci4/bab1/4" id="nextPage"><button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-arrow-right-short"></i> Selanjutnya</button></a>
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
                        <li>Persiapan</li>
                    </a>
                    <a href="#sect2">
                        <li>Instalasi</li>
                    </a>
                    <a href="#sect3">
                        <li>Membuka Ci4</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>