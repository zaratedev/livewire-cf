<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
                        <form class="flex items-center flex-col py-6">
                            <div class="flex items-center xl:justify-start justify-center md:flex-row flex-col">
                                <div class="relative flex items-center">
                                    <input id="avatar" name="avatar" ref="avatar" type="file"
                                        class="w-full opacity-0 absolute bottom-0 left-0 right-0 top-0 cursor-pointer z-10"
                                        accept="image/jpeg, image/png">
                                    <div
                                        class="bg-gray-800 rounded-full absolute bottom-0 right-0 flex items-center justify-center flex-shrink-0 h-7 w-7 m-1 z-1">
                                        <svg class="text-white w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 471 379">
                                            <path fill="currentColor"
                                                d="M410.9 115.26h-48.1l-26.56-40.09c-10-15-27.56-24.05-45.6-24.05H180.4c-18 0-35.58 9-45.6 24.05l-26.56 40.09h-48.1A55 55 0 005 170.38V364.8a55 55 0 0055.12 55.12H410.9A55 55 0 00466 364.8V170.38a55 55 0 00-55.1-55.12zM235.52 374.82a124.25 124.25 0 01-124.27-124.27c0-68.65 55.62-123.77 124.27-123.77a124.25 124.25 0 01124.27 124.27c0 68.15-55.62 123.77-124.27 123.77zm168.37-181.89h-22.05a16.3 16.3 0 010-32.57h20a16.26 16.26 0 0117 15.53 15.87 15.87 0 01-14.95 17.04z"
                                                transform="translate(-.02 -46.12)" />
                                            <path fill="currentColor"
                                                d="M235.52 181.9a69.29 69.29 0 00-69.15 69.15c0 38.09 31.07 68.65 69.15 68.65a69.29 69.29 0 0069.15-69.15c0-38.08-31.07-68.65-69.15-68.65z"
                                                transform="translate(-.02 -46.12)" />
                                        </svg>
                                    </div>
                                    <img src="{{ asset('images/cody.jpg') }}" id="avatar-user"
                                        class="flex-shrink-0 object-cover w-32 h-32 rounded-full"
                                        alt="Avatar de usuario">
                                </div>
                            </div>
                        </form>

                        <div class="py-2 flex justify-center">
                            <label for="name" class="text-medium">{{ Auth::user()->name }}</label>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <form>
                                    <label for="name"
                                        class="text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                                        <span class="text-gray-500">Name</span>
                                        <a href="#"
                                            class="text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3">
                                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z">
                                                </path>
                                            </svg>
                                        </a>
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </form>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    <span class="text-gray-500">Email address</span>
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="pointer-events-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <form>
                                    <label for="phone"
                                        class="text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                                        <span class="text-gray-500">Phone</span>
                                        <a href="#"
                                            class="text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3">
                                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z">
                                                </path>
                                            </svg>
                                        </a>
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="phone" id="phone"
                                            autocomplete="off" maxlength="10"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </form>
                            </div>

                            <div class="sm:col-span-2">
                                <form>
                                    <label for="birthday"
                                        class="text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                                        <span class="text-gray-500">Birthday</span>
                                        <a href="#"
                                            class=" text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3">
                                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z">
                                                </path>
                                            </svg>
                                        </a>
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="birthday" id="datepicker" tabindex="-1"
                                            autocomplete="off"
                                            class="pointer-events-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </form>
                            </div>

                            <div class="sm:col-span-2">
                                <form>
                                    <label for="city"
                                        class="text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                                        <span class="text-gray-500">City</span>
                                        <a href="#"
                                            class="text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3">
                                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z">
                                                </path>
                                            </svg>
                                        </a>
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                            autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="mt-6 first:mt-0">
                            <label for="gender"
                                class="text-sm font-medium leading-6 text-gray-900 flex items-center justify-between sm:justify-start">
                                <span class="text-gray-500">Gender</span>
                            </label>
                            <fieldset class="mt-4">
                                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                    <div class="flex items-center">
                                        <input id="male"
                                            name="gender" value="male" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="male"
                                            class="ml-3 block text-sm font-medium leading-6 text-gray-900">Male</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="female"
                                            name="gender" value="female" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="female"
                                            class="ml-3 block text-sm font-medium leading-6 text-gray-900">Female</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other"
                                            name="gender" value="other" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="other"
                                            class="ml-3 block text-sm font-medium leading-6 text-gray-900">Other</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
