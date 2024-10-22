<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <header class="flex items-center justify-between w-full p-10">
        <div class="flex lg:justify-center lg:col-start-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 448 470"
                class="block w-auto text-gray-800 fill-current h-9">
                <path fill="#F53635"
                    d="M407.776 435v12.5c0 4.136 3.364 7.5 7.5 7.5h10c4.136 0 7.5-3.364 7.5-7.5V435h-25Z" />
                <path fill="#FAB43E" d="M432.776 135.813h-25v284.188h25V135.813Z" />
                <path fill="#FDF3C2"
                    d="M411.517 120.813h17.519l-8.76-21.071-8.759 21.071ZM125.224 160h155.105V85H125.224v75Zm22.5-60h110.105a7.5 7.5 0 0 1 7.5 7.5 7.5 7.5 0 0 1-7.5 7.5H147.724a7.5 7.5 0 0 1-7.5-7.5 7.5 7.5 0 0 1 7.5-7.5Zm0 30h110.105a7.5 7.5 0 0 1 7.5 7.5 7.5 7.5 0 0 1-7.5 7.5H147.724a7.5 7.5 0 0 1-7.5-7.5 7.5 7.5 0 0 1 7.5-7.5Z" />
                <path fill="#C40200"
                    d="M47.724 440a7.5 7.5 0 0 1-7.5-7.5v-60a7.5 7.5 0 0 1 7.5-7.5c.003 0 .003-15 .003-15a7.5 7.5 0 0 1-7.503-7.5v-305a7.5 7.5 0 0 1 7.5-7.5c.003 0 .003-15 .003-15H15.224v440h32.503s-.001-15-.003-15Z" />
                <path fill="#F53635"
                    d="M327.829 15H47.726v15a7.5 7.5 0 0 1 7.497 7.5v305a7.5 7.5 0 0 1-7.497 7.5v15a7.5 7.5 0 0 1 7.497 7.5v60a7.5 7.5 0 0 1-7.497 7.5v15h280.103c12.407 0 22.5-10.094 22.5-22.5v-395c0-12.406-10.093-22.5-22.5-22.5Zm-32.5 152.5a7.5 7.5 0 0 1-7.5 7.5H117.724a7.5 7.5 0 0 1-7.5-7.5v-90a7.5 7.5 0 0 1 7.5-7.5h170.105a7.5 7.5 0 0 1 7.5 7.5v90Z" />
                <path fill="#570100"
                    d="M327.829 0H7.724a7.5 7.5 0 0 0-7.5 7.5v455a7.5 7.5 0 0 0 7.5 7.5h320.105c20.678 0 37.5-16.822 37.5-37.5v-395c0-20.678-16.822-37.5-37.5-37.5Zm22.5 432.5c0 12.406-10.093 22.5-22.5 22.5H15.224V15h312.605c12.407 0 22.5 10.094 22.5 22.5v395Z" />
                <path fill="#570100"
                    d="M40.224 37.5v305a7.5 7.5 0 0 0 15 0v-305a7.5 7.5 0 0 0-15 0ZM40.224 372.5v60a7.5 7.5 0 0 0 15 0v-60a7.5 7.5 0 0 0-15 0ZM287.829 70H117.724a7.5 7.5 0 0 0-7.5 7.5v90a7.5 7.5 0 0 0 7.5 7.5h170.105a7.5 7.5 0 0 0 7.5-7.5v-90a7.5 7.5 0 0 0-7.5-7.5Zm-7.5 90H125.224V85h155.105v75Z" />
                <path fill="#570100"
                    d="M147.724 115h110.105a7.5 7.5 0 0 0 7.5-7.5 7.5 7.5 0 0 0-7.5-7.5H147.724a7.5 7.5 0 0 0-7.5 7.5 7.5 7.5 0 0 0 7.5 7.5ZM147.724 145h110.105a7.5 7.5 0 0 0 7.5-7.5 7.5 7.5 0 0 0-7.5-7.5H147.724a7.5 7.5 0 0 0-7.5 7.5 7.5 7.5 0 0 0 7.5 7.5ZM447.739 127.566c-.018-.184-.05-.365-.081-.545-.011-.061-.016-.122-.028-.183a7.624 7.624 0 0 0-.166-.662l-.013-.05a7.458 7.458 0 0 0-.28-.767l-19.969-48.034a7.5 7.5 0 0 0-13.85 0l-19.969 48.034c-.107.249-.2.505-.28.767l-.013.05a7.624 7.624 0 0 0-.166.662c-.012.061-.017.122-.028.183-.031.18-.063.361-.081.545a7.443 7.443 0 0 0-.038.747V447.5c0 12.406 10.093 22.5 22.5 22.5h10c12.407 0 22.5-10.094 22.5-22.5V128.313a8.07 8.07 0 0 0-.038-.747ZM425.276 455h-10c-4.136 0-7.5-3.364-7.5-7.5V435h25v12.5c0 4.136-3.364 7.5-7.5 7.5Zm7.5-319.187V420h-25V135.813h25Zm-21.259-15 8.76-21.07 8.76 21.07h-17.52Z" />
            </svg>
        </div>
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </header>
    <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


        <div class="flex flex-col items-center justify-center p-6 mx-auto space-y-4 text-center max-w-7xl lg:p-8">
            <x-application-logo class="w-24 h-24 fill-current text-primary" />
            {{-- <x-button primary xl href="{{ route('register') }}">Get Started</x-button> --}}

            <x-button class="text-white bg-primary bg-primary-700" href="{{ route('register') }}">Get Started</x-button>

        </div>
    </div>
</body>

</html>
