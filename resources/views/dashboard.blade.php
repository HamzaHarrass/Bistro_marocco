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
                    <button  class="btn btn-primary btn-sm" ><a href="{{route('plats.create')}}">Add Plat</a></button>
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
                                <button  type="submit"><a class="btn btn-primary btn-sm" href="{{ route('plats.show', $item->id)}}">SHOW</a></button>
                                <button  type="submit"><a class="btn btn-success btn-sm" href="{{ route('plats.edit', $item->id)}}">EDIT</a></button>

                               <form class="btn btn-danger btn-sm" action="{{route('plats.destroy', $item->id)}}" method="post">
                                @csrf
                                   @method('DELETE')
                                <button  type="submit" >DELETE</button>
                                </form>
                            </td>
                          </tr>

                         @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
