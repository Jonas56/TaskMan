<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl p-6 ">
           <h1 class="text-center font-bold text-xl">Create new project</h1>
            <form action="" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="username" class="bloock mb-2 upercase font-bold text-xs text-gray-700 text-lg">Project title</label>
                    <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full mt-1">
                </div>
                <div class="mb-6">
                    <label for="description" class="bloock mb-2 upercase font-bold text-xs text-gray-700 text-xl">Description</label>
                    <textarea type="text" name="description" id="description" class="border border-gray-400 p-2 w-full mt-3" rows="10"></textarea>
                </div>
                <div class="mb-6">
                    <input type="submit" name="submit" id="submit" class="text-white bg-blue-400 py-2 px-4 hover:bg-blue-500 w-full cursor-pointer" value="SUBMIT">
                </div>
            </form>
        </main>
    </section>
</x-layout>