<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Praktik</h5>
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
                    <h5 id="sect1">Praktik Menampilkan Data (Read)</h5>
                    <article>
                        <p>
                            Pada praktik ini, Anda diminta untuk membuat tampilan web dari database yang sudah dibuat.
                            Pada kasus ini, kita belum memiliki database, sehingga praktik ini diawali dengan melakukan setup database. <br><br>
                            Akses halaman database menggunakan phpmyadmin
                            Buat database baru bernama : latihanci4<br><br>
                            <img src="/img/static/ci4/bab1/image37.png" alt="">
                        </p>
                        <p>
                            Buat tabel baru didalam database latihanci4 <br><br>
                            Nama tabel : berita
                            Jumlah kolom : 3
                            <img src="/img/static/ci4/bab1/image10.png" alt="">
                        </p>
                        <p>
                            Klik Create, kemudian isi properti seperti tampilan dibawah ini
                            <img src="/img/static/ci4/bab1/image51.png" alt=""><br><br>
                            Klik bagian Auto Increment (AI) dan pilih primary key pada kolom pertama
                            <img src="/img/static/ci4/bab1/image46.png" alt=""><br><br>
                            Klik Save makan akan muncul sebagai berikut :
                            <img src="/img/static/ci4/bab1/image8.png" alt=""><br><br>
                            Masukkan data buatan dengan klik menu INSERT
                            <img src="/img/static/ci4/bab1/image39.png" alt=""><br><br>
                            <img src="/img/static/ci4/bab1/image30.png" alt="">
                            Sehingga data telah masuk ke database
                            <img src="/img/static/ci4/bab1/image20.png" alt=""><br><br>
                        </p>
                        <p>
                            Langkah pertama sebelum membuat Model, Controller dan View adalah melakukan konfigurasi database pada file .env .
                            Untuk itu Anda dapat merename file env yang ada di folder project sebagai berikut. Tambahkan titik didepan env sehingga menjadi .env
                            <img src="/img/static/ci4/bab1/image49.png" alt=""> <br><br>
                            Rename file env menjadi .env
                            <img src="/img/static/ci4/bab1/image23.png" alt="">
                            Hilangkan tanda pagar # sehingga seperti tampilan diatas.

                        <div class="note py-3 my-5 container">
                            <h5><i class="bi bi-pencil-square"></i> Penting !</h5>
                            <p>Sesuaikan dengan konfigurasi database Anda seperti nama database, username database, dan password database. <br><br>
                                Biasanya password bawaan dari XAMPP/Laragon adalah kosong, jadi sesuaikan dengan password database Anda.
                            </p>
                        </div>
                        </p>

                        <p>
                            Buat satu file model di dalam folder app->Models
                            Beri nama file BeritaModel.php
                        <pre>
<code class="rounded-3">&lt;?php 


namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'berita'];

}
</code>
</pre>

                        Buat satu file controller di dalam folder app->Controllers
                        Beri nama file BeritaController.php
                        <pre>
<code class="rounded-3">&lt;?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this-&gt;beritaModel = new BeritaModel();

    }

    public function index() {
        $data['berita'] = $this-&gt;beritaModel-&gt;findAll();
        return view('berita', $data);
    }
}
</code>
</pre>
                        Jangan lupa menambahkan routing pada file Routes.php didalam folder app->config
                        <pre>
                            <code>&lt;?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes-&gt;get('/', 'Home::index');

$routes-&gt;get('/about', 'Page::about');

$routes-&gt;get('/contact', 'Page::contact');

$routes-&gt;get('/faqs', 'Page::faqs');

$routes-&gt;get('/berita', 'BeritaController::index');</code>
                        </pre>
                        Silahkan running php spark serve <br>
                        untuk mengujicoba ketikkan localhost:8080/berita
                        <img src="/img/static/ci4/bab1/image15.png" alt="">
                        </p>

                        <div class="penugasan">
                            <h5><i class="bi bi-code-square"></i> Tugas</h5>
                            <p>Coba terapkan tampilan view pada tutorial sebelumnya untuk menampilkan data diatas!</p>
                        </div>
                    </article>
                </section>

                <section class="sect2">
                    <h5 id="sect2">Praktik Mengisi Data (Create)</h5>
                    <article>
                        <p>
                            Pada bagian ini Anda akan mempraktikan cara melakukan pengisian data ke database melalui form. <br><br>
                            Ubah file BeritaController.php tambahkan bagian bercomment tambah pada file BeritaController.php
                        <pre>
    <code>&lt;?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this-&gt;beritaModel = new BeritaModel();

    }

    public function index() {
        $data['berita'] = $this-&gt;beritaModel-&gt;findAll();
        return view('berita', $data);
    }


    public function create() {
        return view('create_berita');
    }

    // Tambah
    public function store() {
        $data = $this-&gt;request-&gt;getPost();
        $this-&gt;beritaModel-&gt;save($data);
        return redirect()-&gt;to('/berita');
    }

  
}</code>
</pre>
                        </p>
                        <p>
                            Buat satu file controller di dalam folder app->View
                            Beri nama file create_berita.php halaman ini akan digunakan sebagai halaman input data.
                        <pre>
    <code>&lt;!DOCTYPE html&gt;

&lt;head&gt;
  

&lt;/head&gt;


&lt;body&gt;

  
        &lt;h1&gt;Tambah Konsultasi&lt;/h1&gt;


        &lt;form action=&quot;&lt;?= site_url('berita_store'); ?&gt;&quot; method=&quot;post&quot;&gt;
           
            
              Judul :
                &lt;input type=&quot;text&quot; name=&quot;judul&quot;&gt;
           
          Isi Berita :
                
          &lt;textarea name=&quot;berita&quot; rows=&quot;4&quot; cols=&quot;50&quot;&gt;


          &lt;/textarea&gt;
                &lt;button type=&quot;submit&quot;&gt;Simpan&lt;/button&gt;
        &lt;/form&gt;

&lt;/body&gt;



&lt;/html&gt;</code>
</pre>
                        </p>
                        <p>
                            Jangan lupa menambahkan routing pada file Routes.php didalam folder app->config
                        <pre>
                                <code>
                                &lt;?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes-&gt;get('/', 'Home::index');

$routes-&gt;get('/about', 'Page::about');

$routes-&gt;get('/contact', 'Page::contact');

$routes-&gt;get('/faqs', 'Page::faqs');

$routes-&gt;get('/berita', 'BeritaController::index');


$routes-&gt;get('/isi_berita', 'BeritaController::create');

$routes-&gt;post('/berita_store', 'BeritaController::store');
                                </code>
                            </pre>
                        </p>

                        <p>
                            Silahkan running <br>
                            php spark serve <br><br>
                            untuk mengujicoba ketikkan http://localhost:8080/isi_berita
                            <img src="/img/static/ci4/bab1/image61.png" alt="">
                        </p>
                        <div class="penugasan">
                            <h5>Tugas !</h5>
                            <p>Coba terapkan tampilan view pada tutorial sebelumnya untuk menampilkan data diatas!</p>
                        </div>
                    </article>
                </section>

                <section class="sect3">
                    <h5 id="sect3">Praktik Mengedit Data (Update)</h5>
                    <article>
                        <p>
                            Pada bagian ini Anda akan mempraktekan cara melakukan pengeditan data di database. <br>
                            Tambahkan beberapa listing kode berikut pada file BeritaController.php
                        <pre>
    <code>&lt;?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this-&gt;beritaModel = new BeritaModel();

    }

    public function index() {
        $data['berita'] = $this-&gt;beritaModel-&gt;findAll();
        return view('berita', $data);
    }


    public function create() {
        return view('create_berita');
    }

    public function store() {
        $data = $this-&gt;request-&gt;getPost();
        $this-&gt;beritaModel-&gt;save($data);
        return redirect()-&gt;to('/berita');
    }

// Tambah
    public function edit($id) {
        $data['berita'] = $this-&gt;beritaModel-&gt;find($id);
        return view('edit_berita', $data);
    }

    public function update($id) {
        $data = $this-&gt;request-&gt;getPost();
        $this-&gt;beritaModel-&gt;update($id, $data);
        return redirect()-&gt;to('/berita');
    } 
}</code>
</pre>
                        </p>
                        <p>
                            Buat satu file view di dalam folder app->View
                            Beri nama file edit_berita.php
                        <pre>
    <code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Edit Berita&lt;/title&gt;
  
&lt;/head&gt;
&lt;body&gt;

        &lt;h1&gt;Edit Berita&lt;/h1&gt;

        &lt;form action=&quot;&lt;?= site_url('update_berita/' . $berita['id']); ?&gt;&quot; method=&quot;post&quot;&gt;
           
        Judul :
                &lt;input type=&quot;text&quot; name=&quot;judul&quot; value=&quot;&lt;?= $berita['judul']; ?&gt;&quot;&gt;
            &lt;br&gt;

            Berita :
            &lt;textarea name=&quot;berita&quot; rows=&quot;4&quot; cols=&quot;50&quot;&gt;
            &lt;?= $berita['berita']; ?&gt;

&lt;/textarea&gt;

            &lt;button type=&quot;submit&quot;&gt;Update&lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
</pre>
                        Dan juga edit file view berita.php untuk menampilkan tombol/link edit dan hapus
                        <pre>
                            <code>&lt;?php foreach($berita as $key =&gt; $post) : ?&gt;

&lt;?php echo $post['judul'] ?&gt;

&lt;?php echo $post['berita'] ?&gt;

&lt;a href=&quot;&lt;?= site_url('edit_berita/' . $post['id']) ?&gt;&quot; &gt;Edit&lt;/a&gt;
&lt;a href=&quot;&lt;?= site_url('delete_berita/' . $post['id']) ?&gt;&quot; &gt;Delete&lt;/a&gt;

&lt;br&gt;

&lt;?php endforeach ?&gt;</code>
                        </pre>
                        </p>

                        <p>
                            Jangan lupa menambahkan routing pada file Routes.php didalam folder app->config
                        <pre>
                                <code>&lt;?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes-&gt;get('/', 'Home::index');

$routes-&gt;get('/about', 'Page::about');

$routes-&gt;get('/contact', 'Page::contact');

$routes-&gt;get('/faqs', 'Page::faqs');

$routes-&gt;get('/berita', 'BeritaController::index');


$routes-&gt;get('/isi_berita', 'BeritaController::create');

$routes-&gt;post('berita_store', 'BeritaController::store');
// Tambah
$routes-&gt;get('edit_berita/(:num)', 'BeritaController::edit/$1');
$routes-&gt;post('update_berita/(:num)', 'BeritaController::update/$1');</code>
                            </pre>
                        Silahkan running <br>
                        php spark serve <br><br>
                        untuk mengujicoba ketikkan http://localhost:8080/berita kemudian klik edit.
                        <img class="my-4" src="/img/static/ci4/bab1/image44.png" alt="">
                        <img src="/img/static/ci4/bab1/image52.png" alt="">
                        </p>
                    </article>
                </section>

                <section class="sect4">
                    <h5 id="sect4">Praktik Menghapus Data (Delete)</h5>
                    <article>
                        <p>
                            Pada bagian ini Anda akan mempraktekan cara melakukan penghapusan data di database.
                            Tambahkan beberapa listing kode berikut pada file BeritaController.php
                        <pre>
    <code>&lt;?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this-&gt;beritaModel = new BeritaModel();

    }

    public function index() {
        $data['berita'] = $this-&gt;beritaModel-&gt;findAll();
        return view('berita', $data);
    }


    public function create() {
        return view('create_berita');
    }

    public function store() {
        $data = $this-&gt;request-&gt;getPost();
        $this-&gt;beritaModel-&gt;save($data);
        return redirect()-&gt;to('/berita');
    }

    public function edit($id) {
        $data['berita'] = $this-&gt;beritaModel-&gt;find($id);
        return view('edit_berita', $data);
    }

    public function update($id) {
        $data = $this-&gt;request-&gt;getPost();
        $this-&gt;beritaModel-&gt;update($id, $data);
        return redirect()-&gt;to('/berita');
    }
// Tambah
    public function delete($id) {
        $this-&gt;beritaModel-&gt;delete($id);
        return redirect()-&gt;to('/berita');
    }

}</code>
</pre>
                        Jangan lupa menambahkan routing pada file Routes.php didalam folder app->config
                        <pre>
                            <code>&lt;?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes-&gt;get('/', 'Home::index');

$routes-&gt;get('/about', 'Page::about');

$routes-&gt;get('/contact', 'Page::contact');

$routes-&gt;get('/faqs', 'Page::faqs');

$routes-&gt;get('/berita', 'BeritaController::index');


$routes-&gt;get('/isi_berita', 'BeritaController::create');

$routes-&gt;post('berita_store', 'BeritaController::store');

$routes-&gt;get('edit_berita/(:num)', 'BeritaController::edit/$1');
$routes-&gt;post('update_berita/(:num)', 'BeritaController::update/$1');
// Tambah
$routes-&gt;get('delete_berita/(:num)', 'BeritaController::delete/$1');</code>
                        </pre>
                        </p>
                        Silahkan running <br>
                        php spark serve<br><br>
                        untuk mengujicoba ketikkan http://localhost:8080/berita kemudian klik delete.

                    </article>
                </section>

                <div class="penugasan">
                    <h5>Tugas 1</h5>
                    <p>Pada tahap ini, Anda diharapkan telah memahami bagaimana membangun Sistem CRUD menggunakan codeigniter 4.
                        Berikutnya silahkan ulangi prosedur diatas untuk membuat sistem CRUD untuk 2 tabel baru dengan detail di bawah ini.
                        Anda harus memulai dari penambahan tabel dan kolom menggunakan phpmyadmin, membuat model, view, dan controller untuk setiap operasi CRUD. </p>
                    <p class="text-danger">
                        Nama tabel : pengumuman <br>
                        Kolom : <br><br>

                        id (int, 255, auto increment, primary)<br>
                        judul (varchar, 255)<br>
                        pengumuman (text)<br>
                    </p>
                    <p class="text-primary">
                        Nama tabel : user <br>
                        Kolom : <br><br>

                        id (int, 255, auto increment, primary)<br>
                        nama (varchar, 255)<br>
                        username (varchar, 255)<br>
                        password (varchar, 255)<br>
                        status (varchar, 255)<br>

                    </p>
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
                    <a href="#sub1" class="pe-auto" id="pendahuluan">
                        <li>Praktik Menampilkan Data</li>
                    </a>
                    <a href="#sub2">
                        <li>Praktik Mengisi Data</li>
                    </a>
                    <a href="#sub3">
                        <li>Praktik Mengedit Data</li>
                    </a>
                    <a href="#sub4">
                        <li>Praktik Menghapus Data</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>

<!-- <pre>
<code class="rounded-3">public function about()
{
   echo view('about');
}
</code>
</pre> -->