<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xBank Online Banking</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans leading-normal tracking-normal bg-gray-100">
    <!-- Header -->
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex items-center shrink-0">
                        <a href="/">
                            <x-application-logo class="block w-auto fill-current text-red-700 h-9" />
                        </a>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="flex gap-16 text-sm font-semibold text-gray-700 uppercase">
                    <a href="{{ route('login') }}" class="hover:text-red-600">User</a>
                    <a href="{{ route('cashier.login') }}" class="hover:text-red-600">Cashier</a>
                    <a href="{{ route('admin.login') }}" class="hover:text-red-600">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="flex items-center h-full mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-1/2 mt-16">
                <div class="text-5xl font-extrabold">
                    <div>The Next</div>
                    <div class="my-5 text-transparent bg-gradient-to-r from-red-600 to-red-400 bg-clip-text">Generation
                    </div>
                    <div>Banking Software</div>
                </div>

                <div class="pr-10 mt-6 text-gray-800">
                    A blockchain implementation of the Zenith Bank internet application.
                    <br><br>
                    Illustrating the security of saving transaction information on the blockchain.
                </div>

                <div class="mt-10">
                    <a href="{{ route('register') }}"
                        class="px-16 py-4 font-bold text-white rounded-full bg-red-700">Register</a>
                </div>
            </div>

            <div class="w-1/2 mt-16">
                <svg viewBox="0 0 762.08 762.08"><rect width="762.08" height="762.08" fill="#ffffff" id="bg" class="bg"></rect><g><g transform="translate(0.00,
                                0.00) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(76.21,
                                0.00) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(0.00,
                                76.21) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(76.21,
                                76.21) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(228.62,
                                0.00) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(152.42,
                                76.21) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(304.83,
                                0.00) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(381.04,
                                0.00) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(304.83,
                                76.21) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(457.25,
                                0.00) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(457.25,
                                76.21) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(609.66,
                                0.00) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(685.87,
                                76.21) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g></g><g><g transform="translate(76.21,
                                152.42) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(0.00,
                                228.62) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(152.42,
                                152.42) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(228.62,
                                152.42) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(304.83,
                                152.42) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(381.04,
                                152.42) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(304.83,
                                228.62) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(381.04,
                                228.62) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(457.25,
                                152.42) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(533.46,
                                152.42) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(457.25,
                                228.62) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(609.66,
                                152.42) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(685.87,
                                152.42) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g></g><g><g transform="translate(0.00,
                                304.83) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(76.21,
                                304.83) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(228.62,
                                304.83) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(152.42,
                                381.04) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(304.83,
                                304.83) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(381.04,
                                304.83) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(304.83,
                                381.04) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(457.25,
                                304.83) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(457.25,
                                381.04) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(609.66,
                                304.83) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(609.66,
                                381.04) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(685.87,
                                381.04) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g></g><g><g transform="translate(0.00,
                                457.25) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(76.21,
                                457.25) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(152.42,
                                457.25) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(228.62,
                                457.25) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(152.42,
                                533.46) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(381.04,
                                457.25) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(304.83,
                                533.46) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g><g transform="translate(457.25,
                                457.25) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(457.25,
                                533.46) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(609.66,
                                457.25) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(685.87,
                                457.25) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(609.66,
                                533.46) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g></g><g><g transform="translate(0.00,
                                609.66) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(76.21,
                                609.66) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(0.00,
                                685.87) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(76.21,
                                685.87) rotate(180, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(152.42,
                                609.66) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(228.62,
                                609.66) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(152.42,
                                685.87) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(304.83,
                                609.66) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(381.04,
                                609.66) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(304.83,
                                685.87) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(533.46,
                                609.66) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(533.46,
                                685.87) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M100,100A50,50,0,0,0,0,100Z" fill="#959595"></path></svg></g><g transform="translate(609.66,
                                609.66) rotate(90, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100a50,50,0,1,1,50-50v50Z" fill="#8c3434"></path></svg></g><g transform="translate(685.87,
                                609.66) rotate(270, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><circle cx="50" cy="50" r="50" fill="#ed8877"></circle></svg></g><g transform="translate(609.66,
                                685.87) rotate(0, 38.104, 38.104)"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 100 100" width="76.208" height="76.208"><path d="M50,100h0A50,50,0,0,1,0,50V0H100V50A50,50,0,0,1,50,100Z" fill="#f20000"></path></svg></g></g></svg>
            </div>
        </div>
    </main>

</body>
