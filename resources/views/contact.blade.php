@extends('layouts.app')
@section('page_title')
    Contact Us
@endsection
@section('content')

    <section class="bg-gray-900">
        <div class="flex h-96 flex-col md:flex-row p-4 gap:4 justify-center  ">
            <div class="flex flex-col justify-center my-8  items-center">
                <h1 class="text-4xl self-start md:text-6xl text-gray-200 font-semibold ">Do You Have Any Idea !!</h1>
                <h3 class="md:text-6xl text-gray-200 font-semibold text-center">because</h3>
                <p class="my-4 text-4xl md:text-lg self-start md:self-center text-left text-gray-400">
                    Everything begins with an idea.
                </p>
            </div>
        </div>

        </div>
    </section>

    @if (session('status'))
        <div class="px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <section class="grid sm:grid-cols-2 gap-4 p-2 mx-12">
        <!--Image Component-->
        <div class="">
            <img src="{{ asset('/images/contact.jpg') }}" alt="">
        </div>

        <!--Form Component-->
        <form action="/contact" method="post" class="w-full max-w-lg my-14">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                        Name
                    </label>
                    <input name="name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-name" type="text" placeholder="Edward" required>

                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email" name="email" placeholder="edward@*******" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-subject"
                        required>
                        Subject
                    </label>
                    <input name="subject"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-subject" type="text" placeholder="Write About Your Project." required>
                    <p class="text-gray-600 text-xs italic">Give as Much Info as You Can.</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-subject"
                        required>
                        Type
                    </label>
                    <input name="type"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-type" type="text" placeholder="Web / App" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <input
                        class="appearance-none block w-full bg-blue-500 cursor-pointer uppercase text-gray-50 hover:bg-blue-600 focus:outline-none rounded-lg py-3 px-4 mb-3 leading-tight"
                        id="grid-submit" type="submit" />
                    <p class="text-gray-600 text-xs italic">Our Team Will Connect With You as soon as Possible.</p>
                </div>
            </div>
        </form>
    </section>
@endsection
