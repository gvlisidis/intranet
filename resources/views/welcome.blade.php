<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-color">
<div class="flex flex-col min-h-screen flex-grow"> <!-- main content -->
    <div class="flex justify-end"> <!-- top bar - social media -->
        <div class="flex mr-20 py-4 items-center">
            <div class="mr-6"> <!-- twitter icon -->
                <img src="{{ asset('img/twitter-icon.svg') }}" alt="twitter" class="h-7">
            </div>
            <div class="mr-6"> <!-- linkedin icon -->
                <img src="{{ asset('img/linkedin-icon.png') }}" alt="linkedin" class="h-7">
            </div>
            <div class="mr-6"> <!-- youtube icon -->
                <img src="{{ asset('img/youtube-icon.png') }}" alt="youtube" class="h-7">
            </div>
            <div class="flex flex-col"> <!-- Stock price -->
                <div class="flex my-0"> <!-- number -->
                    <span class="text-blue-color text-xl font-adctBold mr-2">29.69</span>
                    <span class="text-xxs text-green-color font-adctBold pt-0">+1.40(+4.95%)</span>
                </div>
                <span class="text-xxs text-green-color font-adctLight">September 27 4:00PM EST</span>
            </div>
        </div>
    </div>

    <div class="flex justify-between bg-white border-b-4 border-b-orange-color py-2"> <!-- Logo and main menu -->
        <div class="w-52 ml-10 items-center">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div class="flex mr-12 items-center">
            <div class="uppercase text-xl text-blue-color font-adctBold mr-20">Jump To</div>
            <div class="uppercase text-xl text-blue-color font-adctBold mr-20">Help & FAQS</div>
            <div class="uppercase text-xl text-blue-color font-adctBold mr-20">ADCT Locations</div>
            <div class="flex flex-col items-center">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-12 h-12 rounded-full">
                <span class="uppercase text-black-color text-xxs font-adctBold">Welcome Chris</span>
            </div>
        </div>
    </div>

    <div> <!-- carousel -->
        <div class="carousel relative shadow-2xl bg-white">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0 h-44 min-h-0">
                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Slide 1</div>
                </div>

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0 h-44 min-h-0">
                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Slide 2</div>
                </div>

                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0 h-44 min-h-0">
                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div>
                </div>
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators list-none m-0 p-0 absolute bottom-1 text-center z-10 left-0 right-0">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>

            </div>
        </div>
    </div>

    <div> <!-- central content -->
        <div class="w-4/6 flex flex-col justify-center"> <!-- left-area -->
            <div class="bg-gray-200">
                <div class="flex justify-center mx-auto">
                    <div class="grid grid-cols-3 gap-y-36 gap-x-44 py-16"> <!-- tiles area -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/directory.png') }}" alt="directory" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Directory</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/interaction.png') }}" alt="inter action" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Inter-Action</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/human-resources@2x.png') }}" alt="human resources" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Human Resources</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/library@2x.png') }}" alt="library" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Library</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/our-company@2x.png') }}" alt="our company" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Our Company</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/everyday-toolbox@2x.png') }}" alt="everyday toolbox" class="h-24">
                            <span class="text-xl font-adctBold mt-10">Everyday Toolbox</span>
                        </div>
                    </div>
                </div>

                <div class="flex justify-around bg-white py-8 shadow-dialog">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/sales-ops@2x.png') }}" alt="sales ops" class="h-12">
                        <span class="text-lg font-adctBold mt-6">Sales Ops</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/L&D@2x.png') }}" alt="l&d" class="h-12">
                        <span class="text-lg font-adctBold mt-6">L&D</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/it@2x.png') }}" alt="iy" class="h-12">
                        <span class="text-lg font-adctBold mt-6">IT</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/compliance@2x.png') }}" alt="compliance" class="h-12">
                        <span class="text-lg font-adctBold mt-6">Compliance</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('img/all-departments@2x.png') }}" alt="all departments" class="h-12">
                        <span class="text-lg font-adctBold mt-6">All Departments</span>
                    </div>
                </div>
            </div>

        </div>

        <div class=""> <!-- right area -->
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

    <div class="flex justify-between p-8 bg-gray-400"> <!-- footer -->
        <div class="uppercase text-blue-color text-sm font-bold">Privacy and cookie policy</div>
        <div class="font-bold text-lg">Go to: adctherapeutics.com</div>
    </div>

</div>
</body>
</html>
