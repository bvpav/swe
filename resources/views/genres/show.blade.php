<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $genre->name }}
            </h2>
            <div class="flex items-center gap-4">
                <a href="{{ route('genres.edit', $genre) }}" 
                   class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    {{ __('Edit') }}
                </a>
                <form action="{{ route('genres.destroy', $genre) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                            onclick="return confirm('Are you sure you want to delete this genre?')">
                        {{ __('Delete') }}
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">
                            {{ __('Description') }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            {{ $genre->description }}
                        </p>
                    </div>

                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                        {{ __('Movies in this genre') }}
                    </h3>

                    @foreach ($genre->movies as $movie)
                        <div class="mb-4">
                            <a href="{{ route('movies.show', $movie->id) }}">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300">
                                    {{ $movie->title }}
                                </h2>
                            </a>
                        </div>
                    @endforeach

                    <div class="mt-6">
                        <a href="{{ route('genres.index') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                            {{ __('Back to Genres') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>