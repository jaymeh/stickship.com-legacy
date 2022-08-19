<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- JS -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="container bg-buttercup mx-auto">
        <div class="grid grid-cols-1 mt-4">
            <img class="col-span-1 max-h-36 mx-auto" src="img/logo.svg" />
        </div>
        <div class="container flex mt-8">
            <div class="w-2/3 bg-white rounded mx-auto">
                <div>
                    <p class="text-buttercup-800 p-4 text-center">Store opening soon...</p>
                </div>
                <div>
                    {{-- Form Goes Here --}}
                </div>
            </div>
        </div>
        <div class="container flex mt-4">
            <div class="w-2/3 mx-auto p-4 bg-white rounded">
                <p>Follow us on Social:</p>
                <div class="grid grid-cols-4 align-middle">
                    <div>
                        <a href="https://facebook.com/stickshipstore" target="_blank">
                            <span><img class="text-white inline max-h-8" src="img/facebook-round.svg" alt=""></span>
                            <span>Facebook</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://instagram.com/stickshipstore" target="_blank">
                            <span><img class="text-white inline max-h-8" src="img/instagram-round.svg" alt=""></span>
                            <span>Instagram</span>
                        </a>
                    </div>
                    <div>
                        <a href="mailto:info@stickship.com" target="_blank">
                            <span><img class="text-white inline max-h-8" src="img/email-round.svg" alt=""></span>
                            <span>Email</span>
                        </a>
                    </div>
                    <div>
                        <a href="mailto:info@stickship.com" target="_blank">
                            <span><img class="text-white inline max-h-8" src="img/link-round.svg" alt=""></span>
                            <span>Url</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
