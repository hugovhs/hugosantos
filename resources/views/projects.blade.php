@extends('theme.main')

@section('title', 'Proyectos recientes')

@section('content')
    <div class="bg-[#1e1e1e] text-white">
        <div class="container mx-auto p-8">
            <!-- Projects list header -->
            <section class="py-10 text-center" id="projects">
                <h1 class="text-4xl font-bold">Proyectos recientes</h1>
                <p class="text-gray-400 mt-2">Una selección de mis trabajos más recientes</p>

                <!-- Posts grid (copiado y adaptado de index.blade.php -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($projects as $project)
                    <div class="project bg-[#2a2a2a] rounded-lg">
                        <div class="project-image">
                            <a href="{{ route('home.project', $project->slug) }}"><img src="{{ asset('storage/' . $project->thumbnail) }}" alt="Work 1" class="w-full h-full object-cover rounded-lg"></a>
                        </div>

                        <div class="project-name py-3">
                            <h3 class="text-xl font-bold mt-2">{{ $project->title }}</h3>
                            <p class="text-gray-400">{{ $project->excerpt }}</p>
                        </div>

                        <div class="project-actions py-4">
                            <a href="{{ route('home.project', $project->slug) }}" class="bg-purple-600 text-white rounded-full px-4 py-2 text-sm font-bold">VER DETALLES</a>
                        </div>
                    </div>
                    @empty
                        <p class="col-span-3 text-gray-400">No hay proyectos recientes.</p>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-10">
                    {{ $projects->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
