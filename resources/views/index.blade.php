@extends('theme.main')

@section('title', 'Home')

@section('content')
    <div class="bg-gray-800 text-white">
        <div class="container mx-auto p-8">
            <!-- Hero Section -->
            <section class="text-center py-20">
                <h1 class="text-5xl font-bold">Hello World,</h1>
                <h2 class="text-4xl font-bold">I am James, Front End Developer</h2>
                <p class="mt-4 text-lg">I create an efficient UI mobile or web design also UX research to make sure that I get what people needs and strategy for interaction design.</p>
                <a href="#" class="mt-8 inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg">DOWNLOAD CV</a>
            </section>

            <!-- About Section -->
            <section class="py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold">WORK EXPERIENCE</h3>
                        <div class="mt-8">
                            <div class="mb-8">
                                <h4 class="text-xl font-bold">Creative Director</h4>
                                <p class="text-gray-400">at Fourth Company | 2015 - Present</p>
                            </div>
                            <div class="mb-8">
                                <h4 class="text-xl font-bold">Senior UI/UX Designer</h4>
                                <p class="text-gray-400">at Third Company | 2013 - 2015</p>
                            </div>
                            <div class="mb-8">
                                <h4 class="text-xl font-bold">UI/UX Designer</h4>
                                <p class="text-gray-400">at Second Company | 2012 - 2013</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold">UI/UX Designer</h4>
                                <p class="text-gray-400">at First Company | 2009 - 2011</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold">SKILL AND EXPERTISE</h3>
                        <div class="mt-8 space-y-4">
                            <div>
                                <p>UI Interface Design</p>
                                <div class="w-full bg-gray-700 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <p>Icon Design</p>
                                <div class="w-full bg-gray-700 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <p>HTML Prototyping</p>
                                <div class="w-full bg-gray-700 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <p>Photo Editing</p>
                                <div class="w-full bg-gray-700 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <p>Graphic Illustrations</p>
                                <div class="w-full bg-gray-700 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section class="py-20 text-center">
                <h2 class="text-4xl font-bold">Services</h2>
                <div class="mt-8 grid grid-cols-2 md:grid-cols-5 gap-8">
                    <div class="bg-gray-700 p-8 rounded-lg">
                        <h3 class="text-xl font-bold">UI Interface Design</h3>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg">
                        <h3 class="text-xl font-bold">Icon Design</h3>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg">
                        <h3 class="text-xl font-bold">HTML Prototyping</h3>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg">
                        <h3 class="text-xl font-bold">Photo Editing</h3>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg">
                        <h3 class="text-xl font-bold">Graphic Illustrations</h3>
                    </div>
                </div>
            </section>

            <!-- My Work Section -->
            <section class="py-20 text-center">
                <h2 class="text-4xl font-bold">My Work</h2>
                <div class="mt-8 flex justify-center space-x-4">
                    <button class="bg-purple-600 text-white py-2 px-4 rounded-lg">ALL</button>
                    <button class="hover:text-gray-400">CATEGORY 1</button>
                    <button class="hover:text-gray-400">CATEGORY 2</button>
                    <button class="hover:text-gray-400">CATEGORY 3</button>
                    <button class="hover:text-gray-400">CATEGORY 4</button>
                </div>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                    <div class="bg-gray-700 h-64 rounded-lg"></div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="py-20">
                <div class="bg-purple-700 rounded-lg p-8 md:p-16 text-center">
                    <h2 class="text-4xl font-bold">What Client Said</h2>
                    <p class="mt-4 text-lg max-w-2xl mx-auto">The key to building long term relationships is trust. I take the responsibility of being your development partner seriously. My design agreement gives you peace of mind that your intellectual property is safe guarded.</p>
                    <button class="mt-8 bg-white text-purple-700 font-bold py-3 px-6 rounded-lg">HIRE ME</button>
                </div>
            </section>

            <!-- Latest Post Section -->
            <section class="py-20 text-center">
                <h2 class="text-4xl font-bold">Latest Post</h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-700 p-8 rounded-lg text-left">
                        <h3 class="text-xl font-bold">Drawing History with Wiki Unseen</h3>
                        <p class="mt-2">This month, we celebrated Black History Month and the launch of Wiki Unseen...</p>
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg text-left">
                        <h3 class="text-xl font-bold">Creatives Resolutions for 2022</h3>
                        <p class="mt-2">For many of us, the beginning of the year signals a new start.</p>
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>
                    <div class="bg-gray-700 p-8 rounded-lg text-left">
                        <h3 class="text-xl font-bold">Top 3 Visual Trends of 2021</h3>
                        <p class="mt-2">We took a moment to look back and reflect on all the incredible work.</p>
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-4xl font-bold">Contact Me.</h2>
                    </div>
                    <div>
                        <form class="space-y-4">
                            <input type="text" placeholder="What is your name?" class="w-full bg-gray-700 p-4 rounded-lg">
                            <input type="email" placeholder="What is your email?" class="w-full bg-gray-700 p-4 rounded-lg">
                            <textarea placeholder="Write your message here" class="w-full bg-gray-700 p-4 rounded-lg h-32"></textarea>
                            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection