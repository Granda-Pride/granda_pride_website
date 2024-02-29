<section id="home" class="text-white h-svh bg-slate-950">
    <div class="w-full h-full mx-auto sm:w-10/12">
        <script>
            function openNabBar() {
                const navBar = document.getElementById('navbar');
                navBar.classList.remove('hidden');
                navBar.classList.remove('fixed');

                const homeSection = document.getElementById('home');
                homeSection.classList.remove('h-svh');
            }
        </script>
        <i class="fas fa-bars text-3xl mr-3 mt-3 sm:hidden" id="open-nav-bar-btn" onclick="openNabBar()"></i>
        <div class="flex sm:flex-row flex-col flex-wrap justify-center items-center min-h-full">
            <div id="company-introduction" class="sm:w-6/12">
                <h1 class="sm:text-7xl text-3xl text-center mb-16">فخر غرناطه للبرمجيات</h1>
                <p class="sm:text-center">
                    غرناطة لتقنية المعلومات هي شركة رائدة في مجال تكنولوجيا المعلومات، تهدف إلى مساعدة الشركات والأفراد
                    على تحقيق أهدافهم عبر الإنترنت. تقدم الشركة مجموعة واسعة من الخدمات، تشمل و تصميم وتطوير المواقع
                    الإلكترونية و تطوير التطبيقات و التسويق الرقمي و الحلول السحابية
                </p>
            </div>
            <div id="company-introduction-images" class="sm:w-6/12 w-full">
                <div class="sm:h-[700px] h-52 bg-cover m-4 rounded-lg bg-no-repeat"
                    style="background-image: url('{{ asset('/images/it-company-1.jpg') }}')"></div>
            </div>
        </div>
    </div>
</section>
