<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>
<div id="overlay" class="overlay"></div>
<div class="container-fluid">
    <div class="row" id="keranjang-page">
        <div class="col-8">
            <div id="page-keranjang-tittle">Keranjang</div>
            <div>
                <div class="ms-5 pb-2">Modul Di keranjang</div>
                <hr class="fw-bold p-0 m-0">
            </div>
            <div class="d-flex my-4">
                <div class="page-keranjang-img-modul" style="background-image: url('<?= base_url("img/static/IconMateri/codeigniter.png"); ?>');"></div>
                <div class="align-self-center pe-3">
                    <h5>Tittle Modul</h5>
                    <div>by : Author</div>
                </div>
                <div></div>
            </div>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>



<?= $this->endSection(); ?>