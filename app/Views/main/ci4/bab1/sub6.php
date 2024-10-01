<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Mengenal View</h5>
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
                    <h5 id="sect1">Apa itu View di CodeIgniter ?</h5>
                    <article>
                        <p>
                            View adalah bagian dari Codeigniter yang bertugas untuk membuat tampilan. View berisi kode HTML, PHP, CSS, dan Javascript yang membentuk sebuah tampilan.<br><br>
                            Masih ingat dengan konsep MVC di tutorial sebelumnya?
                            <img src="/img/static/ci4/bab1/image59.png" alt="">
                        </p>
                        <p>
                            Ketiga komponen ini saling bekerja sama dalam aplikasi Codeigniter.
                        <ul>
                            <li>Model bertugas untuk mengolah data;</li>
                            <li>View bertugas untuk membuat tampilan;</li>
                            <li>Controller bertugas untuk membuat logika dan merespon request.</li>
                        </ul>
                        Saat Controller merespon sebuah request, kadang ia harus mengirimkan view ke client.
                        </p>
                    </article>
                </section>

                <section class="sect2">
                    <h5 id="sect2">Cara load view di controller</h5>
                    <article>
                        <p>
                            Pada tutorial sebelumnya ( Routing dan Controller), kita merespon request dengan perintah echo.
                        <pre>
<code class="rounded-3">public function about()
{
   echo "Halaman About";
}
</code>
</pre>
                        </p>
                        <p>
                            Seharusnya di sini kita merespon dengan mengirimkan view. <br><br>
                            Bagaimana caranya?<br>
                            Caranya, kita harus gunakan fungsi view().
                            <img src="public/img/static/ci4/bab1/image58.png" alt="">
                        </p>
                        <p>
                            contoh :
                        <pre>
<code class="rounded-3">public function about()
{
   echo view('about');
}
</code>
</pre>
                        Saat fungsi view() dieksekusi, ia akan mencari file view pada folder 📁 app/Views berdasarkan nama file view yang diberikan.
                        </p>
                    </article>
                </section>

                <section class="sect3">
                    <h5 id="sect3">Membuat View</h5>
                    <article>
                        Kita akan membuat 4 buah view untuk halaman Home, About, Contact, dan Faqs.<br>
                        Silahkan buka Controller Page, kemudian ubah kodenya menjadi seperti ini:
                        <pre>
<code class="rounded-3">&lt;?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view(&quot;about&quot;);
	}

   public function contact()
	{
		echo view(&quot;contact&quot;);
	}

   public function faqs()
	{
		echo view(&quot;faqs&quot;);
    }
}
</code>
</pre>
                        Berikutnya, kita akan membuat file view-nya.
                    </article>
                </section>

                <section class="sect4">
                    <h5 id="sect4">1. View untuk halaman store</h5>
                    <article>
                        <p>
                            Secara default, view halaman home adalah welcome_message.php, kita bisa juga menggantinya dengan yang lain. <br><br>
                            Namun, biar cepat.. Kita modifikasi saja view ini.<br><br>
                            Silahkan ubah isi kode apps/Views/welcome_message.php menjadi seperti ini:
                        <pre>
<code class="rounded-3">&lt;!DOCTYPE html&gt;

&lt;html lang=&quot;en&quot;&gt;



&lt;head&gt;

	&lt;meta charset=&quot;UTF-8&quot;&gt;

	&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;

	&lt;title&gt;Protal Berita Codeigniter&lt;/title&gt;



	&lt;!-- Bootstrap CSS --&gt;

	&lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?= base_url('css/bootstrap.min.css') ?&gt;&quot; /&gt;

&lt;/head&gt;



&lt;body&gt;



	&lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-primary&quot;&gt;

		&lt;div class=&quot;container&quot;&gt;

			&lt;a class=&quot;navbar-brand&quot; href=&quot;&lt;?= base_url() ?&gt;&quot;&gt;Home&lt;/a&gt;

			&lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;

				&lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;

			&lt;/button&gt;

			&lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;

				&lt;ul class=&quot;navbar-nav&quot;&gt;

					&lt;li class=&quot;nav-item&quot;&gt;

						&lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('about') ?&gt;&quot;&gt;About&lt;/a&gt;

					&lt;/li&gt;

					&lt;li class=&quot;nav-item&quot;&gt;

						&lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('contact') ?&gt;&quot;&gt;Contact&lt;/a&gt;

					&lt;/li&gt;

					&lt;li class=&quot;nav-item&quot;&gt;

						&lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('faqs') ?&gt;&quot;&gt;Faqs&lt;/a&gt;

					&lt;/li&gt;

				&lt;/ul&gt;

			&lt;/div&gt;

		&lt;/div&gt;

	&lt;/nav&gt;



	&lt;header class=&quot;jumbotron jumbotron-fluid&quot;&gt;

		&lt;div class=&quot;container&quot;&gt;

			&lt;div class=&quot;row&quot;&gt;

				&lt;div class=&quot;col-md-12&quot;&gt;

					&lt;h1 class=&quot;h1&quot;&gt;Portal Berita Codeigniter&lt;/h1&gt;

				&lt;/div&gt;

			&lt;/div&gt;

		&lt;/div&gt;

	&lt;/header&gt;



	&lt;div class=&quot;container&quot;&gt;

		&lt;div class=&quot;row&quot;&gt;

			&lt;div class=&quot;col-md-12 my-2 card&quot;&gt;

				&lt;div class=&quot;card-body&quot;&gt;

					&lt;h5 class=&quot;h5&quot;&gt;Codeigniter 4 Sudah Rilis!&lt;/h5&gt;

					&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?&lt;/p&gt;

				&lt;/div&gt;

			&lt;/div&gt;

			&lt;div class=&quot;col-md-12 my-2 card&quot;&gt;

				&lt;div class=&quot;card-body&quot;&gt;

					&lt;h5 class=&quot;h5&quot;&gt;Pengembangan Codeiginter 4 Tertunda&lt;/h5&gt;

					&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?&lt;/p&gt;

				&lt;/div&gt;

			&lt;/div&gt;

			&lt;div class=&quot;col-md-12 my-2 card&quot;&gt;

				&lt;div class=&quot;card-body&quot;&gt;

					&lt;h5 class=&quot;h5&quot;&gt;Wow, Ini 5 Startup yang Menggunakan Codeigniter&lt;/h5&gt;

					&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?&lt;/p&gt;

				&lt;/div&gt;

			&lt;/div&gt;

			&lt;div class=&quot;col-md-12 my-2 card&quot;&gt;

				&lt;div class=&quot;card-body&quot;&gt;

					&lt;h5 class=&quot;h5&quot;&gt;Codeigniter Ternyata Framework Terpopuler di Inodnesia&lt;/h5&gt;

					&lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?&lt;/p&gt;

				&lt;/div&gt;

			&lt;/div&gt;

		&lt;/div&gt;

	&lt;/div&gt;



	&lt;footer class=&quot;jumbotron jumbotron-fluid mt-5 mb-0&quot;&gt;

		&lt;div class=&quot;container text-center&quot;&gt;Copyright &amp;copy &lt;?= Date('Y') ?&gt; CI News&lt;/div&gt;

	&lt;/footer&gt;



	&lt;!-- Jquery dan Bootsrap JS --&gt;

	&lt;script src=&quot;&lt;?= base_url('js/jquery.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

	&lt;script src=&quot;&lt;?= base_url('js/bootstrap.min.js') ?&gt;&quot;&gt;&lt;/script&gt;



&lt;/body&gt;



&lt;/html&gt;
</code>
</pre>
                        Jika sekarang kita membuka localhost:8080, maka tampilannya akan berubah menjadi seperti ini.
                        <img class="my-4" src="/img/static/ci4/bab1/image21.png" alt="">
                        Mari kita buat juga view untuk halaman yang lainnya.
                        </p>
                    </article>
                </section>

                <section class="sect5">
                    <h5 id="sect5">2. View untuk Halaman About</h5>
                    <article>
                        <p>
                            Buatlah file baru di dalam folder app/Views dengan nama about.php dan isilah dengan kode berikut.
                        <pre>
<code class="rounded-3">&lt;!DOCTYPE html&gt;

&lt;html lang=&quot;en&quot;&gt;



&lt;head&gt;

   &lt;meta charset=&quot;UTF-8&quot;&gt;

   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;

   &lt;title&gt;About us&lt;/title&gt;



   &lt;!-- Bootstrap CSS --&gt;

   &lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?= base_url('css/bootstrap.min.css') ?&gt;&quot; /&gt;

&lt;/head&gt;



&lt;body&gt;



   &lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-primary&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;a class=&quot;navbar-brand&quot; href=&quot;&lt;?= base_url() ?&gt;&quot;&gt;Home&lt;/a&gt;

           &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;

               &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;

           &lt;/button&gt;

           &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;

               &lt;ul class=&quot;navbar-nav&quot;&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('about') ?&gt;&quot;&gt;About&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('contact') ?&gt;&quot;&gt;Contact&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('faqs') ?&gt;&quot;&gt;Faqs&lt;/a&gt;

                   &lt;/li&gt;

               &lt;/ul&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/nav&gt;



   &lt;header class=&quot;jumbotron&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;div class=&quot;row&quot;&gt;

               &lt;div class=&quot;col-md-12&quot;&gt;

                   &lt;h1 class=&quot;h1&quot;&gt;About us&lt;/h1&gt;

               &lt;/div&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/header&gt;



   &lt;div class=&quot;container&quot;&gt;

       &lt;div class=&quot;row&quot;&gt;

           &lt;div class=&quot;col-md-12&quot;&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/div&gt;



   &lt;footer class=&quot;jumbotron jumbotron-fluid mt-5 mb-0&quot;&gt;

		&lt;div class=&quot;container text-center&quot;&gt;Copyright &amp;copy &lt;?= Date('Y') ?&gt; CI News&lt;/div&gt;

	&lt;/footer&gt;



   &lt;!-- Jquery dan Bootsrap JS --&gt;

   &lt;script src=&quot;&lt;?= base_url('js/jquery.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

   &lt;script src=&quot;&lt;?= base_url('js/bootstrap.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

&lt;/body&gt;



&lt;/html&gt;
</code>
</pre>
                        Hasilnya: localhost:8080/about
                        <img src="/img/static/ci4/bab1/image3.png" alt="">
                        </p>
                    </article>
                </section>

                <section class="sect6">
                    <h5 id="sect6">3. View untuk Halaman Contact</h5>
                    <article>
                        <p>
                            Buatlah file baru dengan nama contact.php di dalam folder app/Views dengan isi sebagai berikut:
                        <pre>
<code class="rounded-3">&lt;!DOCTYPE html&gt;

&lt;html lang=&quot;en&quot;&gt;



&lt;head&gt;

   &lt;meta charset=&quot;UTF-8&quot;&gt;

   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;

   &lt;title&gt;Contact us&lt;/title&gt;



   &lt;!-- Bootstrap CSS --&gt;

   &lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?= base_url('css/bootstrap.min.css') ?&gt;&quot; /&gt;

&lt;/head&gt;



&lt;body&gt;



   &lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-primary&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;a class=&quot;navbar-brand&quot; href=&quot;&lt;?= base_url() ?&gt;&quot;&gt;Home&lt;/a&gt;

           &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;

               &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;

           &lt;/button&gt;

           &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;

               &lt;ul class=&quot;navbar-nav&quot;&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('about') ?&gt;&quot;&gt;About&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('contact') ?&gt;&quot;&gt;Contact&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('faqs') ?&gt;&quot;&gt;Faqs&lt;/a&gt;

                   &lt;/li&gt;

               &lt;/ul&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/nav&gt;



   &lt;header class=&quot;jumbotron&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;div class=&quot;row&quot;&gt;

               &lt;div class=&quot;col-md-12&quot;&gt;

                   &lt;h1 class=&quot;h1&quot;&gt;Contact us&lt;/h1&gt;

               &lt;/div&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/header&gt;



   &lt;div class=&quot;container&quot;&gt;

       &lt;div class=&quot;row&quot;&gt;

           &lt;div class=&quot;col-md-6&quot;&gt;

           

           &lt;form action=&quot;&quot; class=&quot;form&quot;&gt;



           &lt;div class=&quot;form-group&quot;&gt;

               &lt;label for=&quot;email&quot;&gt;Email&lt;/label&gt;

               &lt;input type=&quot;email&quot; class=&quot;form-control&quot;&gt;

           &lt;/div&gt;



           &lt;div class=&quot;form-group&quot;&gt;

               &lt;label for=&quot;email&quot;&gt;Message&lt;/label&gt;

               &lt;textarea name=&quot;message&quot; class=&quot;form-control&quot; id=&quot;&quot; cols=&quot;30&quot; rows=&quot;10&quot;&gt;&lt;/textarea&gt;

           &lt;/div&gt;

           

           &lt;div class=&quot;form-group&quot;&gt;

               &lt;input type=&quot;sectmit&quot; value=&quot;Kirim&quot; class=&quot;btn btn-primary w-100&quot;&gt;

           &lt;/div&gt;



           &lt;/form&gt;



           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/div&gt;



   &lt;footer class=&quot;jumbotron jumbotron-fluid mt-5 mb-0&quot;&gt;

		&lt;div class=&quot;container text-center&quot;&gt;Copyright &amp;copy &lt;?= Date('Y') ?&gt; CI News&lt;/div&gt;

	&lt;/footer&gt;



   	&lt;!-- Jquery dan Bootsrap JS --&gt;

	&lt;script src=&quot;&lt;?= base_url('js/jquery.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

	&lt;script src=&quot;&lt;?= base_url('js/bootstrap.min.js') ?&gt;&quot;&gt;&lt;/script&gt;



&lt;/body&gt;



&lt;/html&gt;
</code>
</pre>
                        Hasilnya: localhost:8080/contact
                        <img src="/img/static/ci4/bab1/image45.png" alt="">
                        </p>
                    </article>
                </section>

                <section class="sect7">
                    <h5 id="sect7">4. View untuk Halaman FAQs</h5>
                    <article>
                        <p>
                            Terakhir.. buatlah file baru dengan nama faqs.php di dalam folder app/Views dengan isi sebagai berikut:
                        <pre>
<code class="rounded-3">&lt;!DOCTYPE html&gt;

&lt;html lang=&quot;en&quot;&gt;



&lt;head&gt;

   &lt;meta charset=&quot;UTF-8&quot;&gt;

   &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;

   &lt;title&gt;FAQs&lt;/title&gt;



   &lt;!-- Bootstrap CSS --&gt;

   &lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?= base_url('css/bootstrap.min.css') ?&gt;&quot; /&gt;

&lt;/head&gt;



&lt;body&gt;



   &lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-primary&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;a class=&quot;navbar-brand&quot; href=&quot;&lt;?= base_url() ?&gt;&quot;&gt;Home&lt;/a&gt;

           &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;

               &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;

           &lt;/button&gt;

           &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;

               &lt;ul class=&quot;navbar-nav&quot;&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('about') ?&gt;&quot;&gt;About&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('contact') ?&gt;&quot;&gt;Contact&lt;/a&gt;

                   &lt;/li&gt;

                   &lt;li class=&quot;nav-item&quot;&gt;

                       &lt;a class=&quot;nav-link&quot; href=&quot;&lt;?= base_url('faqs') ?&gt;&quot;&gt;Faqs&lt;/a&gt;

                   &lt;/li&gt;

               &lt;/ul&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/nav&gt;



   &lt;header class=&quot;jumbotron&quot;&gt;

       &lt;div class=&quot;container&quot;&gt;

           &lt;div class=&quot;row&quot;&gt;

               &lt;div class=&quot;col-md-12&quot;&gt;

                   &lt;h1 class=&quot;h1&quot;&gt;FAQs&lt;/h1&gt;

               &lt;/div&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/header&gt;



   &lt;div class=&quot;container&quot;&gt;

       &lt;div class=&quot;row&quot;&gt;

           &lt;div class=&quot;col-md-12&quot;&gt;

               &lt;h2 class=&quot;h2&quot;&gt;Apa itu CI Neews?&lt;/h2&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;h2 class=&quot;h2&quot;&gt;Bagaimana Cara Membuat Akun CI News?&lt;/h2&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;h2 class=&quot;h2&quot;&gt;Bagaimana Cara Menulis Artikel di CI News?&lt;/h2&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

               &lt;h2 class=&quot;h2&quot;&gt;Apakah CI News Official?&lt;/h2&gt;

               &lt;p&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi unde cumque! Cum repellendus eveniet, illum id doloribus, quibusdam tenetur debitis est libero quasi assumenda voluptates aliquam tempore. Porro, asperiores.&lt;/p&gt;

           &lt;/div&gt;

       &lt;/div&gt;

   &lt;/div&gt;



   &lt;footer class=&quot;jumbotron jumbotron-fluid mt-5 mb-0&quot;&gt;

&lt;div class=&quot;container text-center&quot;&gt;Copyright &amp;copy &lt;?= Date('Y') ?&gt; CI News&lt;/div&gt;

&lt;/footer&gt;



   &lt;!-- Jquery dan Bootsrap JS --&gt;

   &lt;script src=&quot;&lt;?= base_url('js/jquery.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

   &lt;script src=&quot;&lt;?= base_url('js/bootstrap.min.js') ?&gt;&quot;&gt;&lt;/script&gt;

&lt;/body&gt;



&lt;/html&gt;
</code>
</pre>
                        Hasilnya: localhost:8080/faqs
                        <img src="/img/static/ci4/bab1/image7.png" alt="">
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
                        <li>Pengertian View</li>
                    </a>
                    <a href="#sect2">
                        <li>Cara Load View</li>
                    </a>
                    <a href="#sect3">
                        <li>Membuat View</li>
                    </a>
                    <a href="#sect4">
                        <li>View untuk halaman Store</li>
                    </a>
                    <a href="#sect5">
                        <li>View untuk halaman About</li>
                    </a>
                    <a href="#sect6">
                        <li>View untuk halaman Contact</li>
                    </a>
                    <a href="#sect7">
                        <li>View untuk halaman FAQs</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>