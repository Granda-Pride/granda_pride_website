<section id="team-members" class="h-svh bg-blue-100">
    <div class="w-full mx-auto md:pt-28">
        <div class="p-4">
            <h3 class="text-3xl text-center sm:text-6xl  mb-2">اعضاء الفريق</h3>
            <p class="text-sm text-center sm:text-xl text-gray-400">
                لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في
                صناعات
                المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر </p>
        </div>
        <div class="w-full">
            <div class="mx-auto grid grid-cols-12 gap-4 w-full mt-4">
                @for ($i = 1; $i < 4; $i++)
                    <div class="col-span-12 text-black w-fit bg-white mx-auto rounded-2xl md:col-span-6 lg:col-span-4">
                        <div class="rounded-t-2xl bg-cover h-64 w-64 md:w-72 md:h-72 lg:w-72 lg:h-72 2xl:w-96 2xl:h-96"
                            style="background-image: url({{ asset("./images/member-$i.jpg") }})">
                        </div>
                        <div>
                            <h3 class="text-xl text-center sm:text-3xl">اسم العضو</h3>
                            <h4 class="text-sm text-gray-400 text-center sm:text-xl">مبرمج</h4>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
