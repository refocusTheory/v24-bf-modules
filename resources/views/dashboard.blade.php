<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
              <!--   <iframe src="https://mosaic.brandflowr.app/event-directory/" frameborder="0" width="100%" height="1200px"></iframe> -->
                    <iframe src="https://davinci.brandflowr.app{{ $url }}" frameborder="0" width="100%" height="1200px"></iframe>
                    
            </div>
        </div>
    </div>
</x-app-layout>
