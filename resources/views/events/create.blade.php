@extends("layouts.main")

@section("title", "HDC Events - Create a event")

@section("content")
    <h1 class="text-3xl">Create a new event</h1>
    <form action="/events" method="POST" class="flex flex-col gap-5 mt-5">
        @csrf
        <div>
            <label for="title" name="title" class="block mb-2 text-xl font-medium text-gray-900">Title</label>
            <input type="text" id="title" name="title" placeholder="Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div>
            <label for="description" class="block mb-2 text-xl font-medium text-gray-90">Description</label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a description..."></textarea>
        </div>
        <div>
            <label for="private" class="block mb-2 text-xl font-medium text-gray-90">Select event type</label>
            <select id="private" name="private" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0">Public</option>
                <option value="1">Private</option>
            </select>
        </div>
        <div>
            <label for="city" name="city" class="block mb-2 text-xl font-medium text-gray-900">City</label>
            <input type="text" id="city" name="city" placeholder="City" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div>
            <input type="submit" value="Create" class="w-full text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer">
        </div>
    </form>
@endsection