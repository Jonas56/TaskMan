<x-layout>
    <section class="px-6 py-8  flex flex-col justify-center items-center">
        <main class=" max-w-3xl mx-auto bg-gray-100 border border-gray-200 rounded-xl p-6">
            <h1 class="font-bold text-xl p-5">{{ $project[0]->name }}</h1>
            <hr>
            <div class="">
                <p class="m-4 ">{{ $project[0]->description }}</p>
                <form action="/projects/{{ $project[0]->slug }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- <input name="_method" type="hidden" value="PUT"> --}}
                    <input type="submit" name="completed" value="Mark as completed" class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded p- m-4 p-4 cursor-pointer">
                </form>
            </div>
            @foreach ($tasks as $task)

            <div class="mb-6 grid grid-cols-6 bg-white border border-white rounded-xl p-4">
                <h1 class="font-bold text-xl col-span-5"><a href="#">{{ $task->title }}</a></h1>
                <button class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded" >Mark as completed</button>
            </div>

            @endforeach
            <form action="/projects/{{ $project[0]->slug }}" method="POST">
                @csrf
                <div class="mb-6 grid grid-cols-6 bg-white border border-white rounded-xl p-4">
                    <input type="text" name="title" class="text-xl col-span-5 border border-gray-300 m-2">
                    <input class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer" value="Add Task" name="createTask" type="submit">
                    @error('title')
                        <span class="text-red-600 text-xs col-span-5">{{ $message }}*</span>
                    @enderror
                </div>
            </form>
        </main>
    </section>
</x-layout>
