<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Vehicle') }}
        </h2>
    </x-slot>
    <!-- component -->
    <!--
    =======================================================================

    This is a working contact form. To receive email,
    Replace YOUR_ACCESS_KEY_HERE with your actual Access Key.

    Create Access Key here ? https://web3forms.com/

    Surjith S M (@surjithctly)
    =======================================================================
 -->


    <div class="flex items-center bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto">
            @if (session('status'))
                <h6 class="text-center text-green-600">{{ session('status') }}</h6>
            @endif
            @foreach ($errors->get('vehicleNumber') as $error)
                <span class="help-block">
                    <h6 class="text-center text-red-600">{{ $error }}</h6>
                </span>
            @endforeach
            <div class="max-w-md mx-auto bg-white p-5 rounded-md shadow-sm">
                <div class="">
                    <form action="{{ route('save-vehicle') }}" method="post" enctype="multipart/form-data"
                        id="form">
                        @csrf
                        {{-- <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                    <input type="hidden" name="subject" value="New Submission from Web3Forms"> --}}

                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Vehicle
                                Position</label>
                            <input value="000{{ $vehicle + 1 }}" hidden type="text" name="vehiclePosition"
                                id="name" required
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            <input value="000{{ $vehicle + 1 }}" disabled type="text" name="" id="name"
                                required
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Vehicle
                                Number / NIC</label>
                            <input type="text" name="vehicleNumber" id="name" placeholder="BEF 0202" required
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Vehicle
                                status</label>
                            <select name="staus" id="email" required
                                class="w-full max-w-none px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="w-full px-3 py-4 text-white bg-gray-800 rounded-md focus:bg-gray-600 focus:outline-none">Add
                                Vehicle</button>
                        </div>
                        <p class="text-base text-center text-gray-400" id="result">
                        </p>
                    </form>
                    <div class="mb-6">
                        <button onclick="goHome()" type=""
                            class="w-full border px-3 py-4 text-gray-800 bg-white rounded-md focus:bg-white focus:outline-none">View
                            List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
const form = document.getElementById('form');
const result = document.getElementById('result');

form.addEventListener('submit', function(e) {
    const formData = new FormData(form);
    e.preventDefault();
    var object = {};
    formData.forEach((value, key) => {
        object[key] = value
    });
    var json = JSON.stringify(object);
    result.innerHTML = "Please wait..."

    fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: json
        })
        .then(async (response) => {
            let json = await response.json();
            if (response.status == 200) {
                result.innerHTML = json.message;
                 result.classList.remove('text-gray-500');
                result.classList.add('text-green-500');
            } else {
                console.log(response);
                result.innerHTML = json.message;
                 result.classList.remove('text-gray-500');
                 result.classList.add('text-red-500');
            }
        })
        .catch(error => {
            console.log(error);
            result.innerHTML = "Something went wrong!";
        })
        .then(function() {
            form.reset();
            setTimeout(() => {
                result.style.display = "none"; 
            }, 5000);
        });
})
</script> --}}

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        function goHome() {
            window.location.href = "/";
        }
    </script>
</x-app-layout>
