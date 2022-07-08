<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-white text-gray-800 border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://www.uzabase.com/images/about-us/seven-values-infography-05_pc.png"
                        class="mr-1 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">VLMS</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <div class="pt-6">

        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">puliyankulam fuel stations</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Vechile Line Monitoring System</h1>
                <p class="leading-normal capitalize text-2xl mb-8">Please don't park your vehicles on the road!</p>



                <button onclick="goList()"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">See
                    Vehicles</button>

            </div>
            <!--Right Col-->
            {{-- <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="hero.png">
            </div> --}}

        </div>

    </div>
    <h3 class="text-center text-2xl mt-8 ">Powered by</h3>
    <div class="flex mt-10 mb-4 items-center justify-center">
        <a href="https://www.instagram.com/infocliq/">
            <div
                class="shadow shadow-md p-8 w-46 mr-2 cursor-pointer rounded-lg bg-white transition duration-300 ease-in-out hover:scale-105 hover:drop-shadow-2xl">
                <div class="-mb-6 mt-4 -translate-y-1/2 transform">
                    <img src="https://raw.githubusercontent.com/K-avin/VLMS/50f275b05d87cb3e0d10aac8efef4b90ed4cd4f4/version%202%20red%20back%20logo.svg"
                        alt="Kobe Bryant" title="Kobe Bryant" class="mx-auto h-14" />
                </div>
                <div class="text-center">
                    <h3 class="text-center text-4md font-bold">Infocliq</h3>
                    <span class="text-sm" style="font-size: 10px">Software Solutions</span>
                </div>
            </div>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100010843595266&sk=about_life_events">
            <div
                class="shadow shadow-md p-8 w-46 cursor-pointer rounded-lg bg-white transition duration-300 ease-in-out hover:scale-105 hover:drop-shadow-2xl">
                <div class="-mb-6 mt-4 -translate-y-1/2 transform">
                    <img src="https://github.com/K-avin/VLMS/blob/main/puradchi.png?raw=true" alt="Kobe Bryant"
                        title="Kobe Bryant" class="mx-auto h-14" />
                </div>
                <div class="text-center">
                    <h3 class="text-center text-4md font-bold">Puradchi</h3>
                    <span class="text-sm" style="font-size: 10px">Puradchi Sports Club</span>
                </div>
            </div>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        function goList() {
            window.location.href = "/list";
        }
    </script>
</body>

</html>
