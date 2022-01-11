<!doctype html>
<html class="scroll-smooth">

<head>
    <title>Uzair - @yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body class="scrollbar scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">

    <!-- Navbar Starts Here -->
    <header class="md:flex items-center justify-between py-3 md:py-4 bg-gray-900 relative text-gray-50 ">
        <div class="flex justify-between min-w-min px-4">
            <div class="flex text-3xl font-normal relative  items-center">

                <a href="/">
                    UDev

                </a>
            </div>

            <!-- Hamburger Icon -->
            <div class="space-y-2 block cursor-pointer md:hidden self-center h-10 w-10" stroke="currentColor"
                id="menu-toggler">
                <span class="block w-8 h-1 bg-gray-600"></span>
                <span class="block w-8 h-1 bg-gray-600"></span>
                <span class="block w-8 h-1 bg-gray-600"></span>
            </div>

        </div>
        <nav class=" md:mt-0 transition delay-300 ease-out md:px-4">
            <ul id="menu"
                class=" bg-gray-800 w-full py-4 md:py-0 md:mt-0 z-40 absolute   md:relative  md:bg-gray-900 mt-3 pl-4 flex-col hidden md:flex md:flex-row m-0 p-0  text-lg md:items-center gap-8">
                <li><a href="/" class="hover:text-blue-400 ">Home</a></li>
                <li><a href="/blog" class="hover:text-blue-400 ">Blog</a></li>
                <li><a href="/about" class="hover:text-blue-400 ">About Us</a></li>
                <li><a href="/contact" class="hover:text-blue-400">Contact Us</a></li>
            </ul>

        </nav>
    </header>
    <!-- Script for Toggle Menus -->
    <script>
        const menuToggler = document.getElementById("menu-toggler");
        const menu = document.getElementById("menu");
        menuToggler.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

    <!-- The Main Conten Body of each page -->
    @yield('content')


    <!-- Footer Starts Here -->
    <footer class="footer bg-white relative pt-1 border-b-4 border-blue-700 mt-20">
        <div class="container mx-auto px-6">

            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-700 uppercase mb-2">Main Pages</span>
                        <span class="my-2"><a href="/"
                            class="text-blue-700  text-md hover:text-blue-500">Home
                        </a></span>
                        <span class="my-2"><a href="/blog"
                                class="text-blue-700  text-md hover:text-blue-500">Blog
                            </a></span>
                        <span class="my-2"><a href="/about"
                                class="text-blue-700  text-md hover:text-blue-500">About Us
                            </a></span>
                        <span class="my-2"><a href="/contact"
                                class="text-blue-700  text-md hover:text-blue-500">Contact Us
                            </a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Projects</span>
                        <span class="my-2"><a href="https://github.com/uzairafridi00/websites/tree/main/todo"
                                target="_blank" class="text-blue-700 text-md hover:text-blue-500">Todo
                            </a></span>
                        <span class="my-2"><a
                                href="https://github.com/uzairafridi00/websites/tree/main/go-tours-website"
                                target="_blank" class="text-blue-700  text-md hover:text-blue-500">Go Tours
                            </a></span>
                        <span class="my-2"><a
                                href="https://github.com/uzairafridi00/websites/tree/main/carousal" target="_blank"
                                class="text-blue-700 text-md hover:text-blue-500">Carousal
                            </a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Recent Blogs</span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Blog
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Blog
                                2</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Blog
                                3</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-blue-700 font-bold mb-2">
                        © 2022 by UDev
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--Script for Go To Top Button-->
    <button onclick="topFunction()" id="go-top"
        class="fixed bottom-5 right-4 hidden bg-transparent hover:bg-blue-500 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        <i class="arrow up"></i>
    </button>
    <script>
        //Get the button
        var go_top = document.getElementById("go-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                go_top.style.display = "block";
            } else {
                go_top.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="../node_modules/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
</body>

</html>
