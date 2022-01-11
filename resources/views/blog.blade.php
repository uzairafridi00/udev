@extends('layouts.app')
@section('page_title')
    Blog
@endsection
@section('content')

    <!-- Search Button With TW Elements -->
    <div class="flex items-center justify-center my-10">
        <div class="flex">
            <input type="text" class="px-4 py-2 w-80 rounded-l-lg" placeholder="Search...">
            <button class="px-4 bg-blue-500 text-gray-50 rounded-r-lg outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                Search
            </button>
        </div>
    </div>

    <!-- Blog Section -->

    <section id="featured-posts" class="grid sm:grid-cols-2 gap-4 p-2 mx-12">
        <h2 class="col-span-full text-3xl md:text-4xl mb-8 border-l-4   border-blue-800 pl-2   my-4 text-blue-800 ">Recent
            Blogs</h2>
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
                        class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                         Read More</button>
                </div>
            </div>
        </a>
    </section>

@endsection
