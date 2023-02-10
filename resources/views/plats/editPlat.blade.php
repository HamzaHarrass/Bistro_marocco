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
                    <form class="d-flex flex-column  m-5 w-50 m-auto mt-" action="{{ route('plats.update',$plat)}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <h4 class="">EDIT A Plat</h4>
                            <input  class="my-3" type="text" name="title"  value="{{ $plat->title }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <textarea  class="my-3" type="text" name="description" placeholder="description">
                                {{ $plat->description }}
                            </textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <input  class="my-3" type="text" name="prix" placeholder="prix"   value="{{ $plat->prix }}">
                            @error('prix')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <input  class="my-3" type="file" name="image" accept="image/*">
                            <input type="hidden" name="publisher" value="">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button class="btn btn-primary btn-sm">submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
