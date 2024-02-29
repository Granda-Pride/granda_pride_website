<nav id="navbar" class="sm:w-10/12 sm:h-[10vh] sm:flex sm:justify-between sm:mx-auto hidden">
    <div id="navbar-links-wrapper" class="sm:w-fit sm:mx-0 mx-auto my-auto">
        <ul id="navbar-links" class="text-xl sm:flex sm:justify-center">
            <script>
                function closeNav() {
                    const navBar = document.getElementById('navbar');
                    navBar.classList.add('hidden');

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
            <li class="my-1 text-gray-400 text-center sm:ml-6"><a href="/#navbar"> الرئيسيه</a></li>
        </ul>
    </div>
    <div class="w-[10vh] h-[10vh] hidden sm:block bg-cover"
        style="background-image: url('{{ asset('/images/company-logo.jpg') }}')">
    </div>
</nav>
