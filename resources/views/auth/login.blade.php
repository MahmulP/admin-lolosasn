<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('vendor/assets/') }}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>LolosASN - Admin Panel</title>


    <meta name="description"
        content="LolosASN adalah aplikasi penyedia layanan tryout terkini dengan analisa AI yang memudahkan kamu mengetahui kekurangan kamu." />
    <meta name="keywords" content="dashboard, lolosasn">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset('vendor/assets/img/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('vendor/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/vendor/css/pages/page-auth.css') }}">

</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">

                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="https://admin.lolosasn.id" class="app-brand-link gap-2">
                                <img src="{{ asset('vendor/assets/img/logo_text.png') }}" alt="" class="app-brand-logo demo">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Selamat datang kembali!</h4>
                        <p class="mb-4">Silahkan login menggunakan akun Anda agar dapat mengakses dashboard.</p>

                        <form class="mb-3" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" type="email" name="email"
                                    placeholder="Enter your email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer" id="toggle-password"><i
                                            class="bx bx-hide" id="password-icon"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('bx-hide');
                passwordIcon.classList.add('bx-show');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('bx-show');
                passwordIcon.classList.add('bx-hide');
            }
        });
    </script>

    <script src="{{ asset('vendor/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('vendor/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('vendor/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <script src="{{ asset('vendor/assets/js/main.js') }}"></script>


    <script src="{{ asset('vendor/assets/js/pages-auth.js') }}"></script>

</body>

</html>
