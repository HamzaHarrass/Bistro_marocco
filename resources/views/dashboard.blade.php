<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div  class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button  class="btn btn-primary btn-sm" ><a href="{{route('addPlat')}}">Add Plat</a></button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Action</th>
                            </tr>
                         @foreach ($plats as $item)
                          <tr>
                            <th scope="row"><img src="{{ asset($item->image)}}" alt="" width="60" height="60" ></th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->prix}}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" >Edit</button>
                                <button class="btn btn-danger btn-sm" >Delete</button>
                          </tr>

                         @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
