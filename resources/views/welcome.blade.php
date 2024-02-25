@extends('layouts.app')

@section('content')
    <main>
        @include('common.navbar')
        @include('home.home')
        @include('home.services')
        @include('home.about')
        @include('home.services_we_produce')
        @include('home.contact')
        @include('home.pricing_plane')
        @include('home.team-members')
        @include('home.blog')
    </main>
@endsection

@section('footer')
    <footer class="bg-slate-950 text-white h-svh p-16">

        <div>
            <h2 class="text-6xl text-center">تواصل معنا</h2>
        </div>

        <div>
            <form class="mx-auto mt-10 w-1/2 text-xl text-gray-400 grid grid-cols-12">
                @method('POST')
                @csrf
                <input class="bg-slate-800 col-span-6 p-4 m-4 rounded-lg" placeholder="الاسم" type="text" name=""
                    id="">
                <input class="bg-slate-800 col-span-6 p-4 m-4 rounded-lg" placeholder="الموضوع" type="text" name=""
                    id="">
                <input class="bg-slate-800 col-span-6 p-4 m-4 rounded-lg" placeholder="البريد اﻹلكتروني" type="text"
                    name="" id="">
                <input class="bg-slate-800 col-span-6 p-4 m-4 rounded-lg" placeholder="الميزانيه" type="text"
                    name="" id="">
                <textarea class="bg-slate-800 col-span-12 p-4 m-4 rounded-lg" placeholder="الرساله" name="" id=""
                    cols="30" rows="10"></textarea>
                <button class="col-span-12 place-self-center text-2xl bg-blue-700 rounded-md p-2 px-8"
                    type="submit">ارسال</button>
            </form>
        </div>

        <div class="my-auto mt-72">
            <div class="w-3/4 mx-auto grid grid-flow-col grid-cols-4 grid-rows-4 text-gray-400">
                <div class="col-span-1 row-span-4">
                    <div class="w-[10vh] h-[10vh] bg-cover"
                        style="background-image: url('{{ asset('/images/company-logo.jpg') }}')">
                    </div>
                </div>
                <h3 class="" >الرئيسيه</h3>
                <h3 class="" >الخدمات</h3>
                <h3 class="" >عنا</h3>
                <h3 class="" >المدونه</h3>
                <h3 class="" >تواصل معنا</h3>
                <h3 class="" >الدعم الفني</h3>
                <h3 class="" >الامان</h3>
                <h3 class="" >لماذا نحن</h3>
                <h3 class="" >الخصوصية والأمن</h3>
                <h3 class="" >الخصوصية والأمن</h3>
                <h3 class="" >الشروط و الاحكام</h3>
            </div>
        </div>

        <div class="mr-32 mt-16 text-gray-400 ">
            <h3>حقوق الطبع النشر محفوظه@2024</h3>
        </div>
    </footer>
@endsection
