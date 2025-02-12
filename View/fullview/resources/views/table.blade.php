<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="overflow-x-auto">
        <h2 class="text-center p-4 text-xl font-semibold">User Table</h2>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <!-- head -->
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">#</th>
                    <th class="px-6 py-3 text-left">User Name</th>
                    <th class="px-6 py-3 text-left">Product</th>
                    <th class="px-6 py-3 text-left">Price</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($first as $data)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4">{{ $data->id }}</td>
                    <td class="px-6 py-4">{{ $data->name }}</td>
                    <td class="px-6 py-4">{{ $data->product->product_name}}</td>
                    <td class="px-6 py-4">{{ $data->product->price}}</td>
               
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>