<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">

        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Membuat Routes, Controller, dan Bootstrap</h5>
                    <div class="w-100"></div>
                    <div class="col fw-light">Dasar Codeigniter 4</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">

                <section class="sect1" id="sect1">
                    <h5>Membuat Routes di Codeigniter</h5>
                    <article>
                        <p>Oke, sekarang coba lihat kembali kode aplikasi latihanci4.<br>
                            Buka file app/config/Routes.php.
                            <img class="mt-4" src="/img/static/ci4/bab1/image25.png" alt="">
                        </p>
                        <p>Pada file Routes.php, kita bisa mendefinisikan rute untuk aplikasi.<br>
                            Coba perhatikan bagian ini:
                        <pre>
<code class="rounded-3">$routes->get('/', 'Home::index');
</code>
</pre>
                        Ini adalah rute untuk home page.<br>
                        Bingung? Coba perhatikan gambar berikut:
                        <img class="mt-4" src="/img/static/ci4/bab1/image19.png" alt="">
                        </p>
                        <p>
                            Sekarang mari kita coba membuat sebuah rute baru. Tambahkan kode berikut di dalam Routes.php:
                        <pre>
<code class="rounded-3">$routes->get('/about', 'Page::about');

$routes->get('/contact', 'Page::contact');

$routes->get('/faqs', 'Page::faqs');

</code>
</pre>
                        Nah, di sini kita membuat tiga buat rute baru. Pada rute ini kita memberikan tugas kepada controller Page untuk merespon request pada rute tersebut.<br><br>
                        Sehingga sekarang kode routes-nya menjadi seperti ini:
                        <img class="mt-4" src="/img/static/ci4/bab1/image47.png" alt="">
                        </p>
                        Untuk memastikan rute sudah dibuat dengan benar, coba ketik perintah:
                        <pre>
<code class="rounded-3">php spark serve
</code>
</pre>
                        <img class="mb-4" src="/img/static/ci4/bab1/image54.png" alt="">
                        <p>
                            Jika pada command prompt Anda masih berada pada posisi diatas, <br>
                            untuk menghentikannya tekan CTRL berbarengan dengan tombol huruf C (CTRL C).<br><br>
                            Jika muncul seperti ini:
                            <img class="mb-4" src="/img/static/ci4/bab1/image14.png" alt="">
                            <img src="/img/static/ci4/bab1/image33.png" alt="">
                            Maka pembuatan rute berhasil.<br>
                            Selanjutnya kita harus membuat Controller Page.php.
                        </p>
                    </article>
                </section>

                <section class="sect2" id="sect2">
                    <h5>Membuat Controller</h5>
                    <article>
                        <p>Silahkan buat file baru di dalam folder app/Controllers dengan nama Page.php <br><br>
                            Pastikan kamu menggunakan huruf kapital di awal nama file. Karena ini sudah menjadi aturan pada Codeigniter.<br><br>
                            Kemudian isi file Page.php dengan kode berikut:
                        </p>
                        <pre>
<code class="rounded-3">&lt;?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo &quot;about page&quot;;
	}
   public function contact()
	{
		echo &quot;contact page&quot;;
	}
   public function faqs()

	{
		echo &quot;Faqs page&quot;;
	}
}
</code>
</pre>
                        <div class="note py-3 my-5 container">
                            <h5><i class="bi bi-pencil-square"></i> Note</h5>
                            <p>Controller Page memiliki tiga method, yakni about(), contact(), dan faqs(). <br><br>
                                Nama method ini mengikuti nama yang sudah kita tentukan di dalam rute. Jika kita menggunakan nama yang berbeda, maka ia tidak akan bisa dibuka.<br><br>
                                Pada setiap method di Controller Page, kita membuat respon dengan perintah echo. Kita juga nanti bisa merespon dengan view.<br><br>
                                Oke, sekarang mari kita tes hasilnya.
                            </p>
                        </div>
                        <p>
                            Silahkan running lagi server built-in codeigniter dengan mengetikkan
                            php spark serve <br>
                            Lalu, Silahkan buka halaman berikut:
                        <ul>
                            <li>localhost:8080/about</li>
                            <li>localhost:8080/contact</li>
                            <li>localhost:8080/faqs</li>
                        </ul>
                        Hasilnya:
                        <img class="mt-4" src="/img/static/ci4/bab1/image63.png" alt="">
                        Rute yang kita buat berhasil dibuka.
                        </p>
                    </article>
                </section>

                <section class="sect3" id="sect3">
                    <h5>Menambahkan Bootstrap di Codeigniter 4</h5>
                    <article>
                        <p>Pertama.. silahkan download Bootstrap dari link berikut ini:
                        <div>
                            <a href="https://github.com/twbs/bootstrap/releases/download/v4.5.2/bootstrap-4.5.2-dist.zip">📥 Download bootstrap-4.5.2-dist.zip</a>
                        </div><br>
                        Setelah itu, ekstrak folder 📁 css dan 📁 js ke dalam folder 📁 public di project kita.
                        Sehingga isi folder 📁 public akan menjadi seperti ini:
                        </p>
                        <img src="/img/static/ci4/bab1/image29.png" alt="">
                        <p>
                            Setelah itu, tambahkan JQuery.. karena bootstrap versi 4.5.2 ini juga membutuhkan JQuery untuk bisa mengaktifkan beberapa fitur.<br><br>
                            Download JQuery melalui link berikut.
                        <div>
                            <a href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">📥 Download jquery.min.js (klik kanan save as)</a>
                        </div>
                        Setelah itu, pindahkan ke dalam folder public/js, sehingga sekarang kita punya file jquery.min.js di sana.
                        <img class="d-block mt-4" src="/img/static/ci4/bab1/image62.png" alt="">
                        </p>
                        <div class="note py-3 my-5 container">
                            <h5><i class="bi bi-pencil-square"></i> Buat Yang belum Tahu</h5>
                            <p>Folder 📁 public adalah folder yang berisi file statis seperti Gambar, CSS, JS, dan lain-lain.<br><br>
                                Semua file yang ada di dalam folder nantinya akan kita buatkan link dengan fungsi base_url() pada View.<br><br>
                                Namun, sebelum itu..
                                Mari kita kenalan dulu dengan View dalam Codeigniter di materi berikutnya.

                            </p>
                        </div>
                    </article>
                </section>


                <?= $this->include('layout\navigationBtn'); ?>


            </div>
        </div>

        <div class="col-2 me-auto top-0 d-md-none d-lg-block" id="sidebar">
            <div class="container-fluid mt-4">
                <div>
                    Konten Pelajaran
                </div>
                <ul class="border-end list-unstyled w-100 pe-1 " id="course-side-bar">
                    <a href="#sect1" class="link-1 pe-auto">
                        <li>Membuat Routes</li>
                    </a>
                    <a href="#sect2" class="link-2">
                        <li>Membuat Controller</li>
                    </a>
                    <a href="#sect3" class="link-3">
                        <li>Menambah Bootstrap</li>
                    </a>
                </ul>
            </div>
        </div>

    </div>
</div>



<?= $this->endSection(); ?>