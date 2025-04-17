<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-dcol mx-130 gap-4">
            <x-button outline :href="route('profile')"> 
                Update Profile
            </x-button>
            <x-button outline :href="route('links.create')"> 
                Create link
            </x-button>
            <x-button ghost :href="route('logout')"> 
                Logout
            </x-button>
        </div>
        <div class="text-center space-y-4 w-2/3">
            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm mb-6  opacity-80">{{ $user->description }}</div>
            <ul class="space-y-3 ">
                @foreach($links as $link)
                <li class="flex justify-center items-center gap-2">
                    @unless($loop->last)

                    <x-form :route="route('links.down', $link)" patch>
                        <x-button ghost>
                            <x-icons.arrow-down class="w-6 h-6" />
                        </x-button>
                    </x-form>
                    @else
                    <x-button disabled ghost> <x-icons.arrow-down class="w-6 h-6" /></x-button>

                    @endunless

                    @unless($loop->first)
                    <x-form :route="route('links.up', $link)" patch>
                        <x-button ghost>
                            <x-icons.arrow-up class="w-6 h-6" />
                        </x-button>
                    </x-form>
                    @else
                    <x-button disabled ghost> <x-icons.arrow-up class="w-6 h-6" /></x-button>
                    @endunless
                    <x-button class="" href="{{ route('links.edit', $link) }}" block outline info>
                        {{$link->name}}
                    </x-button>
                    <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Deseja mesmo deletar?')">
                        <x-button ghost>
                            <x-icons.trash class="w-6 h-6"/>
                        </x-button>
                    </x-form>

                </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>