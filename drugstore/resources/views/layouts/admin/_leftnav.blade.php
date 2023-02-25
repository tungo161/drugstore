<!-- offcanvas -->
<div
class="offcanvas offcanvas-start sidebar-nav bg-dark"
tabindex="-1"
id="sidebar"
>
<div class="offcanvas-body p-0">
    <nav class="navbar-dark">
        <ul class="navbar-nav">
        <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
            CORE
            </div>
        </li>
        <li>
            <a href="admin" class="nav-link px-3 active">
            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
            <span>Home Admin</span>
            </a>
        </li>
        <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
        <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Quản lý chung
            </div>
        </li>

        <li>
            <a href="{{ url('managerusers') }}" class="nav-link px-3">
            <span class="me-2"><i class="bi bi-table"></i></span>
            <span>Thống kê người dùng</span>
            </a>
        </li>

        <li>
            <a href="{{ url('managerproduct') }}" class="nav-link px-3">
            <span class="me-2"><i class="bi bi-table"></i></span>
            <span>Thống kê sản phẩm</span>
            </a>
        </li>

        <li>
            <a href="{{ url('managerorder') }}" class="nav-link px-3">
            <span class="me-2"><i class="bi bi-table"></i></span>
            <span>Thống kê hóa đơn</span>
            </a>
        </li>
        
        <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Tác vụ khác
            </div>
        </li>
        <li>
            <a href="{{ url('') }}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Trang chủ người tiêu dùng</span>
            </a>
        </li>

        <li>
            
            <a class="nav-link px-3"  href="#!" onclick="document.getElementById('logout-form').submit()">Đăng xuất</a>
                <form method="POST" action="{{ url('logout') }}" id="logout-form">
                    @csrf
                </form></li>
            <span class="me-2"><i class="bi bi-graph-up"></i></span>
            <span>Đăng xuất</span>
        </li>

     
        </ul>
    </nav>
</div>
</div>
<!-- offcanvas -->