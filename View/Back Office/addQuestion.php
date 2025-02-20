<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/konrix/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:21 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dashboard | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
</head>

<body>

<div class="flex wrapper">

    <!-- Sidenav Menu -->
    <div class="app-menu">

        <!-- Sidenav Brand Logo -->
        <a href="index.php" class="logo-box">
            <!-- Light Brand Logo -->
            <div class="logo-light">
                <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
            </div>

            <!-- Dark Brand Logo -->
            <div class="logo-dark">
                <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
            </div>
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
            <span class="sr-only">Menu Toggle Button</span>
            <i class="mgc_round_line text-xl"></i>
        </button>

        <!--- Menu -->
        <div class="srcollbar" data-simplebar>
            <ul class="menu" data-fc-type="accordion">
                <li class="menu-title">Menu</li>

                <li class="menu-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                        <span class="menu-icon"><i class="mgc_file_check_line"></i></span>
                        <span class="menu-text"> Forum </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="sub-menu hidden">
                        <li class="menu-item">
                            <a href="viewForum.php" class="menu-link">
                                <span class="menu-text">Forum</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Help Box Widget -->
            <div class="my-10 mx-5">
                <div class="help-box p-6 bg-black/5 text-center rounded-md">
                    <div class="flex justify-center mb-4">
                        <svg width="30" height="18" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0c-4 0-6.5 2-7.5 6 1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C17.08 7.271 18.782 9 22.5 9c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C20.42 1.728 18.718 0 15 0ZM7.5 9C3.5 9 1 11 0 15c1.5-2 3.25-2.75 5.25-2.25 1.141.285 1.957 1.113 2.86 2.03C9.58 16.271 11.282 18 15 18c4 0 6.5-2 7.5-6-1.5 2-3.25 2.75-5.25 2.25-1.141-.285-1.957-1.113-2.86-2.03C12.92 10.729 11.218 9 7.5 9Z" fill="#38BDF8"></path>
                        </svg>
                    </div>
                    <h5 class="mb-2">Unlimited Access</h5>
                    <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                    <a href="javascript: void(0);" class="btn btn-sm bg-secondary text-white">Upgrade</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidenav Menu End  -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">

        <!-- Topbar Start -->
        <header class="app-header flex items-center px-4 gap-3">
            <!-- Sidenav Menu Toggle Button -->
            <button id="button-toggle-menu" class="nav-link p-2">
                <span class="sr-only">Menu Toggle Button</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="mgc_menu_line text-xl"></i>
                </span>
            </button>

            <!-- Topbar Brand Logo -->
            <a href="index.php" class="logo-box">
                <!-- Light Brand Logo -->
                <div class="logo-light">
                    <img src="assets/images/logo-light.png" class="logo-lg h-6" alt="Light logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>

                <!-- Dark Brand Logo -->
                <div class="logo-dark">
                    <img src="assets/images/logo-dark.png" class="logo-lg h-6" alt="Dark logo">
                    <img src="assets/images/logo-sm.png" class="logo-sm" alt="Small logo">
                </div>
            </a>

            <!-- Topbar Search Modal Button -->
            <button type="button" data-fc-type="modal" data-fc-target="topbar-search-modal" class="nav-link p-2 me-auto">
                <span class="sr-only">Search</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="mgc_search_line text-2xl"></i>
                </span>
            </button>

            <!-- Language Dropdown Button -->
            <div class="relative">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2 fc-dropdown">
                    <span class="flex items-center justify-center h-6 w-6">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="h-4 w-6">
                    </span>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="h-4">
                        <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <!-- Fullscreen Toggle Button -->
            <div class="md:flex hidden">
                <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                    <span class="sr-only">Fullscreen Mode</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_fullscreen_line text-2xl"></i>
                    </span>
                </button>
            </div>

            <!-- Notification Bell Button -->
            <div class="relative md:flex hidden">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                    <span class="sr-only">View notifications</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_notification_line text-2xl"></i>
                    </span>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

                    <div class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <h6 class="text-sm"> Notification</h6>
                            <a href="javascript: void(0);" class="text-gray-500 underline">
                                <small>Clear All</small>
                            </a>
                        </div>
                    </div>

                    <div class="p-4 h-80" data-simplebar>

                        <h5 class="text-xs text-gray-500 mb-2">Today</h5>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                            <i class="mgc_message_3_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Datacorp <small class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                            <i class="mgc_user_add_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Admin <small class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-full h-9 w-9" alt="">
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Cristina Pride <small class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                        <a href="javascript:void(0);" class="block mb-4">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                            <i class="mgc_message_1_line text-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="block">
                            <div class="card-body">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-full h-9 w-9" alt="">
                                    </div>
                                    <div class="flex-grow truncate ms-2">
                                        <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <a href="javascript:void(0);" class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                        View All
                    </a>
                </div>
            </div>

            <!-- Light/Dark Toggle Button -->
            <div class="flex">
                <button id="light-dark-mode" type="button" class="nav-link p-2">
                    <span class="sr-only">Light/Dark Mode</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="mgc_moon_line text-2xl"></i>
                    </span>
                </button>
            </div>

            <!-- Profile Dropdown Button -->
            <div class="relative">
                <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link">
                    <img src="assets/images/users/user-6.jpg" alt="user-image" class="rounded-full h-10">
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="pages-gallery.php">
                        <i class="mgc_pic_2_line  me-2"></i>
                        <span>Gallery</span>
                    </a>
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="apps-kanban.php">
                        <i class="mgc_task_2_line  me-2"></i>
                        <span>Kanban</span>
                    </a>
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                        <i class="mgc_lock_line  me-2"></i>
                        <span>Lock Screen</span>
                    </a>
                    <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
                    <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="auth-login.php">
                        <i class="mgc_exit_line  me-2"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Topbar End -->


        <?php
        ob_start(); // Start output buffering

        include '../../config.php';
        require_once '../../Model/question.php';
        require_once '../../Controller/questionC.php';

        if (isset($_POST["titre"]) && isset($_POST["contenu"])) {
            if (!empty($_POST["titre"]) && !empty($_POST["contenu"])) {
                $question1 = new question(NULL, $_POST["titre"], $_POST["contenu"], 1, date('Y-m-d H:i:s'));
                $questionC = new questionC();
                $questionC->createQuestion($question1);
                // Output JavaScript for redirection
                echo '<script>window.location.href = "viewForum.php";</script>';
                exit; // Ensure that subsequent code is not executed after redirection
            }
        }

        ob_end_flush(); // Flush the output buffer and send output to the browser
        ?>

        <br><br>
        <form action="" method="POST">
            <label for="titre"> Title </label>
            <input type="text" name="titre" id="titre" oninput="validateTitre()">
            <span id="titre_span"></span>
            <br>
            <label for="contenu"> Contenu </label>
            <textarea name="contenu" id="contenu" oninput="validateContenu()"></textarea>
            <span id="contenu_span"></span>
            <br>
            <br>
            <br>
            <input type="submit" value="Submit">
            <br><br>
            <input type="reset" value="Reset">
            <br>
            <br>
        </form>

        <script>
            function validateTitre() {
                const titreInput = document.getElementById('titre');
                const titreSpan = document.getElementById('titre_span');

                if (titreInput.value.length >= 10) {
                    titreSpan.innerText = 'Correct';
                    titreSpan.style.color = 'green';
                } else {
                    titreSpan.innerText = 'Le titre doit dépasser 10 caractères.';
                    titreSpan.style.color = 'red';
                }
            }

            function validateContenu() {
                const contenuInput = document.getElementById('contenu');
                const contenuSpan = document.getElementById('contenu_span');

                if (contenuInput.value.length >= 20) {
                    contenuSpan.innerText = 'Correct';
                    contenuSpan.style.color = 'green';
                } else {
                    contenuSpan.innerText = 'Le contenu doit dépasser 20 caractères.';
                    contenuSpan.style.color = 'red';
                }
            }
        </script>

        <style>
            form {
                margin: 0 auto;
                width: 50%;
                text-align: center; /* Ajout d'un alignement centré pour les boutons */
            }
            label {
                display: inline-block;
                width: 20%;
                margin-bottom: 5px;
                text-align: right; /* Ajout d'un alignement à droite pour les labels */
            }
            input[type="text"], textarea, input[type="number"] {
                display: inline-block;
                width: 75%;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }
            #alerte {
                display: inline-block;
                color: red;
                margin-bottom: 10px;
                text-align: center;
            }
            .btn-container {
                margin-top: 10px; /* Ajout d'une marge supérieure pour le conteneur */
                text-align: center; /* Ajout d'un alignement centré pour le conteneur */
            }
            input[type="submit"], input[type="reset"] {
                background-color: #3b3131;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-right: 10px;
            }
            label[for="contenu"], #contenu {
                display: inline-block;
                vertical-align: top;
            }
        </style>


    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>

<!-- Back to Top Button -->
<button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
    <i class="mgc_arrow_up_line text-lg"></i>
</button>

<!-- Theme Settings -->
<div>
    <!-- Theme Setting Button -->
    <div class="fixed end-0 bottom-20">
        <button data-fc-type="offcanvas" data-fc-target="theme-customization" type="button" class="bg-white rounded-s-full shadow-lg p-2.5 ps-3 transition-all dark:bg-slate-800">
            <span class="sr-only">Setting</span>
            <span class="flex items-center justify-center animate-spin">
                    <i class="mgc_settings_4_line text-2xl"></i>
                </span>
        </button>
    </div>

    <!-- Theme Settings Offcanvas -->
    <div id="theme-customization" class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0
             transition-all duration-300 transform max-w-sm w-full z-50 bg-white border-s border-gray-900/10 dark:bg-gray-800 dark:border-white/10" tabindex="-1">
        <div class="h-16 flex items-center text-gray-800 dark:text-white border-b border-dashed border-gray-900/10 dark:border-white/10 px-6 gap-3">
            <h5 class="text-base grow">Theme Settings</h5>
            <button type="button" class="p-2" id="reset-layout"><i class="mgc_refresh_1_line text-xl"></i></button>
            <button type="button" data-fc-dismiss><i class="mgc_close_line text-xl"></i></button>
        </div>

        <div class="h-[calc(100vh-64px)]" data-simplebar>
            <div class="divide-y divide-dashed divide-slate-900/10  dark:divide-white/10">
                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Theme</h5>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-mode" id="layout-color-light" value="light">
                            <label class="form-label rounded-md" for="layout-color-light">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_sun_line text-2xl"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-mode" id="layout-color-dark" value="dark">
                            <label class="form-label rounded-md" for="layout-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_moon_line text-2xl"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Direction</h5>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="dir" id="direction-ltr" value="ltr">
                            <label class="form-label rounded-md" for="direction-ltr">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_left_line text-2xl"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> LTR </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="dir" id="direction-rtl" value="rtl">
                            <label class="form-label rounded-md" for="direction-rtl">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_align_right_line text-2xl"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> RTL </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 2xl:block hidden">
                    <h5 class="font-semibold text-sm mb-3">Content Width</h5>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-layout-width" id="layout-mode-default" value="default">
                            <label class="form-label rounded-md" for="layout-mode-default">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_2_line text-2xl rotate-45"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Fluid </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-layout-width" id="layout-mode-boxed" value="boxed">
                            <label class="form-label rounded-md" for="layout-mode-boxed">
                                    <span class="flex items-center justify-center px-4 py-3">
                                        <i class="mgc_fullscreen_exit_2_line text-2xl rotate-45"></i>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Boxed </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-default" value="default">
                            <label class="form-label rounded-md" for="sidenav-view-default">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="block w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="h-1 block rounded-sm mb-2.5 bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Default </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hover" value="hover">
                            <label class="form-label rounded-md" for="sidenav-view-hover">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hover </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hover-active" value="hover-active">
                            <label class="form-label rounded-md" for="sidenav-view-hover-active">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-8 bg-gray-100 dark:bg-gray-800">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="flex mb-2.5 gap-1">
                                                    <span class="h-1 block w-full rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="h-1 block w-2 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="h-1 block rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center justify-end h-full mr-1.5">
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hover Active </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-sm" value="sm">
                            <label class="form-label rounded-md" for="sidenav-view-sm">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="w-3 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-1.5 h-1.5 mt-1 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Small </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-md" value="md">
                            <label class="form-label rounded-md" for="sidenav-view-md">
                                    <span class="flex h-16 rounded-md overflow-hidden">
                                        <span class="w-4 bg-gray-100 dark:bg-gray-800">
                                            <span class="w-2 h-2 mt-2 mx-auto rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            <span class="flex flex-col items-center w-full mt-2 space-y-1">
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                <span class="w-2 h-2 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-gray-200 dark:border-gray-700">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="grow">
                                                        <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    </span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ml-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Compact </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                            <label class="form-label rounded-md" for="sidenav-view-mobile">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex items-center h-full mr-1.5">
                                                    <span class="w-1.5 h-1.5  ms-1 rounded-sm bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1  rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Mobile </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                            <label class="form-label rounded-md" for="sidenav-view-hidden">
                                    <span class="flex h-16 overflow-hidden">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-gray-100 dark:bg-gray-800">
                                                <span class="flex flex-auto items-center h-full me-1.5">
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-auto rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                    <span class="w-1 h-1 block ms-1 rounded-full bg-gray-300 dark:bg-gray-700"></span>
                                                </span>
                                            </span>
                                            <span class="flex flex-auto border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900"></span>
                                        </span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Hidden </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-light" value="light">
                            <label class="form-label rounded-md" for="menu-color-light">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-dark" value="dark">
                            <label class="form-label rounded-md" for="menu-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-brand" value="brand">
                            <label class="form-label rounded-md" for="menu-color-brand">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Brand </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-menu-color" id="menu-color-gradient" value="gradient">
                            <label class="form-label rounded-md" for="menu-color-gradient">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full" style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Gradient </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="form-label rounded-md" for="topbar-color-light">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-white"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Light </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="form-label rounded-md" for="topbar-color-dark">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-dark"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Dark </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-brand" value="brand">
                            <label class="form-label rounded-md" for="topbar-color-brand">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full bg-primary"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Brand </div>
                        </div>

                        <div class="card-radio">
                            <input class="form-radio" type="radio" name="data-topbar-color" id="topbar-color-gradient" value="gradient">
                            <label class="form-label rounded-md" for="topbar-color-gradient">
                                    <span class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-900">
                                        <span class="w-5 h-5 shadow-lg rounded-full" style="background: linear-gradient(135deg, #6379c3 0%, #546ee5 60%);"></span>
                                    </span>
                            </label>
                            <div class="mt-1 text-md font-medium text-center text-gray-600 dark:text-gray-300"> Gradient </div>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <h5 class="font-semibold text-sm mb-3">Layout Position</h5>
                    <div class="flex btn-radio">
                        <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn rounded-e-none bg-gray-100 dark:bg-gray-700" for="layout-position-fixed">Fixed</label>
                        <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn rounded-s-none bg-gray-100 dark:bg-gray-700" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Plugin Js -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/%40frostui/tailwindcss/frostui.js"></script>

<!-- App Js -->
<script src="assets/js/app.js"></script>

<!-- Apexcharts js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Dashboard Project Page js -->
<script src="assets/js/pages/dashboard.js"></script>

</body>


<!-- Mirrored from coderthemes.com/konrix/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 19:44:21 GMT -->
</html>