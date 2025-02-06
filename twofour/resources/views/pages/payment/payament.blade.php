@extends('master')
@section('content')
<div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">User Data Table</h2>
        

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">note</th>
                        <th class="py-3 px-6 text-left">twofour id</th>
                        <th class="py-3 px-6 text-left">Create_at</th>
                        <th class="py-3 px-6 text-left">Updated_at</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($types as $type)
                    
                    @endforeach
                    <tr>
                    <th class="py-3 px-6 text-left">{{$type->id}}</th>
                    <th class="py-3 px-6 text-left">{{$type->name}}</th>
                    <th class="py-3 px-6 text-left">{{$type->note}}</th>
                    <th class="py-3 px-6 text-left">{{$type->twofour_id}}</th>
                 
                    <th class="py-3 px-6 text-left">{{$type->created_at}}</th>
                    <th class="py-3 px-6 text-left">{{$type->updated_at}}</th>
                        
                    </tr>


                </tbody>
            </table>
            
        </div>
    </div>


@endsection