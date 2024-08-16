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
        <a href="{{ url('category/create') }}" >
            <button class="text-white bg-purple-700 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2 hover:bg-purple-800" >Add</button>
        </a>
        </div>    
    </div>
</body>
</html>