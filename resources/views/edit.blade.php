<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-indigo-50 to-rose-100">
    <div
        class="text-xl font-bold text-center mt-5 bg-gradient-to-r from-blue-600 to-violet-600 bg-clip-text text-transparent">
        Category</div>
    @if (session('status'))
        <div class="text-sm text-green-950 font-semibold text-center mt-10 p-2 bg-green-200 rounded-md ml-10 mr-10">
            {{ session('status') }}
        </div>
    @endif
    <div class="p-10 flex w-full justify-end px-96">
        <div class="flex justify-end flex-col">
            <a href="{{ url('category') }}">
                <button class="text-white bg-purple-700 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2 hover:bg-purple-800">Go
                    Back</button>
            </a>
        </div>
    </div>
    <div class="flex justify-center items-center w-full px-72 text-lg ">
        <form action="{{ url('/category/' . $category->id . '/update') }}" method="POST" class="w-1/2">
            @csrf
            @method('PUT')
            <div class="mb-2 flex gap-1 flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $category->name }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div class="mb-2 flex flex-col gap-1">
                <label for="description">Description</label>
                <textarea type="textarea" name="description" value="{{ $category->description }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $category->description }}</textarea>
            </div>
            <div class="mb-2 flex gap-1">
                <label for="isActive">Is Active</label>
                <input type="checkbox" name="is_active" value="1"
                    {{ $category->is_active == true ? 'checked' : '' }}
                    class="h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none 
                focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer ml-2 mt-1" />
            </div>
            <div class="mt-8 mb-2 flex justify-end">
                <button type="submit"
                    class="bg-blue-700 text-cyan-50 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2
                hover:bg-blue-900">Update</button>
            </div>
        </form>
    </div>
</body>

</html>
