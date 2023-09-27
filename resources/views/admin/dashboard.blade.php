<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="h-full">
        <div class="flex h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="block w-1/4 pt-6 bg-white border-r">
                <div class="flex flex-col w-full gap-4">
                    <a href="{{ route('dashboard') }}"
                        class="relative flex p-3 overflow-hidden rounded-l-lg cursor-pointer bg-sky-50" href="#">
                        <div class="flex-shrink-0 w-8 text-sky-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>

                        </div>
                        <span class="absolute top-0 w-2 h-full rounded-full bg-sky-800 -right-1"></span>
                        Dashboard
                    </a>

                </div>
            </div>
            <div class="w-3/4 h-[calc(100vh-67px)] px-4 bg-gray-200/70 overflow-scroll">
                <livewire:admin-transaction-history />
            </div>
        </div>
    </div>
</x-app-layout>
