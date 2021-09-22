<div class="border-b mb-5">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="flex">
                <a href="{{ route('profile', $user->username) }}" class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Status</div>
                    <div class="text-2xl">{{ $user->statuses->count() }}</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'following']) }}" class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Following</div>
                    <div class="text-2xl">{{ $user->follows->count() }}</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'follower']) }}" class="px-10 py-5 font-semibold text-center border-r border-l">
                    <div class="uppercase text-xs">Followers</div>
                    <div class="text-2xl">{{ $user->followers->count() }}</div>
                </a>
            </div>
            
            <div>
                @if(Auth::user()->isNot($user))
                <form action="{{ route('following.store', $user) }}" method="post">
                    @csrf
                    <x-button>
                        @if(Auth::user()->follows()->where('following_user_id', $user->id)->first())
                            UnFollow
                        @else
                            Follow
                        @endif
                    </x-button>
                </form>
                @else 
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-xl font-semibold text-sm text-white capitalize tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Edit Profile
                </a>
                @endif
            </div>
           
        </div>
    </x-container>
</div>