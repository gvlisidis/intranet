<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-color">
<div> <!-- main content -->
    <div class="flex justify-end bg-orange-color"> <!-- top bar - social media -->
        <div class="flex mr-20 py-4 items-center">
            <div class="mr-6"> <!-- twitter icon -->
                <img src="{{ asset('img/twitter-icon.svg') }}" alt="twitter" class="h-7">
            </div>
            <div class="mr-6"> <!-- linkedin icon -->
                <img src="{{ asset('img/linkedin-svg.svg') }}" alt="linkedin" class="h-7">
            </div>
            <div class="mr-6"> <!-- youtube icon -->
                <img src="{{ asset('img/youtube-svg.svg') }}" alt="youtube" class="h-7">
            </div>
            <div class="flex flex-col"> <!-- Stock price -->
                <div class="flex my-0"> <!-- number -->
                    <span class="text-blue-color text-xl font-bold mr-2">29.69</span>
                    <span class="text-xxs text-green-color font-bold pt-0">+1.40(+4.95%)</span>
                </div>
                <span class="text-xxs text-green-color">September 27 4:00PM EST</span>
            </div>
        </div>
    </div>

    <div class="flex justify-between bg-white border-b-4 border-b-orange-color py-2"> <!-- Logo and main menu -->
        <div class="w-52 ml-10 items-center">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div class="flex mr-12 items-center">
            <div class="uppercase text-xl text-blue-color-2 font-bold mr-20">Jump To</div>
            <div class="uppercase text-xl text-blue-color-2 font-bold mr-20">Help & FAQS</div>
            <div class="uppercase text-xl text-blue-color-2 font-bold mr-20">ADCT Locations</div>
            <div class="flex flex-col items-center">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-12 h-12 rounded-full">
                <span class="uppercase text-black-color text-xxs font-semibold">Welcome Chris</span>
            </div>
        </div>
    </div>

    <div> <!-- central content -->
        <div class="max-w-custom flex flex-col justify-center"> <!-- left-area -->
            <div> <!-- image -->
                <img src="{{ asset('img/main-left-image-top.png') }}" alt="image">
            </div>
            <div class="w-1134 bg-gray-200">
                <div class="w-964 flex justify-center">
                    <div class="grid grid-cols-3 gap-y-36 gap-x-44 py-22 mt-4"> <!-- tiles area -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Directory</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Inter-Action</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Human Resources</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Library</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Our Company</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/notes.png') }}" alt="notes" class="h-24">
                            <span class="text-xl font-bold mt-10">Everyday Toolbox</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-around bg-white py-8 shadow-dialog">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales ops.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-bold mt-4">Sales Ops</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales ops.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-bold mt-4">L&D</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales ops.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-bold mt-4">IT</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales ops.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-bold mt-4">Compliance</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales ops.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-bold mt-4">All Departments</span>
                    </div>
                </div>
            </div>

        </div>

        <div class=""> <!-- right area -->
            <div> <!-- carousel -->
            </div>

            <div> <!-- company news -->
            </div>

            <div> <!-- industry round up -->
            </div>

            <div> <!-- hotline, adverse, roadmap -->
                <div> <!-- hotline -->
                </div>

                <div> <!-- adverse -->
                </div>

                <div> <!-- roadmap -->
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-between p-8"> <!-- footer -->
        <div class="uppercase text-blue-color text-sm font-bold">Privacy and cookie policy</div>
        <div class="font-bold text-lg">Go to: adctherapeutics.com</div>
    </div>

</div>
</body>
</html>
