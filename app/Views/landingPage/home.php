<?= $this->extend('layout\template'); ?>

<?= $this->section('konten'); ?>
<div class="mt-5 container-fluid">
    <div class="row">
        <div class="col text-center">
            <h3 class="fs-2 fw-bold">Karier Anda Dalam <span id="highlightText">Pemrograman Web</span> <br>Dimulai di sini</h3>
            <h3 class="fs-5 fw-lighter mt-4 w-50 text-center mx-auto">Di sini, kami menawarkan program pelatihan intensif yang
                dirancang khusus untuk membantu Anda menguasai keterampilan pengembangan web terkini,
                mulai dari dasar hingga tingkat lanjut. </h3>
            <a class="text-reset" href="/myCourse">
                <button type="button" class="btn1">Mulai Sekarang</button>
            </a>
        </div>
    </div>
</div>
<img id="bannerImg" class="d-block my-5" src="img\static\bannerImg.png" alt="">



<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2 class="fw-bold">Pengenalan Bootcamp</h2>
            <p class="mt-3">Ini adalah situs web yang kami harapkan saat kami belajar sendiri.<br> Kami menjelajahi internet untuk mencari sumber daya terbaik guna melengkapi pembelajaran Anda<br> dan menyajikannya dalam urutan yang logis.</p>
        </div>
    </div>

    <div class="row text-center mt-5 d-flex w-50 mx-auto justify-content-evenly">
        <div class="col-4">
            <img class="illus mx-auto d-block m-3" src="\img\static\book-closed-svgrepo-com.svg" alt="">
            <span class="fw-bold fs-5">Pengenalan</span><br>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        </div>
        <div class="col-4">
            <img class="illus mx-auto d-block m-3" src="\img\static\laptop-portable-svgrepo-com.svg" alt="">
            <span class="fw-bold fs-5">Rancang</span><br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa rem aperiam assumenda exercitationem aliquid eveniet.
        </div>
        <div class="col-4">
            <img class="illus mx-auto d-block m-3" src="\img\static\business-electricity-connect-energy-commerce-svgrepo-com.svg" alt="">
            <span class="fw-bold fs-5">Publikasi</span><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nam suscipit amet delectus.
        </div>
    </div>

</div>

<div class="container-fluid py-1 mt-5 text-center" id="modulPreview">
    <div class="my-5 fw-bold fs-3">Pelajari semua yang perlu Anda ketahui</div>

    <div class="container w-50">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\html.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\css.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\database.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Database</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\js.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Javascript</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\react.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">React</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\php.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\iconMateri\laravel.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laravel</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card pb-5 h-100">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>

        </div>
        <a class="text-reset" href="/store">
            <button type="button" class="btn1 my-3">Lihat Modul Lainnya</button>
        </a>
    </div>
</div>

<?= $this->endSection(); ?>