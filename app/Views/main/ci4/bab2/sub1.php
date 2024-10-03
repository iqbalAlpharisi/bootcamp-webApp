<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>
<?= $this->include('layout/sidebar'); ?>

<div id="overlay" class="overlay"></div>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/IconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Authentication</h5>
                    <div class="w-100"></div>
                    <div class="col fw-light">Dasar Codeigniter 4</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-8 pe-5 ">
            <div class="isi container">

                <section>
                    <h5 id="sect1">Login</h5>
                    <article>
                        <p>
                            Pada sub bab sebelumnya, kita membuat aplikasi CRUD tanpa ada fitur autentikasi (login logout).
                            Pada bab ini, kita akan mengubah konsep yaitu semua CRUD diatas akan kita lakukan
                            di dalam sistem sehingga tidak dapat diakses langsung oleh user tanpa melakukan login. <br><br>
                            Untuk itu posisi BeritaController akan bisa diakses setelah user melakukan login.<br><br>
                            Kita perlu menambahkan satu controller baru yang menghandle aktivitas login dan logout. Kita tambahkan 1 file controller dengan nama AuthController.php
                        </p>
                        <pre>
                            <code>
&lt;?php 

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller {
    public function __construct() {
 

        // Start the session service
        $this-&gt;session = \Config\Services::session();
    }

    public function login() {
        if ($this-&gt;request-&gt;getMethod() === 'post') {
            $username = $this-&gt;request-&gt;getPost('username');
            $password = $this-&gt;request-&gt;getPost('password');

            $userModel = new UserModel();
            $user = $userModel-&gt;where('username', $username)-&gt;first();

            if ($user &amp;&amp; password_verify($password, $user['password'])) {
                // Set session
                $this-&gt;session-&gt;set([
                    'username' =&gt; $user['username'],
                    'logged_in' =&gt; true
                ]);

                return redirect()-&gt;to('/admin);
            } else {
                // Handle invalid login
                // Add a flash message or similar to notify the user
            }
        }

        return view('login_page');
    }

    public function logout() {
        $this-&gt;session-&gt;destroy();
        return redirect()-&gt;to('/login');
    }

    // Additional methods for authentication...
}
                            </code>
                        </pre>
                        <p>
                            Buat 1 file view di folder app->view untuk menampilkan halaman login . Berikan nama file login_page.php
                        <pre>
                                <code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Login&lt;/title&gt;
 &lt;/head&gt;
&lt;body&gt;

        &lt;form action=&quot;&lt;?= site_url('login'); ?&gt;&quot; method=&quot;post&quot;&gt;
             Username :
                    &lt;input name=&quot;username&quot; type=&quot;text&quot;&gt;
                         Password :
                  
  &lt;input name=&quot;password&quot; type=&quot;password&quot;&gt;
              
       &lt;button type=&quot;submit&quot;&gt;
                        Sign In
                    &lt;/button&gt;
             
            &lt;/form&gt;
       
&lt;/body&gt;
&lt;/html&gt;</code>
                            </pre>
                        </p>

                        <p>
                            Lakukan konfigurasi pada file AuthFilter.php didalam folder app->filters
                        <pre>
                                <code>&lt;?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if user is not logged in
        if (!session()-&gt;get('logged_in')) {
            // Redirect to login
            return redirect()-&gt;to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here if needed after the request is processed
    }
}</code>
                            </pre>
                        </p>

                        <p>Modifikasi routing dengan menambahkan autentikasi pada routing dengan mengedit file Routes.php di dalam folder app->config
                        <pre>
    <code>&lt;?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes-&gt;get('/', 'Home::index');

//semua routing yg hanya bisa diakses setelah login dikelompokkan  ke dalam grup bernama //admin 

$routes-&gt;group(admin, ['filter' =&gt; 'auth'], function($routes) {

$routes-&gt;get('/', 'BeritaController::index');
$routes-&gt;get('/isi_berita', 'BeritaController::create');
$routes-&gt;post('berita_store', 'BeritaController::store');
$routes-&gt;get('edit_berita/(:num)', 'BeritaController::edit/$1');
$routes-&gt;post('update_berita/(:num)', 'BeritaController::update/$1');
$routes-&gt;get('delete_berita/(:num)', 'BeritaController::delete/$1');
});

//route dibawah ini tidak harus login
$routes-&gt;get('login', 'AuthController::login');
$routes-&gt;post('login', 'AuthController::login');
$routes-&gt;get('logout', 'AuthController::logout');</code>
</pre>
                        </p>

                        <p>
                            Modifikasi file berita.php didalam folder app->view, tambahkan menu logout.
                        <pre>
                                <code>&lt;a href=&quot;&lt;?= site_url('/isi_berita') ?&gt;&quot; &gt;Isi Berita Baru&lt;/a&gt;
&lt;a href=&quot;&lt;?= site_url('/logout') ?&gt;&quot; &gt;Logout&lt;/a&gt;

&lt;hr&gt;

&lt;?php foreach($berita as $key =&gt; $post) : ?&gt;

&lt;?php echo $post['judul'] ?&gt;

&lt;?php echo $post['berita'] ?&gt;

&lt;a href=&quot;&lt;?= site_url('edit_berita/' . $post['id']) ?&gt;&quot; &gt;Edit&lt;/a&gt;
&lt;a href=&quot;&lt;?= site_url('delete_berita/' . $post['id']) ?&gt;&quot; &gt;Delete&lt;/a&gt;

&lt;br&gt;
&lt;?php endforeach ?&gt;</code>
                            </pre>
                        </p>

                        <p>Buat file model baru bernama AuthModel.php
                        <pre>
                        <code>&lt;?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'username', 'password', 'status'];

}</code>
                        </pre>
                        <img src="\img\static\ci4\bab2\image26.png" alt="">
                        </p>
                    </article>
                </section>



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
                        <li>Memngirim data ke view</li>
                    </a>
                    <a href="#sect2">
                        <li>Mengirim Data array ke View</li>
                    </a>

                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>