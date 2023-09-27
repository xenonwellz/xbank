<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="h-full">
        <div class="flex h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="block w-1/4 pt-12 bg-white border-r" x-data={openModal:false}>
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

                    <div class="fixed top-0 left-0 z-50 w-full h-full bg-black/70" x-show="openModal">
                        <livewire:send-money />
                    </div>

                    <button class="relative flex p-3 overflow-hidden rounded-l-lg cursor-pointer hover:bg-sky-50/50"
                        x-on:click="openModal=true" href="#">
                        <div class="flex-shrink-0 w-8 text-sky-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>

                        </div>
                        Send Money
                    </button>
                </div>
            </div>
            <div class="w-3/4 min-h-[calc(100vh-67px)] px-4 py-12 bg-gray-200/70 overflow-scroll">

                <div class="grid grid-cols-4 gap-4">
                    <div class="p-4 bg-white rounded-lg">
                        <div class="flex justify-between">
                            <div
                                class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-sky-200 text-sky-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                                </svg>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </div>
                        <div class="pt-6 pb-3 text-lg font-semibold text-gray-500">
                            Balance
                        </div>
                        <livewire:balance />
                    </div>

                    <div class="p-4 bg-white rounded-lg">
                        <div class="flex justify-between">
                            <div
                                class="inline-flex items-center justify-center w-10 h-10 rounded-lg bg-sky-200 text-sky-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>

                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </div>
                        <div class="pt-3 pb-2 text-lg font-semibold text-gray-500">
                            Card Balance
                        </div>
                        <div class="font-extrabold text-yellow-500">
                            Under active development
                        </div>
                    </div>

                    <div class="col-span-2 p-4 font-semibold text-white rounded-lg bg-sky-600">
                        <h2>
                            Account Information
                        </h2>
                        <div class="p-2 mt-4 rounded-lg">
                            <div class="flex justify-between">
                                <div>Account Number:</div>
                                <div>{{ auth()->user()->account_number }}</div>
                            </div>
                            <div class="flex justify-between">
                                <div>Bank Name:</div>
                                <div>xBank</div>
                            </div>
                            <div class="flex justify-between">
                                <div>Account Name:</div>
                                <div>{{ auth()->user()->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <livewire:transaction-history />
            </div>
        </div>
    </div>
</x-app-layout>
