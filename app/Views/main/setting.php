<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-2 position-sticky top-0 sidebar" id="side-setting">
            <div class="container p-2 fs-5 d-flex flex-column sidemenu">
                <div class="container py-2 my-2">
                    <a href="/myCourse" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-house ps-3"></i>
                        <span>Home</span></a>
                </div>
                <div class="container py-2 my-2">
                    <a href="/all-modul" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-mortarboard ps-3"></i>
                        <span>Modul</span></a>
                </div>

                <div class="container py-2 my-2">
                    <a href="/" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-gear ps-3"></i>
                        <span>Setting</span></a>
                </div>

                <div class="flex-grow-1"></div>
                <div class="container py-2 my-2 mt-auto">
                    <a href="/logout" class="d-flex align-items-center text-decoration-none">
                        <i class="bi bi-box-arrow-right ps-3"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-10" id="setting-sect">
            <div id="head-setting">Profile & Pengaturan</div>
            <div id="content-setting">
                <div class="d-flex flex-row ">

                    <button id="profile-btn" class="ms-5 pb-2 setting-active">
                        Profile
                    </button>

                    <button id="profile-picture-btn" class="ms-5 pb-2">
                        Profile Picture
                    </button>


                </div>
                <hr class="fw-bold p-0 m-0">
            </div>

            <form action="#" id="profile-form" name="profile-form">
                <div class="mb-3">
                    <label for="nama" class="form-label">Username</label>
                    <input type="text" class="form-control w-75" id="namaUser" aria-describedby="namaHelp">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control w-75" id="namaUser" aria-describedby="namaHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control w-75" id="emailUser" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control w-75" id="websiteUser" aria-describedby="websiteHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Biography</label>
                    <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button id="save-btn">Save</button>
            </form>

            <form class="d-none" action="#" id="profilePicture-form" name="profilePicture-form">
                <h5>Preview Gambar</h5>
                <div class="preview-gambar">
                    <img class="mx-auto" src="<?= base_url('/img/static/default-pfp.jpg'); ?>" alt="preview image">
                </div>

                <div class="mb-3">
                    <input class="form-control w-75" type="file" id="formFile">
                    <label for="formFile" class="form-label"></label>
                </div>
                <button id="save-btn">Save</button>
            </form>


        </div>

    </div>
</div>


<?= $this->endSection(); ?>