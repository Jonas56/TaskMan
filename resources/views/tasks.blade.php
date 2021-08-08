<x-layout>
    <section class="px-6 py-8  flex flex-col justify-center items-center">
        <main class=" max-w-3xl mx-auto bg-gray-100 border border-gray-200 rounded-xl p-6">
            <h1 class="font-bold text-xl p-5">{{ $project[0]->name }}</h1>
            <hr>
            <div class="">
                <p class="m-4 ">{{ $project[0]->description }}</p>
                <button class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded p- m-4 p-4">Mark as completed</button>
            </div>
            @foreach ($tasks as $task)

            <div class="mb-6 grid grid-cols-6 bg-white border border-white rounded-xl p-4">
                <h1 class="font-bold text-xl col-span-5"><a href="#">{{ $task->title }}</a></h1>
                <button class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded" >Mark as completed</button>
            </div>

            @endforeach
            <div class="mb-6 grid grid-cols-6 bg-white border border-white rounded-xl p-4">
                <input type="text" name="task" class=" text-xl col-span-5 border border-gray-300 m-2">
                <button class="col-span-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
            </div>
        </main>
    </section>
</x-layout>