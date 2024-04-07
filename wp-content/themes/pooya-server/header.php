<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>

<body>

    <!-- start the header -->
    <header class="header" id="header">
        <div class="w_me_w">
            <nav class="navbar ">

                <section class="navbar-left">

                    <div class=" call-btn flex bg-[#f5f5f5] p-3 rounded-md border-2 border-[#00aefa] border-solid ">
                        <div class=" font-semibold		">
                            025-2566548
                        </div>
                    </div>

                    <div class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </div>

                </section>

                <section class="navbar-center">
                    <span class="overlay"></span>


                    <div class=" icons-me flex justify-around items-center w-[23%]">
                        <!-- cart -->
                        <div class="flex justify-between items-center flex-row">

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px"
                                    fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" fill="#fc781f" />
                                    <path fill="#fc781f"
                                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                </svg>
                            </div>
                        </div>

                        <!-- cart -->
                        <div class="flex justify-between items-center flex-row">

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px"
                                    fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" fill="#fc781f" />
                                    <path fill="#fc781f"
                                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                </svg>
                            </div>
                        </div>

                        <!-- shop -->
                        <div class="flex justify-between items-center flex-row">
                            <div class="text-white">
                                ورود
                            </div>
                            <div>
                                <svg class="svg-icon"
                                    style="width: 30px; height: 30px ; vertical-align: middle;fill: currentColor;overflow: hidden;"
                                    viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M640 597.333333c-113.92 0-341.333333 56.746667-341.333333 170.666667v85.333333h682.666666v-85.333333c0-113.92-227.413333-170.666667-341.333333-170.666667m-384-170.666666V298.666667H170.666667v128H42.666667v85.333333h128v128h85.333333v-128h128v-85.333333m256 85.333333a170.666667 170.666667 0 0 0 170.666667-170.666667 170.666667 170.666667 0 0 0-170.666667-170.666666 170.666667 170.666667 0 0 0-170.666667 170.666666 170.666667 170.666667 0 0 0 170.666667 170.666667z"
                                        fill="#fc781f" />
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div class="menu" id="menu">

                        <div class="menu-header">
                            <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
                            <span class="menu-title"></span>
                        </div>

                        <ul class="menu-inner">

                            <!-- نمایندگی -->
                            <li class="menu-item"><a href="#" class="menu-link">نمایندگی</a></li>

                            <!-- سرور -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">سرور<i class="bx bx-chevron-right"></i></span>
                                <div class="submenu megamenu megamenu-column-4">
                                    <div class="submenu-inner">
                                        <h4 class="submenu-title">Men</h4>
                                        <ul class="submenu-list">
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                        </ul>
                                        <h4 class="submenu-title">Kids</h4>
                                        <ul class="submenu-list">
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-inner">
                                        <h4 class="submenu-title">Women</h4>
                                        <ul class="submenu-list">
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                        </ul>
                                        <h4 class="submenu-title">Beauty</h4>
                                        <ul class="submenu-list">
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-inner">
                                        <h4 class="submenu-title">Sport</h4>
                                        <ul class="submenu-list">
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                            <li class="submenu-item"><a href="#" class="submenu-link">Product
                                                    Name</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-inner">
                                        <img src="https://i.ibb.co/3Bj3gbS/Product-1.jpg" class="submenu-image"
                                            alt="Product">
                                    </div>
                                </div>
                            </li>

                            <!-- هاست ایمیل -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">هاست ایمیل<i class="bx bx-chevron-right"></i></span>
                                <div class="submenu megamenu megamenu-column-4">
                                    <div class="submenu-inner">
                                        <a href="#" class="submenu-link">
                                            <img src="https://i.ibb.co/kgNX8ks/Product-2.jpg" class="submenu-image"
                                                alt="Product">
                                            <span class="submenu-title">Product Name</span>
                                        </a>
                                    </div>
                                    <div class="submenu-inner">
                                        <a href="#" class="submenu-link">
                                            <img src="https://i.ibb.co/ZTD2wF6/Product-3.jpg" class="submenu-image"
                                                alt="Product">
                                            <span class="submenu-title">Product Name</span>
                                        </a>
                                    </div>
                                    <div class="submenu-inner">
                                        <a href="#" class="submenu-link">
                                            <img src="https://i.ibb.co/prb0Vz9/Product-4.jpg" class="submenu-image"
                                                alt="Product">
                                            <span class="submenu-title">Product Name</span>
                                        </a>
                                    </div>
                                    <div class="submenu-inner">
                                        <a href="#" class="submenu-link">
                                            <img src="https://i.ibb.co/zPJm9jy/Product-5.jpg" class="submenu-image"
                                                alt="Product">
                                            <span class="submenu-title">Product Name</span>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- هاست -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">هاست<i class="bx bx-chevron-right"></i></span>
                                <div class="submenu megamenu megamenu-column-1">
                                    <ul class="submenu-list">
                                        <li class="submenu-item"><a href="#" class="submenu-link">Login</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Register</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Track Order</a>
                                        </li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                                    </ul>
                                </div>
                            </li>

                            <!-- دامین -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">دامین<i class="bx bx-chevron-right"></i></span>
                                <div class="submenu megamenu megamenu-column-0">
                                    <ul class="submenu-list">
                                        <li class="submenu-item"><a href="#" class="submenu-link">Login</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Register</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Track Order</a>
                                        </li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>

                </section>

                <section class="navbar-right">
                    <button class="switch" id="switch"> </button>
                    <a href="#" class="brand">
                        <img src="https://pooyaserver.com/wp-content/uploads/2023/12/logo.png" alt="">
                    </a>
                </section>
            </nav>
        </div>

    </header>
    <!-- end of header -->

    <!-- start the bottom nav -->
    <div style="z-index: 5;"
        class="fixed romeve_bye w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">

        <div class="grid h-full max-w-lg grid-cols-5 mx-auto">

            <button data-tooltip-target="tooltip-home" type="button"
                class="inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <!-- <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg> -->
                <i style="font-size: 28px;" class='bx bx-user-plus w-5 h-5 mb-1 text-gray-500'></i>
                <span class="sr-only">ورود</span>
            </button>
            <div id="tooltip-home" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                ورود
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <button data-tooltip-target="tooltip-wallet" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <!-- <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
                    <path
                        d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
                </svg> -->
                <i style="font-size: 28px;" class='bx bx-cart-alt w-5 h-5 mb-1 text-gray-500'></i>
                <span class="sr-only">سبد خرید</span>
            </button>
            <div id="tooltip-wallet" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                سبد خرید
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <div class="flex items-center justify-center">
                <button style="background-color: #1321a1;" data-tooltip-target="tooltip-new" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-500 rounded-full hover:ring-blue-800 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                    <svg class="w-5 h-5 mb-1 text-white hover:text-white dark:text-gray-400  " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <span class="sr-only">خانه</span>
                </button>
            </div>
            <div id="tooltip-new" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                خانه
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <button data-tooltip-target="tooltip-settings" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <!-- <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                </svg> -->
                <i style="font-size: 28px;" class='bx bx-phone-call w-5 h-5 mb-1 text-gray-500'></i>
                <span class="sr-only">تماس</span>
            </button>
            <div id="tooltip-settings" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                تماس
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <button data-tooltip-target="tooltip-profile" type="button"
                class="inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <!-- <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg> -->
                <i style="font-size: 28px;" class='bx bx-message-square-dots w-5 h-5 mb-1 text-gray-500'></i>
                <span class="sr-only">تیکت</span>
            </button>
            <div id="tooltip-profile" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                تیکت
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


        </div>

    </div>
    <!-- end of bottom nav -->