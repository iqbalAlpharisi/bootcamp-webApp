<div class="col-2 position-sticky top-0" id="sidebar">
    <div class="container p-2 fs-5 d-flex flex-column sidemenu">
        <div class="container py-2 my-2">
            <a href="/" class="d-flex align-items-center text-decoration-none">
                <i class="bi bi-house ps-3"></i>
                <span>Home</span></a>
        </div>
        <div class="container py-2 my-2">
            <a href="/main" class="d-flex align-items-center text-decoration-none">
                <i class="bi bi-mortarboard ps-3"></i>
                <span>Modul</span></a>
        </div>
        <div class="container py-2 my-2">
            <a href="/main" class="d-flex align-items-center text-decoration-none">
                <i class="bi bi-cart ps-3"></i>
                <span>Keranjang</span></a>
        </div>
        <div class="container py-2 my-2">
            <a href="/main" class="d-flex align-items-center text-decoration-none">
                <i class="bi bi-shop ps-3"></i>
                <span>Store</span></a>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById('toggle-sidebar');
        const sidebar = document.getElementById('sidebar');
        const column = document.getElementById('mainContent');

        // Check if the current page is 'myCourse' page
        const isMyCoursePage = window.location.pathname.includes('/myCourse');

        // Initially hide the sidebar if not on 'myCourse' page
        if (!isMyCoursePage) {
            sidebar.classList.add('hidden');
            column.classList.remove('col-10');
            column.classList.add('col-12');
        }

        // Toggle sidebar and column width on button click
        toggleButton.addEventListener('click', function(event) {
            event.preventDefault();
            sidebar.classList.toggle('hidden');

            if (column.classList.contains('col-10')) {
                column.classList.remove('col-10');
                column.classList.add('col-12');
            } else {
                column.classList.remove('col-12');
                column.classList.add('col-10');
            }
        });
    });
</script>