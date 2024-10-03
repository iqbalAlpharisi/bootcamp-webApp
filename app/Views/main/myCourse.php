<?= $this->extend('layout\template'); ?>

<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?= $this->include('layout\sidebar'); ?>


        <!-- main -->
        <div class="col-10 p-5" style="background-color:#DCDCDC;" id="mainContent">
            <!-- Sorting Section -->
            <section class="container-fluid pb-4" id="filters">
                <div class="sorting row d-flex">
                    <div class="col-2">
                        <div>Urutkan berdasarkan</div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="" href="#">Action</a></li>
                                <li><a class="" href="#">Another action</a></li>
                                <li><a class="" href="#">Something else here</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-6">
                        <div>Filter berdasarkan</div>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="" href="#">Action</a></li>
                                <li><a class="" href="#">Another action</a></li>
                                <li><a class="" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Progress
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="" href="#">Action</a></li>
                                <li><a class="" href="#">Another action</a></li>
                                <li><a class="" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <button id="resetbtn">Reset</button>
                    </div>
                    <form class="col-4 d-flex align-items-end justify-content-end">
                        <input class="searchbar" type="text" placeholder="Cari modul">
                        <button class="searchbar bg-dark" type="button"><i class="bi bi-search text-light"></i></button>
                    </form>
                </div>
            </section>

            <!-- modul list -->
            <section class="modul container d-flex justify-content-center ">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <a href="/ci4">
                            <div class="card h-100">
                                <img src="/img/static/iconMateri/codeigniter.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Code Igniter 4</h5>
                                    <p class="card-text">Pelajari cara menggunakan Kerangka Kerja PHP MVC Paling Populer dan buat aplikasi terbaik, mudah, aman, dan cepat.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/course1">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/">
                            <div class="card h-100">
                                <img src="\img\static\htmlcss.png" class="card-img-top img-fluid mx-auto pt-4" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus pengembangan web 2024</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>