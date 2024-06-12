<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>icon</title>
                    <defs>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                            id="linearGradient-1">
                            <stop stop-color="#5A8DEE" offset="0%"></stop>
                            <stop stop-color="#699AF9" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%"
                            id="linearGradient-2">
                            <stop stop-color="#FDAC41" offset="0%"></stop>
                            <stop stop-color="#E38100" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                            <g id="Login" transform="translate(519.000000, 244.000000)">
                                <g id="Logo" transform="translate(148.000000, 42.000000)">
                                    <g id="icon" transform="translate(0.000000, 4.000000)">
                                        <path
                                            d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                            id="Combined-Shape" fill="#4880EA"></path>
                                        <path
                                            d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                            id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                            width="7.68181818" height="7.68181818"></rect>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">LolosASN</span>
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
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
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

        <li class="menu-item {{ request()->routeIs('order') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dollar"></i>
                <div data-i18n="Orders">Orders</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('token') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
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
                                <img src="https://storage.googleapis.com/lidm_211/{{ Auth::user()->avatar }}" alt
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
                                <a class="dropdown-item" href="pages-profile-user.html">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-account.html">
                                    <i class="bx bx-cog me-2"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-account-settings-billing.html">
                                    <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                        <span class="flex-grow-1 align-middle">Billing</span>
                                        <span
                                            class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-faq.html">
                                    <i class="bx bx-help-circle me-2"></i>
                                    <span class="align-middle">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-pricing.html">
                                    <i class="bx bx-dollar me-2"></i>
                                    <span class="align-middle">Pricing</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->


                </ul>
            </div>

        </div>
    </nav>
