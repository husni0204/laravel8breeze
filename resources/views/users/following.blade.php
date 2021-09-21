<x-app-layout>

    <div class="border-b -mt-8 py-24">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="rounded-full w-16 h-16 border-2 border-blue-500 p-1" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
                </div>
                <div>
                    <h1>{{ $user->name }}</h1>
                    <div class="text-sm text-gray-500">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>   
        </x-container>
       
    </div>

    <x-statistic :user="$user"/>

    <x-container>
        <div class="grid grid-cols-3 gap-5">
            <x-following :users="$follows"></x-following>
        </div>
    </x-container>

</x-app-layout>