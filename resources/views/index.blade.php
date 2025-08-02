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
                            <Button class="bg-purple-600 hover:bg-purple-700 rounded-full px-8 py-6 text-md font-bold">DOWNLOAD CV</Button>
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
                    <div class="flex flex-wrap justify-center gap-8 md:gap-24">
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
                    [ 'name' => 'UI Interface Design', 'icon' => '<i class="fas fa-paint-brush text-purple-400"></i>' ],
                    [ 'name' => 'Icon Design', 'icon' => '<i class="fas fa-pencil-alt text-purple-400"></i>' ],
                    [ 'name' => 'HTML Prototyping', 'icon' => '<i class="fas fa-globe text-purple-400"></i>' ],
                    [ 'name' => 'Photo Editing', 'icon' => '<i class="fas fa-camera text-purple-400"></i>' ],
                    [ 'name' => 'Graphic Illustrations', 'icon' => '<i class="fas fa-chart-bar text-purple-400"></i>' ],
                    [ 'name' => 'Web Development', 'icon' => '<i class="fas fa-code text-purple-400"></i>' ]
                ];
            @endphp

            <section id="services" className="py-16">
                <div className="container mx-auto">
                    <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8">
                        <div className="mb-4 sm:mb-0">
                            <h2 className="text-3xl font-bold">Services</h2>
                            <p className="text-gray-400">Working with mutual respect and trust</p>
                        </div>
                    </div>
                    
                    <div className="flex flex-wrap -mx-1">
                        @foreach($services as $index => $service)
                        <div className="basis-1/2 md:basis-1/3 lg:basis-1/5">
                            <div className="p-1">
                                <div className="bg-[#2a2a2a] border-gray-700 hover:border-purple-500 transition-colors">
                                    <div className="flex flex-col items-center justify-center p-6 aspect-square">
                                        <div className="mb-4">{!! $service['icon'] !!}</div>
                                        <span className="text-lg font-semibold text-center">{{ $service['name'] }}</span>
                                    </div>
                                </div>
                            </div>
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