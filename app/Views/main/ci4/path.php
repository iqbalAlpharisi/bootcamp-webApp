<?= $this->extend('\layout\template'); ?>
<?= $this->section('konten'); ?>


<div id="overlay" class="overlay"></div>

<div class="path">
    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center mb-4">
                <div class="mt-5 rounded-circle" style="background-image: url('/img/static/iconMateri/codeigniter.png');" id="mask"></div>
                <h2>Code Igniter 4</h2>
            </div>

            <div class="col-12 mx-auto w-75 mb-3">
                <h5>Ringkasan</h5>
                <p>
                    Coding dalam PHP atau bahasa lainnya dapat memakan waktu, terutama untuk tugas-tugas umum. Disinilah framework menjadi cara terbaik untuk menerapkan tugas-tugas umum, seperti:
                    Keamanan, Validasi formulir, Konfigurasi basis data, Kueri basis data (CRUD)
                </p>
            </div>

            <div class="col-12 mx-auto w-75 rounded-2 p-0 pathSect">
                <h5 class="numBab">Bab 1</h5>
                <div class="py-2">
                    <a href="<?= base_url('/ci4/bab1/sub1') ?>">
                        <div class=" judulSub"><i class="bi bi-book"></i> Instalasi Software Xampp
                        </div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub2') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Instalasi Software Composer</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub3') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> instalasi Software CI4</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub4') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Pengenalan Code Igniter 4</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub5') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Membuat Routes, Controller, dan Bootstrap</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub6') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Mengenal View</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub7') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Mengirim Data ke View</div>
                    </a>
                    <a href="<?= base_url('/ci4/bab1/sub8') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Praktik</div>
                    </a>
                </div>
            </div>

            <div class="col-12 mx-auto w-75 rounded-2 p-0 pathSect">
                <h5 class="numBab">Bab 2</h5>
                <div class="py-2">
                    <a href="<?= base_url('/ci4/bab2/sub1') ?>">
                        <div class="judulSub"><i class="bi bi-book"></i> Authentication</div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>