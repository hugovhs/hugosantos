@extends('theme.main')

@section('title', 'Home')

@section('content')
    <div class="bg-[#1e1e1e] text-white">
        <div class="container mx-auto p-8">
            <!-- Hero Section -->
            <section id="home" class="relative min-h-[80vh] flex items-center py-16">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-900/50 via-transparent to-cyan-900/30 opacity-30 rounded-3xl"></div>

                <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 sm:px-8 relative z-10">
                    <div class="md:w-1/2 text-center md:text-left">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
                            Hello World, <br /> I am Hugo Santos, <span class="text-purple-400">Full Stack Developer</span>
                        </h1>
                        
                        <p class="text-gray-300 mb-8 max-w-lg mx-auto md:mx-0">
                            I create an efficient UI mobile or web design also UX research to make sure that I get what people needs and strategy for interaction design.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-6">
                            <button class="bg-purple-600 hover:bg-purple-700 rounded-full px-8 py-6 text-md font-bold">DOWNLOAD CV</button>
                            <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/3 mt-10 md:mt-0">
                        <div class="relative p-1 border border-purple-500/30 rounded-3xl bg-black/10 backdrop-blur-sm">
                            <div class="relative p-1 border border-purple-500/30 rounded-3xl">
                                <img src="{{ asset('assets/img/cv_foto.jpg') }}" alt="Hugo Santos Dev" class="rounded-2xl w-full" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- ends hero section --}}
            
            {{-- stats section --}}
            @php
                $stats = [
                    ['icon' => '<i class="fa-brands fa-magento fa-2x"></i>', 'label' => 'Magento', 'value' => 'Certificado en Adobe Commerce'],
                    ['icon' => '<i class="fa-brands fa-youtube fa-2x"></i>', 'label' => 'YouTube', 'value' => 'Creador de Contenido'],
                    ['icon' => '<i class="fa-brands fa-github fa-2x"></i>', 'label' => 'GitHub', 'value' => 'Contribuciones Open Source']
                ];
            @endphp

            <section class="py-16">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-center gap-8">
                    @foreach($stats as $index => $stat)
                        <div class="flex items-center space-x-6">
                            <div class="text-center">
                                <div class="p-4 bg-[#2a2a2a] rounded-lg">{!! $stat['icon'] !!}</div>
                            </div>
                        
                            <div>
                                <p class="text-lg font-semibold">{{ $stat['value'] }}</p>
                                <p class="text-xl font-bold tracking-widest text-gray-400">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
            {{-- ends stats section --}}

            {{-- experience ands skills section --}}
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 my-16">
                @php
                    $experiences = [
                        [
                            'role' => 'Creative Director',
                            'company' => 'at Fourth Company',
                            'period' => '2015 - Present',
                        ],
                        [
                            'role' => 'Senior UI/UX Designer',
                            'company' => 'at Third Company',
                            'period' => '2013 - 2015',
                        ],
                        [
                            'role' => 'UI/UX Designer',
                            'company' => 'at Second Company',
                            'period' => '2012 - 2013',
                        ],
                        [
                            'role' => 'UI/UX Designer',
                            'company' => 'at First Company',
                            'period' => '2009 - 2011',
                        ],
                    ];

                    $skills = [
                        [ 'name' => 'UI Interface Design', 'level' => 90, 'icon' => '<i class="fa-solid fa-wand-magic-sparkles text-purple-400"></i>' ],
                        [ 'name' => 'Icon Design', 'level' => 85, 'icon' => '<i class="fa-solid fa-pencil-alt text-purple-400"></i>' ],
                        [ 'name' => 'HTML Prototyping', 'level' => 80, 'icon' => '<i class="fa-solid fa-globe text-purple-400"></i>' ],
                        [ 'name' => 'Photo Editing', 'level' => 95, 'icon' => '<i class="fa-solid fa-camera text-purple-400"></i>' ],
                        [ 'name' => 'Graphic Illustrations', 'level' => 75, 'icon' => '<i class="fa-solid fa-snowflake text-purple-400"></i>' ],
                    ];
                @endphp

                <section id="experience">
                    <h2 class="text-3xl font-bold mb-8 text-center md:text-left">WORK EXPERIENCE</h2>
                    
                    <div class="relative border-l-2 border-purple-500 pl-8">
                        @foreach($experiences as $index => $exp)
                        <div key={index} class="mb-12 relative">
                            <div class="absolute -left-[39px] top-1 w-4 h-4 bg-purple-500 rounded-full border-4 border-[#1e1e1e]"></div>
                            <h3 class="text-xl font-bold">{{ $exp['role'] }}</h3>
                            <p class="text-gray-400">{{ $exp['company'] }}</p>
                            <p class="text-sm text-gray-500">{{ $exp['period'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </section>

                <section id="skills">
                    <h2 class="text-3xl font-bold mb-8 text-center md:text-left">SKILL AND EXPERTISE</h2>
                        
                    <div class="space-y-6">
                        @foreach($skills as $index => $skill)
                            <div key={index}>
                                <div class="flex items-center mb-2">
                                    {!! $skill['icon'] !!}
                                    <p class="ml-2 font-semibold">{{ $skill['name'] }}</p>
                                </div>
                                
                                <div class="w-full bg-gray-700 rounded-full h-1.5">
                                    <div class="bg-gradient-to-r from-purple-500 to-cyan-400 h-1.5 rounded-full" style="width: {{ $skill['level'] }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            {{-- ends experience and skills section --}}

            {{-- project stats --}}
            @php
                $projectStats = [
                    [
                        'icon' => '<i class="fas fa-check-circle fa-2x"></i>',
                        'value' => 123,
                        'label' => 'Completed Project'
                    ],
                    [
                        'icon' => '<i class="fas fa-clock fa-2x"></i>',
                        'value' => 4567,
                        'label' => 'Working Hour'
                    ],
                    [
                        'icon' => '<i class="fas fa-heart fa-2x"></i>',
                        'value' => 89,
                        'label' => 'Happy Clients'
                    ],
                ];
            @endphp

            <section class="my-16 p-8 bg-gradient-to-r from-purple-800/80 to-purple-900/80 rounded-2xl">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-around items-center divide-x divide-purple-700/50">
                    @foreach($projectStats as $index => $stat)
                        <div class="flex-1 flex items-center justify-center space-x-4 text-center m-4 px-4">
                            {!! $stat['icon'] !!}
                            
                            <div>
                                <p class="text-4xl font-bold">{{ $stat['value'] }}</p>
                                <p class="text-gray-300">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
            {{-- ends project stats section --}}

            {{-- services section --}}
            @php
                $services = [
                    [ 'name' => 'UI Interface Design', 'icon' => '<i class="fa-solid fa-wand-magic-sparkles"></i>' ],
                    [ 'name' => 'Icon Design', 'icon' => '<i class="fa-solid fa-pen-nib"></i>' ],
                    [ 'name' => 'HTML Prototyping', 'icon' => '<i class="fa-solid fa-globe"></i>' ],
                    [ 'name' => 'Photo Editing', 'icon' => '<i class="fa-solid fa-camera"></i>' ],
                    [ 'name' => 'Graphic Illustrations', 'icon' => '<i class="fa-solid fa-snowflake"></i>' ],
                    [ 'name' => 'Web Development', 'icon' => '<i class="fa-solid fa-code"></i>' ],
                    [ 'name' => 'SEO Optimization', 'icon' => '<i class="fa-solid fa-search"></i>' ]
                ];
            @endphp

            <section id="services" class="py-16">
                <div class="container mx-auto">
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold">Services</h2>
                        <p class="text-gray-400">Working with mutual respect and trust</p>
                    </div>
                    
                    <div class="grid grid-cols-1 max-sm:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8">
                        @foreach($services as $service)
                        <div class="bg-[#2a2a2a] p-8 rounded-2xl flex flex-col items-center justify-center text-center aspect-square transition-all duration-300 border-2 border-transparent hover:border-purple-500 cursor-pointer">
                            <div class="text-purple-400 text-4xl mb-6">{!! $service['icon'] !!}</div>
                            <h3 class="text-lg font-semibold">{{ $service['name'] }}</h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- ends services section --}}

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
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 1" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 2" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 3" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 4" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 5" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="bg-gray-700 h-64 rounded-lg">
                        <img src="{{ asset('assets/img/csharp.png') }}" alt="Work 6" class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="my-16 p-8 md:p-16 bg-gradient-to-br from-purple-800/80 to-purple-900/80 rounded-2xl">
                <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">What Client Said</h2>
                        <img src="{{ asset('assets/img/work_together.jpg') }}" alt="World map with client avatars" class="w-full" />
                    </div>
                    
                    <div>
                        <h3 class="text-4xl font-bold mb-4">Let's work together</h3>
                        <p class="text-gray-300 mb-8">
                            The key to building long term relationships is trust. I take the responsibility of being your development partner seriously. My design agreement gives you peace of mind that your intellectual property is safe guarded.
                        </p>

                        <button class="bg-white text-purple-700 hover:bg-gray-200 rounded-full px-8 py-2 text-lg font-bold">HIRE ME</button>
                    </div>
                </div>
            </section>
            {{-- ends testimonials section --}}

            <!-- Latest Post Section -->
            <section class="py-20 text-center" id="latest-posts">
                <h2 class="text-4xl font-bold">Latest Post</h2>
                
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="post bg-[#2a2a2a] p-8 rounded-lg text-left">
                        <div class="post-image mb-4">
                            <a href="#"><img src="{{ asset('assets/img/img_post_placeholder.jpg') }}" alt="Post 1" class="w-full h-48 object-cover rounded-lg"></a>
                        </div>
                        
                        <h3 class="text-xl font-bold">Drawing History with Wiki Unseen</h3>
                        
                        <p class="mt-2">This month, we celebrated Black History Month and the launch of Wiki Unseen...</p>
                        
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>

                    <div class="bg-[#2a2a2a] p-8 rounded-lg text-left">
                        <div class="post-image mb-4">
                            <a href="#"><img src="{{ asset('assets/img/img_post_placeholder.jpg') }}" alt="Post 1" class="w-full h-48 object-cover rounded-lg"></a>
                        </div>

                        <h3 class="text-xl font-bold">Creatives Resolutions for 2022</h3>
                        <p class="mt-2">For many of us, the beginning of the year signals a new start.</p>
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>

                    <div class="bg-[#2a2a2a] p-8 rounded-lg text-left">
                        <div class="post-image mb-4">
                            <a href="#"><img src="{{ asset('assets/img/img_post_placeholder.jpg') }}" alt="Post 1" class="w-full h-48 object-cover rounded-lg"></a>
                        </div>

                        <h3 class="text-xl font-bold">Top 3 Visual Trends of 2021</h3>
                        <p class="mt-2">We took a moment to look back and reflect on all the incredible work.</p>
                        <a href="#" class="mt-4 inline-block text-purple-400">READ MORE</a>
                    </div>
                </div>
            </section>
            {{-- ends latest post section --}}

            <!-- Contact Section -->
            <section id="contact" class="py-16">
                <div class="container mx-auto grid md:grid-cols-2 gap-16 items-start bg-[#2a2a2a] p-8 rounded-2xl">
                    <div class="text-center md:text-left">
                        <div class="flex justify-center md:justify-start mb-4">
                            <img src="{{ asset('assets/img/hugo_santos_icon.png') }}" alt="Logo" class="w-16 h-16" />
                        </div>
                    
                        <h2 class="text-4xl font-bold">James Doe</h2>
                        <p class="text-gray-400 mb-4">FRONT END DEVELOPER</p>

                        <button variant="outline" class="border-purple-500 text-purple-500 hover:bg-purple-500 bg-white hover:text-white rounded-full px-8">DOWNLOAD CV</button>

                        <div class="flex justify-center md:justify-start space-x-4 my-8">
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-400">My personal contact</p>
                                <p class="text-lg font-semibold">+12 345 678 90</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Say hello</p>
                                <p class="text-lg font-semibold">jenadoe.skype</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-4xl font-bold mb-4">Contact <span class="text-purple-400">Me.</span></h2>
                        
                        <form class="space-y-8">
                            <input type="text" placeholder="What is your name? *" class="bg-transparent border-0 border-b-2 border-gray-600 focus:border-purple-500 rounded-none px-0 ring-offset-transparent focus-visible:ring-0 h-10 w-full">

                            <input type="email" placeholder="What it your email? *" class="bg-transparent border-0 border-b-2 border-gray-600 focus:border-purple-500 rounded-none px-0 ring-offset-transparent focus-visible:ring-0 h-10 w-full">

                            <textarea placeholder="Write your message here" class="bg-transparent border-0 border-b-2 border-gray-600 focus:border-purple-500 rounded-none px-0 ring-offset-transparent focus-visible:ring-0 h-32 w-full"></textarea>

                            <button class="bg-purple-600 hover:bg-purple-700 rounded-full px-8 py-2 text-lg">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </section>
            {{-- ends contact section --}}
        </div>
    </div>
@endsection