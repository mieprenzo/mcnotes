<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            .block-container {
                height: 64px;
                max-width: 600px;
                transform: translateX(-10%);
                width: 100%;

                display: flex;
                overflow: hidden;
            }

            .block-straight {
                flex-grow: 1;
                background-color: #fdd978;
                image-rendering: pixelated;
                /* straight edges on left, top, bottom */
            }

            .block-slope {
                width: 64px;
                height: 64px;
                background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" preserveAspectRatio="none"><polygon points="0,0 64,64 0,64" fill="%23fdd978"/></svg>');
                background-repeat: no-repeat;
                background-size: contain;
                image-rendering: pixelated;
                flex-shrink: 0;
            }

            @keyframes slideInFromLeft {
                0% {
                    transform: translateX(-100%);
                    opacity: 0;
                }
                60% {
                    transform: translateX(0%);
                    opacity: 1;
                }
                100% {
                    transform: translateX(-10%);
                }
            }

            .float-in {
                animation: slideInFromLeft 0.9s cubic-bezier(0.22, 1, 0.36, 1);
            }

        </style>
    </head>
<body class="flex w-screen h-screen bg-[#6e2f3b] font-['Karma_Future']">
    {{$slot}}
</body>
</html>
