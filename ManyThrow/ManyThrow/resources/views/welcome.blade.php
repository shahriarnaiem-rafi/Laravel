<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-5 border-b">ID</th>
                        <th class="py-3 px-5 border-b">Name</th>
                        <th class="py-3 px-5 border-b">Car</th>
                        <th class="py-3 px-5 border-b">Car Owner</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-5 border-b text-center">{{ $data->id }}</td>
                        <td class="py-3 px-5 border-b">{{ $data->name }}</td>


                        <td class="py-3 px-5 border-b text-center">
                            @foreach ($data->car as $d)
                            {{ $d->model }} <br>
                            @endforeach

                        </td>
                        <td class="py-3 px-5 border-b text-center">
                            @foreach ($data->carOwner as $d)
                            {{ $d->name }} <br>
                            @endforeach

                        </td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>