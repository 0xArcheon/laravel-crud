<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-xl font-bold text-center mt-5">Category</div>
    @if (session('status')) 
        <div class="text-sm text-green-950 font-semibold text-center mt-10 p-2 bg-green-200 rounded-md ml-10 mr-10">
                {{(session('status'))}}
        </div>
    @endif 
    <div class="p-10 flex w-full justify-end px-96">
        <div class="flex justify-end flex-col">
        <a href="{{ url('category') }}" >
            <button class="text-white bg-purple-700 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2 hover:bg-purple-800" >Go Back</button>
        </a>
        </div>   
    </div>
    <div class="flex justify-center items-center w-full px-72 text-lg ">
        <form action="{{ url('/category/store') }}" method="POST" class="w-1/2">
            @csrf
            <div class="mb-2 flex gap-1 flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"/>
            </div>
            <div class="mb-2 flex flex-col gap-1">
                <label for="description">Description</label>
                <textarea type="text" name="description" value="{{old('name')}}"  class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div class="mb-2 flex gap-1">
                <label for="isActive">Is Active</label>
                <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}
                class="h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none 
                focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer ml-2 mt-1"/>
            </div>
            <div class="mt-8 mb-2 flex justify-end">
                <button type="submit" class="bg-blue-700 text-cyan-50 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2
                hover:bg-blue-900">Save</button>
            </div>
        </form>
    </div> 
</body>
</html>