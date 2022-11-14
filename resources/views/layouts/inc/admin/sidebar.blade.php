<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
            <i class="fa-solid fa-list-ul menu-icon"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="category">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/category/create') }}">
                    <i class="fa-solid fa-plus" style="margin-right: 4px;"></i>
                    Add Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/category') }}">
                    <i class="fa-solid fa-eye"style="margin-right: 4px; font-size: 0.8rem"></i>
                    View Categories
                </a>
            </li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa-solid fa-house-laptop menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/products/create') }}">
                        <i class="fa-solid fa-plus" style="margin-right: 4px;"></i>
                        Add Product
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/products') }}">
                        <i class="fa-solid fa-eye"style="margin-right: 4px; font-size: 0.8rem"></i>
                        View Products
                    </a>
                </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/brands') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Brands</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/colors') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Colors</span>
        </a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
        </a>
        </li> --}}

        {{-- <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
        </a>
        </li> --}}

        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
            </ul>
        </div>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/sliders') }}">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Home Slider</span>
        </a>
        </li>

         <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Site Setting</span>
        </a>
        </li>
    </ul>
</nav>
