<nav id="navbar" class="w-full min-h-[10svh] md:px-44 fixed bg-transparent sm:flex sm:justify-between hidden">
    <div id="navbar-links-wrapper" class="sm:w-fit sm:mx-0 mx-auto my-auto">
        <ul id="navbar-links" class="text-xl sm:flex sm:justify-center">
            <script>
                function closeNav() {
                    const navBar = document.getElementById('navbar');
                    navBar.classList.add('hidden');
                    navBar.classList.add('fixed');


                    const homeSection = document.getElementById('home');
                    homeSection.classList.add('h-svh');
                }
            </script>
            <i class="fa-solid fa-xmark w-full text-center my-1 self-center sm:hidden sm:ml-6" id="close-nav-bar-btn"
                onclick="closeNav()"></i>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#blog"> المدونه</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#team-members"> فريقنا</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#contact"> تواصل معنا</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#pricing_plane"> الاسعار</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#services_we_produce"> الخدمات التي نقدمها</a>
            </li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#about"> عنا</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#services"> خدماتنا</a></li>
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#home"> الرئيسيه</a></li>
        </ul>
    </div>
    {{-- <div class="w-[10vh] h-[10vh] hidden sm:block bg-cover"
        style="background-image: url('{{ asset('/images/company-logo.jpg') }}')">
    </div> --}}
</nav>
