<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Genres') }}
            <a href="{{ route('genres.create') }}" class="text-sm text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">Create a Genre</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @foreach ($genres as $genre)
                        <div class="mb-4">
                            <a href="{{ route('genres.show', $genre->id) }}">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300">
                                    {{ $genre->name }}
                                </h2>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>