<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-dashboard"></i>

                    <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                        داشبورد
                    </a>
                </div>
            </li>
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-file"></i>

                    <a class="nav-link" href="{{ route('admin.articles.index') }}">
                        مقاله ها
                    </a>
                </div>
                <span class="badge bg-info rounded-circle text-black badge-counter">
                        999
                    </span>
            </li>
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-shopping-cart"></i>

                    <a class="nav-link" href="{{ route('admin.courses.index') }}">
                        دوره های آموزشی
                    </a>
                </div>
                <span class="badge bg-info rounded-circle text-black badge-counter">
                        999
                    </span>
            </li>
        </ul>

        <ul class="nav flex-column mb-2">
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-users"></i>

                    <a class="nav-link" href="#">
                        مشتریان
                    </a>
                </div>
                <span class="badge bg-info rounded-circle text-black badge-counter">
                        999
                    </span>
            </li>
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-laugh"></i>

                    <a class="nav-link" href="#">
                        پرداخت های موفق
                    </a>
                </div>
                <span class="badge bg-info rounded-circle text-black badge-counter">
                        20
                    </span>
            </li>
            <li class="nav-item d-flex justify-content-between align-items-center ps-2">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="far fa-sad-cry"></i>

                    <a class="nav-link" href="#">
                        پرداخت های ناموفق
                    </a>
                </div>
                <span class="badge bg-info rounded-circle text-black badge-counter">
                        0
                    </span>
            </li>
        </ul>
    </div>
</nav>
