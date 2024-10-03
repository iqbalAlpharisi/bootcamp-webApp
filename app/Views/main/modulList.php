<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<?= $this->include('layout/sidebar'); ?>

<div id="overlay" class="overlay"></div>
<div class="container-fluid" id="all-modul-bg">
    <div class="container w-75 mx-auto">

        <div class="d-flex justify-content-center py-4" id="tittle-all-mod">
            <hr class="lineJudul">
            <div class="px-3">List Modul</div>
            <hr class="lineJudul">
        </div>

        <div class="rounded-3 py-3 mb-5 modul-card">
            <div class="modul-card-1">
                <div class="d-flex px-4">
                    <div class="col-4 d-flex">
                        <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
                        <div class="align-self-center mx-auto fs-4 fw-bold">Code Igniter 4</div>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center">
                        <a href="/ci4"><button id="btn-to-modul">Full Bab</button></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-8 px-5 pt-4">
                        Pelajari cara menggunakan Kerangka Kerja PHP MVC Paling Populer dan buat aplikasi terbaik, mudah, aman, dan cepat.
                    </div>
                    <div class="col-4 px-4 pt-4 mx-auto d-flex flex-column align-items-end justify-content-center">
                        <div>Rp.50.000</div>
                        <div>2 BAB</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3 py-3 mb-5 modul-card">
            <div class="modul-card-1">
                <div class="d-flex px-4">
                    <div class="col-4 d-flex">
                        <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
                        <div class="align-self-center mx-auto fs-4 fw-bold">Code Igniter 4</div>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center">
                        <a href="/ci4"><button id="btn-to-modul">Full Bab</button></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-8 px-5 pt-4">
                        Pelajari cara menggunakan Kerangka Kerja PHP MVC Paling Populer dan buat aplikasi terbaik, mudah, aman, dan cepat.
                    </div>
                    <div class="col-4 px-4 pt-4 mx-auto d-flex flex-column align-items-end justify-content-center">
                        <div>Rp.50.000</div>
                        <div>2 BAB</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-3 py-3 mb-5 modul-card">
            <div class="modul-card-1">
                <div class="d-flex px-4">
                    <div class="col-4 d-flex">
                        <div class="rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
                        <div class="align-self-center mx-auto fs-4 fw-bold">Code Igniter 4</div>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center">
                        <a href="/ci4"><button id="btn-to-modul">Full Bab</button></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-8 px-5 pt-4">
                        Pelajari cara menggunakan Kerangka Kerja PHP MVC Paling Populer dan buat aplikasi terbaik, mudah, aman, dan cepat.
                    </div>
                    <div class="col-4 px-4 pt-4 mx-auto d-flex flex-column align-items-end justify-content-center">
                        <div>Rp.50.000</div>
                        <div>2 BAB</div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<?= $this->endSection(); ?>