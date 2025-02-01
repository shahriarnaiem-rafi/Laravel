<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-100 p-10">

    <div class="container mx-auto">
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-5">
            <h1 class="text-3xl font-bold text-center mb-5">User Information</h1>
            <table class="table w-full border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="p-3 border">ID</th>
                        <th class="p-3 border">Name</th>
                        <th class="p-3 border">Contact</th>
                        <th class="p-3 border">Created At</th>
                        <th class="p-3 border">Updated At</th>
                        <th class="p-3 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3 border text-center">{{$data->id}}</td>
                        <td class="p-3 border text-center">{{$data->name}}</td>
                        <td class="p-3 border text-center">{{$data->contact}}</td>
                        <td class="p-3 border text-center">{{$data->created_at}}</td>
                        <td class="p-3 border text-center">{{$data->updated_at}}</td>
                        <td class="p-3 border text-center">
                            <form action="{{route('delete',$data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error btn-sm" type="submit">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
