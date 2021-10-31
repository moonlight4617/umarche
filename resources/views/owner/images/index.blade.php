<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('info')" />
                    <div class="flex justify-end mb-4">
                        <button onclick="location.href='{{ route('owner.images.create')}}'" class="text-white bg-indigo-500 border-0 py-2 md:px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                    </div>
                    @if(isset($images))
                    <div class="flex flex-wrap">
                    @foreach ($images as $image)
                    <div class="w-1/4 p-4">
                    <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}">
                        <div class="border rounded-md p-4">
                        <div class="text-xl">{{ $image->title }}</div>
                        <x-thumbnail :filename="$image->filename" type="products"/>
                        </div>
                    </a>
                    </div>
                    @endforeach
                    </div>
                    {{ $images->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
