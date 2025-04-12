<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Authero - Tailwind CSS 3 Authentication Page HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Authero - Tailwind CSS 3 Authentication Page HTML Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Tabler Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <!-- stylesheet -->
    <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <section class="bg-white">
        <div class="flex items-center justify-center px-4 py-7 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
            <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                <a href="#"
                    class="text-3xl font-bold text-gray-900 mb-6 block first-letter:text-sky-500">Authero</a>
                <h2 class="text-2xl font-bold leading-tight text-black">Sign up</h2>
                <p class="mt-2 text-base text-gray-600">Already have an account?
                    <a href="{{ route('login') }}" title=""
                        class="font-medium text-sky-600 transition-all duration-200 hover:text-sky-700 focus:text-sky-700 hover:underline">Sign in</a>
                </p>

                <form class="mt-8" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="space-y-5">
                        <div>
                            <label for="nik" class="text-base font-medium text-gray-900"> Nomor Induk Kependudukan (NIK) </label>
                            <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="ti ti-id text-xl"></i>
                                </div>

                                <input type="text" name="nik" id="nik" placeholder="Masukkan NIK Anda"
                                    class="block w-full py-4 ps-10 pe-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-sky-600 focus:bg-white caret-sky-600" />
                            </div>
                        </div>

                        <div>
                            <label for="name" class="text-base font-medium text-gray-900"> Nama </label>
                            <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="ti ti-user text-xl"></i>
                                </div>

                                <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap Anda"
                                    class="block w-full py-4 ps-10 pe-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-sky-600 focus:bg-white caret-sky-600" />
                            </div>
                        </div>

                        <div>
                            <label for="nomor_telepon" class="text-base font-medium text-gray-900"> Nomor Telepon </label>
                            <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="ti ti-phone text-xl"></i>
                                </div>

                                <input type="text" name="nomor_telepon" id="nomor_telepon" placeholder="Masukkan Nomor Telepon Anda"
                                    class="block w-full py-4 ps-10 pe-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-sky-600 focus:bg-white caret-sky-600" />
                            </div>
                        </div>

                        <div>
                            <label for="email" class="text-base font-medium text-gray-900"> Email </label>
                            <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="ti ti-at text-xl"></i>
                                </div>

                                <input type="email" name="email" id="email" placeholder="Masukkan Email Anda"
                                    class="block w-full py-4 ps-10 pe-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-sky-600 focus:bg-white caret-sky-600" />
                            </div>
                        </div>

                        <div>
                            <label for="password" class="text-base font-medium text-gray-900"> Password </label>
                            <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <i class="ti ti-fingerprint text-xl"></i>
                                </div>

                                <input type="password" name="password" id="password" placeholder="Masukkan Password yang Anda Inginkan"
                                    class="block w-full py-4 ps-10 pe-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-sky-600 focus:bg-white caret-sky-600" />
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-gradient-to-r from-fuchsia-600 to-sky-600 focus:outline-none hover:opacity-80 focus:opacity-80">
                                Sign up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Preline UI Js -->
    <script src="{{ asset('assets/plugins/preline/preline.js') }}"></script>

</body>

</html>