<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>

<div class="container w-75" id="modulKonten">
    <div class="row">
        <div class="col mt-5 p-0 container-fluid d-flex" id="headmodul">
            <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
            <div class="container mx-0 my-auto">
                <div class="row">
                    <h5 class="col">Mengirim Data ke View</h5>
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
                    <h5 id="sect1">Mengirim Data Ke View</h5>
                    <article>
                        <p>
                            Sejauh ini, kita sudah berhasil menampilkan view. <br><br>
                            Namun, kadang kita juga nantinya akan menggunakan data dari database dan menampilkannya di dalam view.<br><br>
                            Karena itu, kita harus mengirim data ke View.<br><br>
                            Caranya bagaimana?<br>
                            Tambahkan variabel array sebagai parameter kedua pada fungsi view().
                            <img src="/img/static/ci4/bab1/image41.png" alt="">
                        </p>
                        <p>
                            Data yang akan dikirim ke view harus dalam bentuk array asosiatif. <br><br>
                            Array asosiatif adalah array yang memiliki key dan value. Key akan menjadi nama variabel di dalam view, dan value akan menjadi nilainya.
                            Value ini bebas kita isi dengan apa saja.. boleh diisi dengan string, array, object, integer, dll.<br><br>
                            Jika kamu baru mendengar jenis array ini.. disarankan untuk membaca lagi tutorial tentang Array di PHP.
                        </p>
                        <p>
                            Sekarang mari kita coba mengirim data ke view. <br>
                            Silahkan buka Controller Page, kemudian ubahlah kode pada method contact() menjadi seperti ini:
                        <pre>
<code class="rounded-3">public function contact()
{
	$data['name'] = &quot;Petani Kode&quot;;
	echo view(&quot;contact&quot;, $data);
}
</code>
</pre>
                        Variabel $data adalah variabel asosiatif array, dengan name sebagai key dan ‘Petani Kode’ sebagai value untuk name. <br><br>
                        Key name nantinya akan menjadi sebuah variabel di dalam view.
                        </p>

                        <p>
                            Sekarang, buka kode app/Views/contact.php dan tambahkan kode di bawah ini tepat di atas pembuatan form.
                        <pre>
<code class="rounded-3">&lt;h3 class=&quot;h3&quot;&gt;Hello &lt;?= $name ?&gt;!&lt;/h3&gt;

&lt;p&gt;Silahkan hubungi kami melalui form berikut&lt;/p&gt;
</code>
</pre>
                        Sehingga akan menjadi seperti ini:
                        <img src="/img/static/ci4/bab1/image43.png" alt="">
                        </p>
                        <p>
                            Perhatikanlah..
                            Di sana kita menggunakan:
                            &lt;?= $name ?&gt; <br><br>

                            untuk mencetak isi variabel name.
                            Ini adalah bentuk singkat dari
                            &lt;?php echo $name ?&gt;
                        </p>
                        <p>
                            Sekarang coba buka halaman contact melalui alamat localhost:8080/contact, maka hasilnya:
                            <img src="/img/static/ci4/bab1/image32.png" alt="">
                        </p>
                    </article>
                </section>

                <section>
                    <h5 id="sect2">Mengirim Data Array ke View</h5>
                    <article>
                        <p>
                            Jika tadi kita hanya mengirim data berupa string, kini kita coba yang lebih kompleks dengan mengirim data array. <br><br>
                            Biasanya ini nanti akan sering kita pakai untuk menampilkan data yang berasal dari database.<br><br>
                            Silahkan buka Controller Page, kemudian ubah kode pada method faqs menjadi seperti ini.
                        <pre>
<code class="rounded-3">&lt;?php



namespace App\Controllers;



class Page extends BaseController

{

	public function about()

	{

		echo view(&quot;about&quot;);

	}



	public function contact()

	{

		$data['name'] = &quot;Petani Kode&quot;;

		echo view(&quot;contact&quot;, $data);

	}



	public function faqs()

	{

		// membuat data untuk dikirim ke view

		$data['data_faqs'] = [

			[

				'question' =&gt; 'Apa itu Codeigniter?',

				'answer' =&gt; 'Codeigniter adalah framework untuk membuat web'

			],

			[

				'question' =&gt; 'Siapa yang membuat Codeiginter?',

				'answer' =&gt; 'CI awalnya dibuat oleh Ellislab'

			],

			[

				'question' =&gt; 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',

				'answer' =&gt; 'Codeigniter versi 4.0.4'

			]

		];



		// load view dengan data

		echo view(&quot;faqs&quot;, $data);

	}

}
</code>
</pre>
                        </p>
                        <p>
                            Variabel $data adalah variabel yang berisi asosiatif array. Pada kode di atas, kita membuat data_faqs
                            sebagai key dan mengisinya dengan array dari kumpulan pertanyaan dan jawaban. <br><br>
                            Berikutnya, silahkan ubah kode view app/Views/faqs.php menjadi seperti ini:
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

               &lt;?php foreach ($data_faqs as $faq) : ?&gt;

                   &lt;h2 class=&quot;h2&quot;&gt;&lt;?= $faq['question'] ?&gt;&lt;/h2&gt;

                   &lt;p&gt;&lt;?= $faq['answer'] ?&gt;&lt;/p&gt;

               &lt;?php endforeach; ?&gt;

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
                        </p>
                        <p>
                            Pada kode tersebut, kita menggunakan perulangan foreach untuk meng-iterasi semua data pada variabel $data_faqs. <br><br>
                            Maka hasilnya:
                            <img src="/img/static/ci4/bab1/image31.png" alt="">
                        </p>
                    </article>
                </section>

                <div class="note py-3 my-5 container">
                    <h5><i class="bi bi-pencil-square"></i> Apa Selanjutnya</h5>
                    <p>Sejauh ini kita sudah berhasil membuat view di Codeigniter. <br><br>
                        Namun.. <br><br>
                        Jika diperhatikan, semua view yang dibuat strukturnya sama dan diulang-ulang. Mulai dari pembuatan
                        &lt;!DOCTYPE html&gt; hingga bagian penutup HTML-nya. <br><br>
                        Hanya saja berbeda di bagian konten. Ini boleh-boleh saja dilakukan. <br><br>
                        Tapi masalahnya nanti saat kita mengubah sesuatu—misalnya mengubah warna navbar—maka kita harus mengubah di semua view.
                        Kalau cuma satu atau dua view, ini tidak apa-apa.<br><br>
                        Tapi kalau sudah banyak.. kita bakal kerepotan.<br><br>
                        <span class="fw-bold">Solusinya:</span>
                        Gunakan View Layout dan View Cell.
                    </p>
                </div>

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