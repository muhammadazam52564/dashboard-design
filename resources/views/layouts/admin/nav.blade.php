<nav id="sidebar" class="sticky-top">
    <div class="sidebar-header d-flex">
        <div id="header_image" class="rounded-circle d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/m2.png') }}">
        </div>
        <div class="pt-2 d-flex align-items-center">
            <h3 class="ml-3">Mura</h3>
        </div>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home-lg-alt mr-2"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.orders') }}">
                <i class="fas fa-shopping-cart  mr-2"></i>
                Manage Orders
            </a>
        </li>
        <li>
            <a href="{{ route('admin.customers') }}">
            <i class="fas fa-users mr-2"></i>
                Manage Users
            </a>
        </li>
        <li>
            <a href="{{ route('admin.preppers') }}">
            <i class="fas fa-utensils mr-2"></i>
                Manage Preppers
            </a>
        </li>
        <li>
            <a href="{{ route('admin.drivers') }}">
            <i class="fas fa-biking mr-2"></i>
                Manage Drivers
            </a>
        </li>
        <li>
            <a href="{{ route('admin.orders') }}">
            <i class="fas fa-book mr-2"></i>
                Manage Menu
            </a>
        </li>
        <li>
            <a href="#paymentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-credit-card-blank mr-2"></i>
                Payments
            </a>
            <ul class="collapse list-unstyled" id="paymentsSubmenu">
                <li>
                    <a href="{{ route('admin.payments-preppers') }}">Preppers</a>
                </li>
                <li>
                    <a href="{{ route('admin.payments-drivers') }}">Drivers</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#RevenueSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-file-chart-line"></i>
                Revenue Reports
            </a>

            <ul class="collapse list-unstyled" id="RevenueSubmenu">
                <li>
                    <a href="{{ route('admin.revenue-preppers') }}">Preppers</a>
                </li>
                <li>
                    <a href="{{ route('admin.revenue-drivers') }}">Drivers</a>
                </li>
                <li>
                    <a href="{{ route('admin.revenue-orders') }}">Orders</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<form method="post" action="{{ route('logout')}}" class="d-none">
    @csrf
    <input  type="submit" id="logout">
</form>


