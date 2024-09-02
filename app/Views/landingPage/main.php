<?= $this->extend('layout\template'); ?>

<?= $this->section('konten'); ?>
<div class="mt-5 container">
    <div class="row">
        <div class="col text-center">
            <h3 class="fs-1 fw-bold">Karier Anda Dalam <span id="highlightText">Pemrograman Web</span> <br>Dimulai di sini</h3>
            <h3 class="fs-5 fw-lighter mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Saepe modi at officiis eos facilis quidem iste eligendi! </h3>
            <a class="text-reset" href="/main">
                <button type="button" class="btn border border-2 bg-transparent btn-lg text-reset mt-4 px-5" id="startBtn">Start Here</button>
            </a>
            <img id="bannerImg" class="d-block mx-auto" src="img\static\green-minimal-computer-desktop-screen-digital-device-with-design-space.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2 class="fw-bold">Pengenalan Bootcamp</h2>
            <p class="mt-3">Ini adalah situs web yang kami harapkan saat kami belajar sendiri.<br> Kami menjelajahi internet untuk mencari sumber daya terbaik guna melengkapi pembelajaran Anda<br> dan menyajikannya dalam urutan yang logis.</p>
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-4">
            <span class="fw-bold fs-5">Learn</span><br>
            <img class="illus mx-auto d-block m-3" src="\img\static\book-closed-svgrepo-com.svg" alt="">
            Learn from a curriculum with the best curated online tutorials, blogs, and courses.
        </div>
        <div class="col-4">
            <span class="fw-bold fs-5">Build</span><br>
            <img class="illus mx-auto d-block m-3" src="\img\static\laptop-portable-svgrepo-com.svg" alt="">
            Build dozens of portfolio-worthy projects along the way, from simple scripts to full programs and deployed websites.
        </div>
        <div class="col-4">
            <span class="fw-bold fs-5">Connect</span><br>
            <img class="illus mx-auto d-block m-3" src="\img\static\business-electricity-connect-energy-commerce-svgrepo-com.svg" alt="">
            You're not alone. Learn and get help from our friendly community of beginner and experienced developers.
        </div>
    </div>
</div>

<div class="container my-5 text-center w-50">
    <div class="my-5 fw-bold fs-3">Pelajari semua yang perlu Anda ketahui</div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="mt-4 w-50 mx-auto d-block" src="img\static\htmlcss.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML dan CSS</h5>
                    </div>
                </div>
            </div>



        </div>
        <a class="text-reset" href="/main">
            <button type="button" class="btn border border-2 bg-transparent btn-lg text-reset mt-4 px-5" id="startBtn">Full Kurikulum</button>
        </a>
    </div>
</div>

<?= $this->endSection(); ?>