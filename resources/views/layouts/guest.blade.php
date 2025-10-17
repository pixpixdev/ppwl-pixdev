<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr"
      data-theme="theme-default"
      data-assets-path="../assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
          user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <!-- SVG Logo -->
                                    <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <path id="path-1" d="M13.79,0.36 L3.39,7.44 C0.57,9.69 -0.38,12.47 0.56,15.79 C0.68,16.23 1.09,17.78 3.12,19.22 C3.81,19.72 5.32,20.38 7.65,21.21 L7.59,21.25 L2.63,24.54 C0.44,26.30 0.08,28.50 1.56,31.17 C2.83,32.81 5.20,33.26 7.09,32.53 C8.34,32.05 11.45,30.00 16.41,26.37 C18.03,24.49 18.69,22.45 18.40,20.23 C17.96,17.53 16.17,15.57 13.04,14.37 L10.91,13.47 L18.61,7.98 L13.79,0.36 Z" />
                                            <path id="path-3" d="M5.47,6.00 C4.05,8.21 4.36,10.07 6.40,11.57 C8.61,12.57 10.09,13.21 10.85,13.50 L15.50,14.43 L18.61,7.98 C15.53,3.11 13.92,0.57 13.79,0.35 C13.57,0.51 10.80,2.39 5.47,6.00 Z" />
                                            <path id="path-4" d="M7.50,21.22 L12.32,23.31 C14.16,24.75 14.39,26.48 13.00,28.50 C11.61,30.52 10.30,31.79 9.07,32.30 C5.78,33.43 4.13,34.00 4.13,34.00 C4.13,34.00 2.75,33.05 0.00,31.16 C-0.55,27.81 -0.55,26.05 0.00,25.87 C0.83,25.60 2.77,22.82 3.30,22.52 C3.65,22.33 5.05,21.89 7.50,21.22 Z" />
                                            <path id="path-5" d="M20.6,7.13 L25.6,13.8 C26.26,14.68 26.08,15.93 25.2,16.6 C24.85,16.85 24.43,17 24,17 L14,17 C12.89,17 12,16.10 12,15 C12,14.56 12.14,14.14 12.4,13.8 L17.4,7.13 C18.06,6.24 19.31,6.07 20.2,6.73 C20.35,6.84 20.48,6.98 20.6,7.13 Z" />
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <g transform="translate(0, 8)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g transform="translate(19, 11) rotate(-300) translate(-19, -11)">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                            </a>
                        </div>

                        <!-- Blade slot content -->
                        {{ $slot }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
