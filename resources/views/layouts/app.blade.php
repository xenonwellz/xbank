<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
    @livewireScripts()
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="border-b">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main class="h-full">
            {{ $slot }}
        </main>
    </div>

    {{-- <script>
        window.addEventListener('load', function() {
            let patientData = {
                type: 'line',
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                            labels: {
                                font: {
                                    family: 'Averta',
                                    weight: 'bold',
                                    size: 14
                                }
                            }
                        },
                    },
                    scales: {
                        y: {
                            grid: {
                                borderDash: [5, 2],
                                drawBorder: false,
                            },
                            ticks: {
                                fontFamily: "Averta",
                                padding: 20,
                                min: 40,
                                max: 100,
                                stepSize: 20,
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false,
                            },
                        },
                    }
                },
                data: {
                    labels: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat", "Sun"],
                    datasets: [{
                        radius: 0,
                        data: [65, 59, 80, 81, 56, 55, 90],
                        fill: 'origin',
                        borderWidth: 0.8,
                        backgroundColor: 'rgb(30, 66, 159, 0.3)',
                        borderColor: 'rgb(30, 66, 159)',
                        tension: 0.4
                    }],
                }
            };
            let patients = document.getElementById("myChart").getContext("2d");
            new Chart(patients, patientData);
        });
    </script> --}}
</body>

</html>
