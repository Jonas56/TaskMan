<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-3xl mx-auto bg-gray-100 border border-gray-200 rounded-xl p-6">

            <h1 class="text-center font-bold text-2xl m-4 pb-3">My Projects</h1>
            @foreach ($projects as $project)
            <div class="mb-6 grid grid-cols-6 bg-white border border-white rounded-xl p-4">
                <h1 class="text-xl col-span-5"><a href="projects/{{ $project->slug }}">{{ $project->name }}</a></h1>
                <span class="col-span-1 text-center bg-blue-600 text-white rounded-xl text-lg">{{ $project->tasks_count }}</span>
            </div>
            @endforeach
        </main>
    </section>
</x-layout>