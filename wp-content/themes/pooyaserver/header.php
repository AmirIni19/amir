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
    <header class="header  bg-[#f5f5f5] pb-[10px]" id="header">
        <div class="w_me_w">
            <nav class="navbar mt-[-36px]">

                <section class="navbar-left">

                    <div class=" call-btn flex bg-[#f5f5f5] p-3 rounded-md border-2 border-[#00aefa] border-solid ">
                        <div class=" font-semibold		">
                            <a href="tel:02532921948" target="_blank">02532921948</a>
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
                        <!--  -->
                        <div class="flex justify-between items-center flex-row invisible">

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px"
                                    fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" fill="#fc781f" />
                                    <path fill="#fc781f"
                                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                </svg>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex justify-between items-center flex-row">
                            <a class="flex justify-between items-center flex-row" href="https://panel.pooyaserver.com/">
                                <div class="text-heading_c pr-2">
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
                            </a>
                        </div>

                        <!--  -->
                        <div class="flex justify-between items-center flex-row invisible">

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px"
                                    fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" fill="#fc781f" />
                                    <path fill="#fc781f"
                                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
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

                            <!-- -->
                            <li class="menu-item" style="display: none;">
                                <a href="#" class="menu-link">نمایندگی</a>
                            </li>

                            <!-- -->
                            <li class="menu-item menu-dropdown" style="display: none;">
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

                            <!--  -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">
                                    <a href="https://pooyaserver.com/contact-us/">
                                        ارتباط با ما
                                    </a>

                                    <!-- <i class="bx bx-chevron-right"></i></span> -->
                                    <!-- <div class="submenu megamenu megamenu-column-4">
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
                                </div> -->
                            </li>

                            <!-- -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">
                                    <a href="https://pooyaserver.com/category/all/">
                                        مقالات
                                    </a>
                                    <!-- <i class="bx bx-chevron-right"></i></span> -->
                                    <!-- <div class="submenu megamenu megamenu-column-1">
                                    <ul class="submenu-list">
                                        <li class="submenu-item"><a href="#" class="submenu-link">Login</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Register</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Track Order</a>
                                        </li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                                    </ul>
                                </div> -->
                            </li>

                            <!--  -->
                            <li class="menu-item menu-dropdown">
                                <span class="menu-link">
                                    <a href="https://pooyaserver.com/">
                                        خانه
                                    </a>
                                    <!-- <i class="bx bx-chevron-right"></i></span> -->
                                    <!-- <div class="submenu megamenu megamenu-column-0">
                                    <ul class="submenu-list">
                                        <li class="submenu-item"><a href="#" class="submenu-link">Login</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Register</a></li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Track Order</a>
                                        </li>
                                        <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                                    </ul>
                                </div> -->
                            </li>


                        </ul>
                    </div>

                </section>

                <section class="navbar-right">
                    <button class="switch" id="switch"> </button>
                    <a href="https://pooyaserver.com/" class="brand">
                        <img src="https://pooyaserver.com/wp-content/uploads/2024/04/6.9.1.png" alt="">
                    </a>
                </section>
            </nav>
        </div>

    </header>
    <!-- end of header -->

    <!-- start the bottom nav -->
    <div style="z-index: 5; box-shadow: inset 0px 0px 8px #7c7c7c45; width: 95%;"
        class="fixed romeve_bye w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">

        <div class="grid h-full max-w-lg grid-cols-5 mx-auto">

            <button data-tooltip-target="tooltip-home" type="button"
                class="invisible inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 dark:hover:bg-gray-800 group">

                <i style="font-size: 28px;" class='bx bx-cart-alt w-5 h-5 mb-1 text-gray-500'></i>
                <span class="sr-only">سبد</span>
            </button>
            <div id="tooltip-home" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                سبد
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>




            <button data-tooltip-target="tooltip-wallet" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="https://panel.pooyaserver.com/">
                    <i style="font-size: 25px;" class='bx bx-user w-5 h-5 mb-1 text-gray-500'></i>
                    <span class="sr-only">ورود</span>
                </a>
            </button>

            <div id="tooltip-wallet" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                ورود
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>




            <div class="flex items-center justify-center">
                <button style="background-color: #1321a1;" data-tooltip-target="tooltip-new" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-500 rounded-full hover:ring-blue-800 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">

                    <a href="https://pooyaserver.com/">
                        <svg class="w-5 h-5 mb-1 text-white hover:text-white dark:text-gray-400  " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <span class="sr-only">خانه</span>
                    </a>


                </button>
            </div>
            <div id="tooltip-new" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                خانه
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <button data-tooltip-target="tooltip-settings" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="tel:02532921948">
                    <i style="font-size: 28px;" class='bx bx-phone-call w-5 h-5 mb-1 text-gray-500'></i>
                    <span class="sr-only">تماس</span>
                </a>
            </button>
            <div id="tooltip-settings" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                تماس
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>


            <button data-tooltip-target="tooltip-profile" type="button"
                class="invisible inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
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