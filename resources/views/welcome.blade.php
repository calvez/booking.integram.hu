<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gidrán Major</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            <div class="flex items-center justify-center p-12">
                <!-- Author: FormBold Team -->
                <div class="mx-auto w-full max-w-[550px] bg-white">
                    <form>
                        <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                            Foglalási adatok
                        </label>

                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Teljes név
                            </label>
                            <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                Telefonszám
                            </label>
                            <input type="text" name="phone" id="phone" placeholder="Telefonszám" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                E-mail cím
                            </label>
                            <input type="email" name="email" id="email" placeholder="e-mail cím" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Érkezési dátum
                                    </label>
                                    <input type="date" name="start_date" id="start_date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Idő
                                    </label>
                                    <input type="time" name="start_time" id="start_time" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Távozási dátum
                                    </label>
                                    <input type="date" name="end_date" id="end_date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Idő
                                    </label>
                                    <input type="time" name="end_time" id="end_time" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pt-3">
                            <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                                Szolgáltatások
                            </label>
                            <div class="-mx-3 flex flex-wrap">
                                <div class="mt-10 space-y-10">
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Kérjük válasszon szolgáltatást</legend>
                                        <div class="mt-6 space-y-6">
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input id="horse" name="horse" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">


                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="horse" class="font-medium text-gray-900">Lovaglás</label>
                                                    <p class="text-gray-500">A szolgáltatás ára</p>

                                                    <p class="text-gray-500">A szolgáltatás rövid leírása.</p>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input id="hinto" name="hinto" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">

                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="hinto" class="font-medium text-gray-900">Hintó</label>
                                                    <p class="text-gray-500">A szolgáltatás ára</p>

                                                    <p class="text-gray-500">A szolgáltatás rövid leírása.</p>
                                                </div>
                                            </div>
                                            <div class="relative flex gap-x-3">
                                                <div class="flex h-6 items-center">
                                                    <input id="egyeb" name="egyeb" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">


                                                </div>
                                                <div class="text-sm leading-6">
                                                    <label for="egyeb" class="font-medium text-gray-900">Egyéb szolg.</label>
                                                    <p class="text-gray-500">A szolgáltatás ára</p>

                                                    <p class="text-gray-500">A szolgáltatás rövid leírása.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>

                                </div>


                            </div>
                        </div>

                        <div class="mb-5 pt-3">
                            <label class="mb-5 block text-base font-semibold text-[#07074D] sm:text-xl">
                                Cím
                            </label>
                            <div class="-mx-3 flex flex-wrap">

                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <input type="text" name="postcode" id="postcode" placeholder="Irányítószám" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                    </div>
                                </div>


                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <input type="text" name="city" id="city" placeholder="Város" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>

                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <input type="text" name="street" id="street" placeholder="Utca" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <input type="text" name="hsz" id="hsz" placeholder="Házszám" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Foglalás és fizetés
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
