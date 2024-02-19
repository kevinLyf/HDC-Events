@extends("layouts.main")

@section("title", "HDC Events - Create a event")

@section("content")
    <h1 class="text-3xl">Create a new event</h1>
    <form action="/events" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5 mt-5">
        @csrf
        <div>
            <label for="image" class="block mb-2 text-xl font-medium text-gray-900">Image</label>
            <input type="file" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
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
            <label for="city" class="block mb-2 text-xl font-medium text-gray-900">City</label>
            <input type="text" id="city" name="city" placeholder="City" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div>
            <label for="date" name="date" class="block mb-2 text-xl font-medium text-gray-900">Date</label>
            <input type="date" id="date" name="date" placeholder="Select event date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        

        <div class="flex align-middle items-center mb-4 gap-3">
            <label for="items" class="block mb-2 text-xl font-medium text-gray-900">Add items</label>
            <div class="flex align-middle justify-center">
                <input id="chairs" name="items[]" type="checkbox" value="Chairs" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="chairs" class="ms-2 text-sm font-medium text-gray-500">Chairs</label>
            </div>

            <div class="flex align-middle justify-center">
                <input id="openFood" name="items[]" type="checkbox" value="Open Food" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="openFood" class="ms-2 text-sm font-medium text-gray-500">Open food</label>
            </div>

            <div class="flex align-middle justify-center">
                <input id="openBar" name="items[]" type="checkbox" value="Open Bar" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="openBar" class="ms-2 text-sm font-medium text-gray-500">Open bar</label>
            </div>

            <div class="flex align-middle justify-center">
                <input id="gifts" name="items[]" type="checkbox" value="Gifts" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="gifts" class="ms-2 text-sm font-medium text-gray-500">Gifts</label>
            </div>
        </div>

        <div>
            <input type="submit" value="Create" class="w-full text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 cursor-pointer">
        </div>
    </form>
@endsection