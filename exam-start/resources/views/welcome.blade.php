<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="container mx-auto">
        <h2 class="text-2xl font-semibold mb-4">User List</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">User Name</th>
                        <th class="py-3 px-6 text-left">User Email</th>
                        <th class="py-3 px-6 text-center">Product Name</th>
                        <th class="py-3 px-6 text-center">Product Price</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                @foreach ($datas as $d)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $d->id }}</td>
                        <td class="py-3 px-6 text-left">{{ $d->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $d->email }}</td>
                        <td class="py-3 px-6 text-left">{{ $d->product->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $d->product->price }}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<a href="/manyrelation">One to many Relation</a>
</body>

</html>
