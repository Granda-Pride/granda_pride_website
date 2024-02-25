<section id="team-members" class="lg:w-10/12 mx-auto h-svh bg-pink-50">
    <div class="flex items-center justify-center pt-16 flex-col h-1/4">
        <h3 class="text-6xl text-center mb-2">اعضاء الفريق</h3>
        <p class="text-xl text-center text-gray-400">
            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات
            المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر </p>
    </div>
    <div class="grid grid-cols-12 gap-8 w-11/12  min-h-[64%] mx-auto">
        <div class="text-black ml-4 col-span-4 bg-white rounded-2xl flex flex-col justify-between p-4">
            <div class="rounded-t-2xl bg-cover h-2/3" style="background-image: url({{ asset('./images/member-3.jpg') }})">

            </div>
            <div class="text-3xl text-center">اسم العضو</div>
            <div class="text-gray-400 text-center text-xl">
                مبرمج
            </div>
        </div>
        <div class="text-black ml-4 col-span-4 bg-white rounded-2xl flex flex-col justify-between p-4">
            <div class="rounded-t-2xl bg-cover h-2/3"
                style="background-image: url({{ asset('./images/member-1.jpg') }})"></div>
            <div>
                <h3 class="text-3xl text-center">اسم العضو</h3>
                <h4 class="text-gray-400 text-center text-xl">
                    مبرمج
                </h4>
            </div>
        </div>
        <div class="text-black ml-4 col-span-4 bg-white rounded-2xl flex flex-col justify-between p-4">
            <div class="rounded-t-2xl bg-cover h-2/3"
                style="background-image: url({{ asset('./images/member-2.jpg') }})"></div>
            <div class="text-3xl text-center">اسم العضو</div>
            <div class="text-gray-400 text-center text-xl">
                مبرمج
            </div>
        </div>
    </div>
</section>
