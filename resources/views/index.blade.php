@extends('layouts.app')
@section('page_title')
    Home
@endsection
@section('content')

    <section class="bg-gray-900">
        <div class="flex h-96 flex-col md:flex-row p-4 gap:4 justify-center  ">
            <div class="flex flex-col justify-center my-8  items-center">
                <h1 class="text-4xl self-start md:text-6xl text-gray-200 font-semibold ">Think twice, Code Once </h1>
                <p class="my-4 text-xl md:text-lg self-start md:self-center text-left text-gray-400">
                    We provide Web Development Services at reasonable prices
                </p>
                <div class="flex flex-col sm:flex-row justify-center  gap-2 my-4 w-full">
                    <a href="/blog">
                        <button
                            class=" text-lg flex gap-2 items-center justify-center w-full  md:w-48 h-12 hover:bg-blue-700 bg-blue-600 rounded-full  text-gray-50 focus:outline-none">
                            Blog
                        </button>
                    </a>
                    <a href="/contact">
                        <button
                            class="flex gap-2 text-lg items-center justify-center w-full md:w-48 h-12  hover:bg-blue-700 bg-blue-600 rounded-full text-gray-50 focus:outline-none">
                            Contact
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <!-- </section>  -->
    <section id="newsletter" class="grid grid-cols-2 gap-2 my-8 p-2 mx-12">
        <p class="text-4xl col-span-2 md:text-left border-l-4 border-blue-800 pl-2 text-blue-800">Build Your Website
        </p>

        <div class="flex flex-col col-span-2 md:col-span-1 justify-center items-center">
            <img src="{{ asset('/images/web-build.png') }}" alt="Web Build Image" class="object-contain h-48 w-96" />
            <p class="text-xl text-center text-blue-800">
                Get Your Project Done by Industry Professionals
            </p>
        </div>

        <div class="flex flex-col col-span-2 md:col-span-1 justify-center items-center">
            <img src="{{ asset('/images/dev-3.jpg') }}" alt="Web Build Image" class="object-contain h-auto w-96" />

        </div>
        <a href="/contact">
            <button
                class="w-full p-4 bg-blue-500 mt-4 text-xl uppercase text-gray-50 hover:bg-blue-600 focus:outline-none rounded-lg">
                Contact Us
            </button>
        </a>

    </section>


    <!-- Blog Section -->

    <section id="featured-posts" class="grid  sm:grid-cols-2 gap-4 p-2 mx-12">
        <h2 class="col-span-full text-3xl md:text-4xl mb-8 border-l-4   border-blue-800 pl-2   my-4 text-blue-800 ">Featured
            posts</h2>
        <a href="/blog-read">
            <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4 shadow-lg">
                <div class="max-w-2xl  h-auto  flex items-center relative ">
                    <img src="{{ asset('/images/web-dev.png') }}" class="w-full h-auto" alt="placeholder img" />

                </div>
                <div class="">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 cursor-pointer ">How to become Web Dev in 2020</h3>
                    <div class="flex gap-2 mb-2">

                        <div class="text-sm text-gray-600">
                            <h4>By Uzair Afridi</h4>
                            <h4>Updated over 1 week ago</h4>
                        </div>
                    </div>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut sit dolores
                        aspernatur doloremque quis neque quo cupiditate id obcaecati qui. Magnam magni natus voluptas
                        laboriosam
                        ad iste, praesentium explicabo aliquid?</p>
                    <button
                        class="py-2 border px-4 w-full bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">Read
                        More</button>
                </div>
            </div>
        </a>
    </section>



    <section id="featured-posts" class="grid  sm:grid-cols-2 gap-4 p-2 mx-12">
        <h2 class="col-span-full text-3xl md:text-4xl mb-8 border-l-4 border-blue-800 pl-2 my-10 text-blue-800 ">Projects
        </h2>
        <div class="p-10">
            <!--Card 1-->
            <a href="#">
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ asset('/images/todo-app.jpg') }}" alt="Mountain">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Todo App</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection