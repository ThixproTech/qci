<?php include("head.php") ?>


<header class="main-header">

    <div class="max-w-[1380px] mx-auto h-full px-3 lg:px-7">

        <div class="flex items-center justify-between h-full">


            <!-- LOGO -->
            <a
                href="#"
                class="flex items-center gap-2 shrink-0 animate__animated animate__fadeInLeft coming-soon-link"
            >

                <!-- Logo -->
                <div class="flex flex-col items-center">

                    <div class="logo-symbol"></div>

                    <span class="logo-qci">
                        QCI
                    </span>

                </div>


                <!-- Logo Text -->
                <div class="leading-tight">

                    <div
                        class="logo-title text-[15px] sm:text-[16px] font-bold text-slate-800"
                    >
                        Quality Council of India
                    </div>

                    <div
                        class="logo-subtitle text-[9px] sm:text-[10px] text-slate-500 mt-1"
                    >
                        Creating an Ecosystem for Quality
                    </div>

                </div>

            </a>


            <!-- DESKTOP NAVIGATION -->
            <nav class="hidden lg:flex items-center gap-7 xl:gap-6 ml-auto mr-8">

                <a
                    href="#"
                    class="nav-link active "
                >
                    Home
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    About QCI
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    Guidelines
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    Important Dates
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    FAQ
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    Help & Support
                </a>

                <a
                    href="#"
                    class="nav-link coming-soon-link"
                >
                    Contact Us
                </a>

            </nav>


            <!-- DESKTOP ACTION BUTTONS -->
            <div
                class="hidden lg:flex items-center gap-3 animate__animated animate__fadeInRight"
            >

                <a
                    href="./login.php"
                    class="login-btn"
                >
                    <i data-lucide="user-round" class="w-[17px] h-[17px]"></i>
                    Login
                </a>


                <a
                    href="./gstin-verification.php"
                    class="register-btn"
                >
                    <i data-lucide="user-plus" class="w-[17px] h-[17px]"></i>
                    Register as Nominee
                </a>

            </div>


            <!-- MOBILE MENU BUTTON -->
            <button
                id="mobileMenuButton"
                type="button"
                class="lg:hidden w-11 h-11 rounded-lg border border-slate-200
                       flex items-center justify-center
                       text-slate-700 hover:bg-slate-50
                       transition"
                aria-label="Open Menu"
            >

                <i
                    data-lucide="menu"
                    id="menuIcon"
                    class="w-6 h-6"
                ></i>

            </button>

        </div>


        <!-- ====================================================
             MOBILE MENU
        ==================================================== -->

        <div
            id="mobileMenu"
            class="mobile-menu lg:hidden bg-white border-t border-slate-100"
        >

            <div class="py-4 space-y-1">

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           bg-blue-50 text-blue-700 font-semibold coming-soon-link"
                >
                    Home
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    About QCI
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    Guidelines
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    Important Dates
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    FAQ
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    Help & Support
                </a>

                <a
                    href="#"
                    class="block px-4 py-3 rounded-lg
                           text-slate-600 hover:bg-slate-50 coming-soon-link"
                >
                    Contact Us
                </a>


                <!-- Mobile Buttons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-3">

                    <a
                        href="#"
                        class="login-btn w-full coming-soon-link"
                    >
                        <i
                            data-lucide="user-round"
                            class="w-[17px] h-[17px]"
                        ></i>

                        Login
                    </a>


                    <a
                        href="#"
                        class="register-btn w-full coming-soon-link"
                    >
                        <i
                            data-lucide="user-plus"
                            class="w-[17px] h-[17px]"
                        ></i>

                        Register as Nominee
                    </a>

                </div>

            </div>

        </div>

    </div>

</header>



