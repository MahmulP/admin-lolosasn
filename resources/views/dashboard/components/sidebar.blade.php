<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="{{ route('dashboard.index') }}" class="app-brand-link">
            <img src="{{asset('vendor/assets/img/logo.png')}}" alt="" style="width: 150px;">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-divider mt-0  ">
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase"><span class="menu-header-text"
                data-i18n="Dashboard">Dashboard</span></li>
        <li class="menu-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('orders.index') ? 'active' : '' }}">
            <a href="{{ route('orders.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dollar"></i>
                <div data-i18n="Orders">Orders</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('tokens.index') ? 'active' : '' }}">
            <a href="{{ route('tokens.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-box"></i>
                <div data-i18n="Tokens">Tokens</div>
            </a>
        </li>
    </ul>

</aside>

<div class="layout-page">
    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-xxl">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- Notification -->
                    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="bx bx-bell bx-sm"></i>
                            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end py-0">
                            <li class="dropdown-menu-header border-bottom">
                                <div class="dropdown-header d-flex align-items-center py-3">
                                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                            class="bx fs-4 bx-envelope-open"></i></a>
                                </div>
                            </li>
                            <li class="dropdown-notifications-list scrollable-container">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="vendor/assets/img/avatars/1.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                <p class="mb-0">Won the monthly best seller gold badge
                                                </p>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span
                                                        class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Charles Franklin</h6>
                                                <p class="mb-0">Accepted your connection</p>
                                                <small class="text-muted">12hr ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="vendor/assets/img/avatars/2.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message ✉️</h6>
                                                <p class="mb-0">You have new message from Natalie</p>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="bx bx-cart"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                <small class="text-muted">1 day ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="vendor/assets/img/avatars/9.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                <p class="mb-0">Your ABC project application has been
                                                    approved.</p>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="bx bx-pie-chart-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Monthly report is generated</h6>
                                                <p class="mb-0">July monthly financial report is
                                                    generated </p>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="vendor/assets/img/avatars/5.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Send connection request</h6>
                                                <p class="mb-0">Peter sent you connection request</p>
                                                <small class="text-muted">4 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="vendor/assets/img/avatars/6.png" alt
                                                        class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New message from Jane</h6>
                                                <p class="mb-0">Your have new message from Jane</p>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                            class="bx bx-error"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">CPU is running high</h6>
                                                <p class="mb-0">CPU Utilization Percent is currently at
                                                    88.63%,</p>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)"
                                                    class="dropdown-notifications-archive"><span
                                                        class="bx bx-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-menu-footer border-top">
                                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                    View all notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ Notification -->

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{ Auth::user()->avatar ? 'https://storage.googleapis.com/lidm_211/' . Auth::user()->avatar : asset('vendor/assets/img/empty.jpg') }}" alt
                                    class="rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="https://storage.googleapis.com/lidm_211/{{ Auth::user()->avatar }}"
                                                    alt class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block lh-1">{{ Auth::user()->name ?? '' }}</span>
                                            <small>{{ Auth::user()->role }}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->


                </ul>
            </div>

        </div>
    </nav>
