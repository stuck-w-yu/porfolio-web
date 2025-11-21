<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Wahyu Firmansyah</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom CSS untuk Blob Shape jika ingin persis */
        .blob-shape {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }
        /* Pattern background sederhana */
        .bg-pattern {
            background: linear-gradient(135deg, #FFC0CB 25%, #FFCC80 25%, #FFCC80 50%, #87CEEB 50%, #87CEEB 75%, #FFC0CB 75%);
            background-size: 100% 100%; 
        }
    </style>
</head>
<body class="bg-pattern min-h-screen p-4 md:p-10 flex flex-col items-center gap-10 font-display overflow-x-hidden">

    <div class="relative w-full max-w-2xl">
        <div class="absolute top-4 left-4 w-full h-full bg-retro-shadow border-2 border-black z-0"></div>
        
        <div class="relative bg-retro-bg border-2 border-black z-10 p-6 md:p-8">
            
            <div class="flex justify-between items-center mb-6 border-b-2 border-transparent pb-2">
                <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white">
                    <span class="text-xs font-bold"><></span>
                </div>

                <div class="flex gap-2 items-center">
                    <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div class="h-8 w-24 border-2 border-black bg-white"></div>
                    <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white hover:bg-red-500 cursor-pointer hover:text-white transition">
                        <span class="font-bold">X</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-6 relative">
                <div class="absolute -left-12 -top-10 w-40 h-40 bg-retro-blue blob-shape border-2 border-transparent md:w-48 md:h-48 z-20 hidden md:block"></div>
                <div class="w-32 h-32 bg-retro-blue blob-shape md:hidden self-center mb-4"></div>

                <div class="flex-1 md:pl-40 z-30">
                    <h1 class="text-2xl md:text-3xl font-bold mb-4">Halo, Aku Wahyu Firmansyah</h1>
                    <p class="text-lg font-medium leading-relaxed">
                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full max-w-2xl mt-8">
        <div class="absolute top-4 -right-4 w-full h-full bg-retro-shadow border-2 border-black z-0"></div>

        <div class="relative bg-retro-bg border-2 border-black z-10 p-6 md:p-8">
            
            <div class="flex justify-end gap-2 items-center mb-8">
                <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="h-8 w-24 border-2 border-black bg-white"></div>
                <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white cursor-pointer">
                    <span class="font-bold">X</span>
                </div>
            </div>

            <h2 class="text-center text-4xl md:text-5xl font-bold text-retro-red mb-10 tracking-wide">MY PROJECT</h2>

            <div class="relative mb-12">
                <div class="absolute top-2 right-[-10px] w-full h-full bg-retro-red border-2 border-black z-0"></div>
                
                <div class="relative bg-retro-orange border-2 border-black z-10 p-4 flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/3 h-32 bg-gray-300 border-2 border-transparent"></div>
                    
                    <div class="flex-1 text-retro-red">
                        <h3 class="text-2xl font-bold mb-1">PROJECT 1</h3>
                        <p class="text-xs font-bold leading-tight">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita minus quis sint suscipit, eum temporibus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute top-2 right-[-10px] w-full h-full bg-retro-red border-2 border-black z-0"></div>
                
                <div class="relative bg-retro-orange border-2 border-black z-10 p-4 flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/3 h-32 bg-gray-300 border-2 border-transparent"></div>
                    <div class="flex-1 text-retro-red">
                        <h3 class="text-2xl font-bold mb-1">PROJECT 1</h3>
                        <p class="text-xs font-bold leading-tight">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita minus quis sint suscipit, eum temporibus.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>