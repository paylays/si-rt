<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card Tengah | Web RT 36</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/icons.css', 'resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body class="bg-white min-h-screen flex items-center justify-center">

    <div class="lg:col-span-2 max-w-md px-4">
        <div class="bg-white border rounded-xl shadow-sm sm:flex">
            <div class="flex-shrink-0 relative w-full rounded-t-xl overflow-hidden pt-[40%] sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-xs">
                <img class="size-full absolute top-0 start-0 object-cover" src="/images/small/img-4.jpg" alt="Image Description">
            </div>
            <div class="flex flex-wrap">
                <div class="p-4 flex flex-col h-full sm:p-7">
                    <h3 class="text-lg font-bold text-gray-800">
                        Welcome to SI-RT
                    </h3>
                    <p class="mt-1 text-gray-500">
                      Halo warga! Yuk jelajahi web RT 36 — administrasi surat mudah dan kabar terbaru yang nggak boleh ketinggalan 😎📢
                    </p>
                    <div class="mt-5 sm:mt-auto">
                        <a class="mt-2 btn bg-primary text-white" href="{{ route('login') }}">
                            Masuk ke Sistem
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
