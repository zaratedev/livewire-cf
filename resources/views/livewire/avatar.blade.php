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

    <div class="py-2 flex justify-center" x-data="{name: '{{ Auth::user()->name }}'}" x-on:updated-name.window="name = $event.detail.name">
        <label for="name" class="text-medium" x-text="name"></label>
    </div>
</div>