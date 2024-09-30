<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Pengenalan Code Igniter 4 </h5>
                    <div class="w-100"></div>
                    <div class="col fw-light">Dasar Codeigniter 4</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">
                <section class="sect1">
                    <h5 id="sect1">Struktur Direktori Codeigniter 4</h5>
                    <article>
                        <p>Jika Anda baru pertama kali belajar Codeigniter, maka wajib hukumnya mengetahui apa saja isi direktori dan file yang ada di dalam project codeigniter.
                            Silahkan buka teks Editor VS Code, lalu pilih File->Open Folder. Cari folder 📁 latihanci4
                        <div>Maka kita akan mendapatan struktur direktori seperti ini:</div>
                        <img src="/img/static/ci4/bab1/image57.png" alt="">
                        </p>
                        <p>
                            Terdapat beberapa direktori dan file di sana. Mari kita bahas satu persatu. Mulai dari direktori dulu ya.
                            <img src="/img/static/ci4/bab1/image27.png" alt="">
                        <ul>
                            <li>📁 .github folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action;</li>
                            <li>📁 app folder ini akan berisi kode dari aplikasi yang kita kembangkan;</li>
                            <li>📁 public folder ini berisi file yang bisa diakses oleh publik, seperti file index.php, robots.txt, favicon.ico, ads.txt, dll;</li>
                            <li>📁 tests folder ini berisi kode untuk melakukan testing dengan PHPunit;</li>
                            <li>📁 vendor folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI./li>
                            <li>📁 writable folder ini berisi file yang ditulis oleh aplikasi. Nantinya, kita bisa pakai untuk menyimpan file yang di-upload, logs, session, dll./li>
                        </ul>
                        </p>
                        <p>
                            Berikutnya, kita akan bahas tentang file-file yang ada di direktori CI 4.
                        <ul>
                            <li>📄 .env adalah file yang berisi variabel environment yang dibutuhkan oleh aplikasi.</li>
                            <li>📄 .gitignore adalah file yang berisi daftar nama file dan folder yang akan diabaikan oleh Git.</li>
                            <li>⚙️ build adalah script untuk mengubah versi codeigniter yang digunakan. Ada versi release (stabil) dan development (labil).</li>
                            <li>📜 composer.json adalah file JSON yang berisi informasi tentang proyek dan daftar library yang dibutuhkannya. File ini digunakan oleh Composer sebagai acuan.</li>
                            <li>📜 composer.lock adalah file yang berisi informasi versi dari libraray yang digunakan aplikasi.</li>
                            <li>©️ license.txt adalah file yang berisi penjelasan tentang lisensi Codeigniter;</li>
                            <li>📜 phpunit.xml.dist adalah file XML yang berisi konfigurasi untuk PHPunit.</li>
                            <li>📖 README.md adalah file keterangan tentang codebase CI. Ini biasanya akan dibutuhkan pada repo github atau gitlab.</li>
                            <li>⚙️ spark adalah program atau script yang berfungsi untuk menjalankan server, generate kode, dll.</li>
                        </ul>
                        Nah, itulah beberapa file dan folder yang harus dipahami. Sebenarnya masih banyak lagi file di dalam folder app yang harus Anda ketahui.
                        </p>
                    </article>
                </section>

                <section class="sect2">
                    <h5 id="sect2">Mengenal Konsep MVC Codeigniter 4</h5>
                    <article>
                        <div>
                            <p>Apa itu MVC?</p>
                            <p>MVC adalah singkatan dari Model–View–Controller. MVC merupakan sebuah pola desain arsitektur yang umum digunakan dalam pengembangan aplikasi.
                                Masih ingat latar belakang mengapa kita harus pakai framework?</p>
                            <p>Yap, biar kode program lebih konsisten dan tersetruktur. Sehingga kita akan mudah kolaborasi dengan tim.</p>
                            <p> Nah, si MVC ini adalah pola penulisan kode yang umum dipakai.. dimana kode untuk Model di taruh dalam folder yang sama, begitu juga dengan kode untuk View dan Controller.
                                Coba perhatikan gambar berikut:</p>
                            <img class="my-4" src="/img/static/ci4/bab1/image59.png" alt="">
                        </div>
                        <div>
                            <h5 id="sect3">Apa itu Model ?</h5>
                            <p>Model adalah kode yang bertugas untuk membuat pemodelan data. Kadang juga dipakai untuk pemodelan bisnis.</p>
                            <p>Model bisa mengakses data dari Database dan juga sumber lainnya.</p>
                            <div class="note py-3 my-5 container">
                                <h5><i class="bi bi-pencil-square"></i> Intinya</h5>
                                <p> Jika berkaitan tentang data, itu tugasnya model.</p>
                            </div>
                        </div>
                        <div>
                            <h5 id="sect4">Apa Itu View ?</h5>
                            <p>View adalah kode yang bertugas untuk membuat tampilan aplikasi.
                            </p>
                            <div class="note py-3 my-5 container">
                                <h5><i class="bi bi-pencil-square"></i> Ingat</h5>
                                <p> Fokusnya untuk membuat tampilan aplikasi, bukan yang lain. Kita tidak boleh query data dari view, meskipun itu bisa dilakukan.
                                    Kadang juga kita akan membuat sedikit logika di dalam view, seperti logika untuk menampilkan dan menghilangkan elemen tertentu.</p>
                                <p>Apa yang kita lihat di aplikasi, itu adalah kode dari View.</p>
                            </div>
                        </div>
                        <div>
                            <h5 id="sect5">Apa itu Controller ?</h5>
                            <p>Nah, si Controller inilah yang bertugas menyatukan Model dan View.</p>
                            <p>Jadi, setiap ada request.. Controller akan bertanggung jawab untuk membalas request tersebut.</p>
                            <p>Jika itu request untuk menyimpan data ke database, maka Controller harus memanggil Model yang bertanggung jawab untuk data tersebut.
                                Lalu meminta model untuk menyimpannya ke database.</p>
                            <p>Jika itu request untuk view data, maka Controller akan mencari kode View yang bertanggung jawab untuk menampilkan data tersebut.</p>
                            <p>Kadang juga Controller akan membutuhkan beberapa library dan helper untuk memproses request</p>
                            <div class="note py-3 my-5 container">
                                <h5><i class="bi bi-pencil-square"></i> Ingat</h5>
                                <p> Controller bertanggung jawab untuk membalas request dari client.
                                    Tapi sebelum itu.. ada router di depan controller yang bertanggung jawab untuk menentukan Controller mana yang akan dieksekusi.</p>
                            </div>
                        </div>
                    </article>
                </section>

                <section class="sect6">
                    <h5 id="sect6">Router di Codeigniter 4</h5>
                    <article>
                        <p>Coba buka file app/Config/Routes.php. File ini adalah file router yang bertugas untuk menentukan,
                            Controller mana yang akan bertanggung jawab pada request tertentu.</p>
                        <img class="mb-4" src="/img/static/ci4/bab1/image6.png" alt="">
                        <p>Sebagai contoh:<br>
                            Perhatikan kode ini.
                        <pre>
<code class="rounded-3">$routes->get('/', 'Home::index');
</code>
</pre>
                        Saat ada request ke halaman root (/) atau alamat domain dari aplikasi,
                        maka Controller yang akan bertugas adalah Home dan method yang akan dipakai adalah index.
                        </p>
                        <div class="note py-3 my-5 container">
                            <h5><i class="bi bi-pencil-square"></i> Intinya</h5>
                            <p> Router akan memberikan tugas pada Controller tertentu untuk membalas sebuah request.</p>
                            <p>Jadi kesimpulannya:</p>
                            <p>Codeigniter 4, menggunakan konsep MVC. Request pada Codeigniter pertamakali akan diterima oleh file public/index.php
                                kemudian diteruskan ke router dan diproses oleh Controller.</p>
                        </div>
                    </article>
                </section>

                <section class="sect7">
                    <h5 id="sect7">Memahami Routing dan Controller</h5>
                    <article>
                        <p>Routing adalah proses menentukan arah atau rute yang harus dilalui.</p>
                        <p>Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request.</p>
                        <p>Controller adalah class atau script yang bertanggung jawab merespon sebuah request.</p>
                        <p>Ia bisa saja merespon dengan mengirimkan view, data JSON, data XML, atau bahkan tidak mengirimkan respon apapun.</p>
                        <p>Karena ada juga bagian dari Controller yang hanya bertugas menerima data dan menyimpannya ke database.</p>
                        <p>Coba perhatikan lagi gambar ini:</p>
                        <img src="/img/static/ci4/bab1/image6.png" alt="">
                        <div class="note py-3 my-5 container">
                            <h5><i class="bi bi-pencil-square"></i> Penjelasan</h5>
                            <ul>
                                <li>Routes adalah kumpulan definisi routing;</li>
                                <li>Router adalah script yang menentukan routing;</li>
                                <li>Routing adalah proses menentukan rute.</li>
                            </ul>
                        </div>
                    </article>
                </section>

                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <a href="/ci4/bab1/5" id="nextPage"><button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-arrow-right-short"></i> Selanjutnya</button></a>
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
                        <li>Sturktur Directory</li>
                    </a>
                    <a href="#sect2">
                        <li>Konsep MVC</li>
                    </a>
                    <a href="#sect3">
                        <li>Pengertian Model</li>
                    </a>
                    <a href="#sect4">
                        <li>Pengertian View</li>
                    </a>
                    <a href="#sect5">
                        <li>Pengertian Controller</li>
                    </a>
                    <a href="#sect6">
                        <li>Router</li>
                    </a>
                    <a href="#sect7">
                        <li>Routing dan controller</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>