<x-app-layout>
    <div class=" min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class=" text-5xl font-bold">Tickets</h1>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-green-500 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            @if (count($tickets) > 0)
                @foreach ($tickets as $ticket)
                    <a href="" class=" flex justify-between p-4 bg-gray-200  text-lg font-bold rounded-lg">
                        <div>{{ $ticket->title }}</div>
                        <div>{{ $ticket->created_at->diffForHumans() }}</div>
                    </a>
                    <br>
                @endforeach
            @else
                <h1>there is no ticket</h1>
            @endif
        </div>
    </div>
</x-app-layout>
