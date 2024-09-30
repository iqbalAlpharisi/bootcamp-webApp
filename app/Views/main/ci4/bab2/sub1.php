<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/IconMateri/codeigniter.png');" id="mask"></div>
            <!-- /bootCampWebApp/public/img/static/iconMateri/codeigniter.png -->
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
                            <img src="<?= base_url('public/img/static/IconMateri/codeigniter.png'); ?>" alt="">
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
                    </article>
                </section>



                <section class="my-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-book-half"></i> Lihat Modul</button>
                    <button type="button" class="btn btn-dark py-2 px-5" style="background-color: rgb(10, 226, 176);">Track Progress</button>
                    <a href="/ci4/bab1/8" id="nextPage"><button type="button" class="btn btn-outline-dark px-3"><i class="bi bi-arrow-right-short"></i> Selanjutnya</button></a>
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