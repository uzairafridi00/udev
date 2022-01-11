@extends('layouts.app')
@section('page_title')
    About Us
@endsection
@section('content')

    <!--Image Section-->
    <section class="justify-center flex flex-col">
        <img src="{{ asset('/images/team-members.jpg') }}" alt="Team Members" />
    </section>

    <!--Team Members Card Section-->

    <section id="team-members" class="grid sm:grid-cols-2 gap-4 p-2 mx-12">
        <h2 class="col-span-full text-3xl md:text-4xl mb-8 border-l-4   border-blue-800 pl-2   my-4 text-blue-800 ">
            Team Members</h2>

        <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4 shadow-lg">
            <div class="max-w-2xl  h-auto  flex items-center relative ">
                <img src="{{ asset('/images/profile-pic-1.png') }}" class="w-full h-auto" alt="placeholder img" />

            </div>
            <div class="">
                <h3 class="text-2xl font-bold text-gray-800 mb-1 cursor-pointer text-center">Uzair Afridi</h3>
                <div class="text-lg text-gray-600 text-center">
                    <h4>CEO</h4>
                    <h4>Laravel Developer</h4>
                </div>

                <p class="text-justify text-gray-700 my-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut sit
                    dolores
                    aspernatur doloremque quis neque quo cupiditate id obcaecati qui. Magnam magni natus voluptas
                    laboriosam
                    ad iste, praesentium explicabo aliquid?</p>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Github</button>

                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Linkedin</button>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Facebook</button>
            </div>
        </div>


        <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4 shadow-lg">
            <div class="max-w-2xl  h-auto  flex items-center relative ">
                <img src="{{ asset('/images/profile-pic-1.png') }}" class="w-full h-auto" alt="placeholder img" />

            </div>
            <div class="">
                <h3 class="text-2xl font-bold text-gray-800 mb-1 cursor-pointer text-center">Uzair Afridi</h3>
                <div class="text-lg text-gray-600 text-center">
                    <h4>CEO</h4>
                    <h4>Laravel Developer</h4>
                </div>

                <p class="text-justify text-gray-700 my-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut sit
                    dolores
                    aspernatur doloremque quis neque quo cupiditate id obcaecati qui. Magnam magni natus voluptas
                    laboriosam
                    ad iste, praesentium explicabo aliquid?</p>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Github</button>

                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Linkedin</button>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Facebook</button>
            </div>
        </div>



        <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4 shadow-lg">
            <div class="max-w-2xl  h-auto  flex items-center relative ">
                <img src="{{ asset('/images/profile-pic-1.png') }}" class="w-full h-auto" alt="placeholder img" />

            </div>
            <div class="">
                <h3 class="text-2xl font-bold text-gray-800 mb-1 cursor-pointer text-center">Uzair Afridi</h3>
                <div class="text-lg text-gray-600 text-center">
                    <h4>CEO</h4>
                    <h4>Laravel Developer</h4>
                </div>

                <p class="text-justify text-gray-700 my-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut sit
                    dolores
                    aspernatur doloremque quis neque quo cupiditate id obcaecati qui. Magnam magni natus voluptas
                    laboriosam
                    ad iste, praesentium explicabo aliquid?</p>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Github</button>

                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Linkedin</button>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Facebook</button>
            </div>
        </div>


        <div class="grid lg:grid-cols-2 border rounded-lg gap-4 h-auto p-4 shadow-lg">
            <div class="max-w-2xl  h-auto  flex items-center relative ">
                <img src="{{ asset('/images/profile-pic-1.png') }}" class="w-full h-auto" alt="placeholder img" />

            </div>
            <div class="">
                <h3 class="text-2xl font-bold text-gray-800 mb-1 cursor-pointer text-center">Uzair Afridi</h3>
                <div class="text-lg text-gray-600 text-center">
                    <h4>CEO</h4>
                    <h4>Laravel Developer</h4>
                </div>

                <p class="text-justify text-gray-700 my-8">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime iure tempore, architecto numquam vel alias minus. 
                    Magnam eius dolorum laboriosam, consequatur eveniet ea quae nihil repudiandae! Laboriosam veritatis dolores ea?</p>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Github</button>

                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Linkedin</button>
                <button
                    class="py-2 border px-4 bg-blue-500 text-gray-50 rounded-lg mt-3 outline-none focus:outline-none hover:bg-blue-600 hover:text-gray-100">
                    Facebook</button>
            </div>
        </div>


    </section>

@endsection