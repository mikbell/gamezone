<div wire:init="load" class="w-full mr-0 lg:mr-32 lg:w-3/4"><!-- Recently Reviewed -->
    <h2 class="font-semibold text-blue-500 uppercase trackinkg-wide">
        Recently Reviewed
    </h2>

    <div class="mt-8 space-y-12">
        @forelse ($recentlyReviewed as $game)
            <div class="flex p-6 bg-gray-800 rounded-lg shadow-md"> <!-- Game -->
                <div class="relative flex-none">
                    <a href="{{ route('games.show', $game['slug']) }}">
                        <img src="{{ $game['coverImageUrl'] }}"
                            class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>

                    @if ($game['rating'])
                        <div class="absolute bottom-0 right-0 w-16 h-16 -mb-5 -mr-5 bg-gray-900 rounded-full">
                            <div class="flex items-center justify-center h-full text-xs font-semibold">
                                {{ $game['rating'] }}
                            </div>
                        </div>
                    @endif
                </div>

                <div class="ml-8">
                    <a href="#"
                        class="block text-base font-semibold leading-tight hover:text-gray-400">{{ $game['name'] }}</a>
                    <div class="mt-1 text-gray-400">
                        {{ $game['platforms'] }}
                    </div>
                    <p class="hidden mt-6 text-gray-400 lg:block">
                        {{ $game['summary'] }}
                    </p>
                </div>
            </div> <!-- End Game -->
        @empty
            @foreach (range(1, 3) as $game)
                <div class="flex p-6 bg-gray-800 rounded-lg shadow-md"> <!-- Game -->
                    <div class="relative flex-none">
                        <div class="w-64 bg-gray-600 h-96"></div>
                    </div>

                    <div class="ml-8">
                        <div
                            class="block text-base leading-tight text-transparent bg-gray-600 rounded selection:hidden">
                            Game
                            Title</div>
                        <div
                            class="inline-block mt-1 leading-tight text-transparent bg-gray-600 rounded selection:hidden">
                            platforms
                        </div>
                        <p class="hidden mt-6 text-transparent bg-gray-600 rounded lg:block selection:hidden">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi quos tempora nostrum
                            amet velit atque numquam. Modi, mollitia. Iste laudantium, ut deserunt distinctio eaque
                            dolore expedita repellat laboriosam totam minima, nostrum sit ducimus maiores necessitatibus
                            commodi, est vel doloribus praesentium reiciendis quam quo. Eos voluptas quaerat saepe animi
                            accusantium!
                        </p>
                    </div>
                </div> <!-- End Game -->
            @endforeach
        @endforelse
    </div>
</div><!-- End Recently Reviewed -->
