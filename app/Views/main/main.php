<?= $this->extend('layout\template'); ?>

<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-2 position-sticky top-0" id="sidebar">
            <div class="container p-2 fs-5 d-flex flex-column sidemenu">
                <div class="container py-2 my-2">
                    <a href="/main" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-archive ps-3"></i>
                        <span>Home</span></a>
                </div>
                <div class="container py-2 my-2">
                    <a href="/main" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-archive ps-3"></i>
                        <span>Modul</span></a>
                </div>
                <div class="container py-2 my-2">
                    <a href="/main" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-archive ps-3"></i>
                        <span>Home</span></a>
                </div>



                <div class="container align-self-stretch">Log Out</div>
            </div>
        </div>

        <!-- main -->
        <div class="col-10 p-5" style="background-color:#DCDCDC;">
            <!-- Sorting Section -->
            <section class="container-fluid  pb-4">
                <div class="sorting row d-flex">
                    <div class="col-2">
                        <div>Sort By</div>
                        <button class="">Recently access <i class="bi bi-chevron-down"></i></button>
                    </div>
                    <div class="col-6">
                        <div>filter By</div>
                        <button class="ms-3" type="button">Categories <i class="bi bi-chevron-down"></i></button>
                        <button type="button">Progress <i class="bi bi-chevron-down"></i></button>
                        <button id="resetbtn">Reset</button>
                    </div>
                    <form class="col-4 d-flex align-items-end justify-content-end">
                        <input class="searchbar" type="text" placeholder="Search My content">
                        <button class="searchbar bg-dark" type="button"><i class="bi bi-search text-light"></i></button>
                    </form>
                </div>
            </section>

            <!-- modul list -->
            <section class="modul container d-flex justify-content-center ">
                <div class="row row-cols-1 row-cols-md-3 g-4">

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