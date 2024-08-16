<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="text-xl font-bold text-center mt-10">Category</div>
    <div class="p-10 flex w-full justify-end px-96">
        <div class="flex justify-end flex-col">
        <a href="{{ url('category') }}" >
            <button class="text-white bg-purple-700 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2 hover:bg-purple-800" >Go Back</button>
        </a>
        </div>   
    </div>
    <div class="bruh p-10 flex justify-center items-center w-full px-96 text-lg ">
        <form action="{{ url('') }}" method="POST">
            <div class="mb-2 flex justify-between gap-4">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"/>
            </div>
            <div class="mb-2 flex justify-between gap-4">
                <label for="description">Description</label>
                <textarea type="text" name="description" value="{{old('name')}}"  class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm 
                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <div class="mb-2 flex justify-between gap-4">
                <label for="isActive">Is Active</label>
                <input type="checkbox" name="is_active" value="{{old('name')}}" {{ old('is_active') == true ? checked: '' }}/>
            </div>
            <div class="mt-8 mb-2 flex justify-end">
                <button type="submit" class="bg-blue-700 text-cyan-50 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2
                hover:bg-blue-900">Save</button>
            </div>
        </form>
    </div> 
</body>
</html>