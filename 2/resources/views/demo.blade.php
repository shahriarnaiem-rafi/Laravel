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
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">User Data Table</h2>
        <button><a href="{{route('create')}}">Create</a></button>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Create_at</th>
                        <th class="py-3 px-6 text-left">Updated_at</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($datas as $data )
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6">{{$data->id}}</td>
                        <td class="py-3 px-6">{{$data->name}}</td>
                        <td class="py-3 px-6">{{$data->email}}</td>
                        <td class="py-3 px-6">{{$data->created_at}}</td>
                        <td class="py-3 px-6">{{$data->updated_at}}</td>
                        <td class="p-3 border text-center">
                            <div class="btn-group">

                                <button><a href="{{route('edit',$data->id)}}">Edit</a></button>


                                <form action="{{route('delete',$data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-gost btn-sm" type="submit">Delete</button>
                                </form>
                            </div>


                        </td>

                    </tr>

                    @endforeach
                    <!-- Example Row -->


                </tbody>
            </table>
        </div>
    </div>

</body>

</html>