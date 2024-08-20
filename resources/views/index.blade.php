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
    <div class="p-10 w-full justify-end px-96">
        <div class="flex justify-end flex-col">
            <a href="{{ url('category/create') }}"
                class="text-white w-fit bg-purple-700 text-lg rounded-xl pl-5 pr-5 pt-2 pb-2 hover:bg-purple-800">Add</a>
        </div>
        <div class="mt-4">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                            Category
                            Name</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                            Description</th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-900 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                {{ $item->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                {{ $item->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                {{ $item->is_active == true ? 'Active' : 'Inactive' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                <a href="{{ url('category/' . $item->id . '/edit') }}"
                                    class="bg-sky-200 font-bold px-3 py-1 rounded-md m-1">Edit</a>
                                <a href="{{ url('category/' . $item->id . '/edit') }}"
                                    class="bg-red-200 font-bold px-3 py-1 rounded-md m-1">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>
