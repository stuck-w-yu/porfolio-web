<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Font Setup */
        .font-retro { font-family: 'Alfa Slab One', cursive; }
        .font-mono { font-family: 'Space Mono', monospace; }

        /* Background Diagonal Abstrak sesuai gambar */
        body {
            background: linear-gradient(120deg, 
                #87CEEB 0%, #87CEEB 30%, 
                #FFDAB9 30%, #FFDAB9 60%, 
                #FFC0CB 60%, #FFC0CB 85%,
                #87CEEB 85%);
            background-attachment: fixed;
            overflow: hidden; /* Supaya tidak ada scroll */
        }

        /* Efek Text Stroke untuk tulisan PORTOFOLIO */
        .text-stroke {
            -webkit-text-stroke: 2px black;
            color: #FFCC66; /* Warna oranye kekuningan */
            letter-spacing: 2px;
        }

        /* Utilitas Border Tebal */
        .border-thick { border: 3px solid black; }
    </style>
</head>
<body class="h-screen w-full flex items-center justify-center p-4">

    <div class="w-full max-w-5xl h-[85vh] flex border-thick shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] bg-white relative">

        <div class="w-1/4 bg-[#A8D5BA] border-r-2 border-black p-6 flex flex-col justify-between relative">
            
            <div class="space-y-6">
                <div class="w-10 h-8 bg-white border-2 border-black flex items-center justify-center shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    <i class="fas fa-code text-sm"></i>
                </div>
                
                <div>
                    <i class="fas fa-home text-2xl text-black opacity-80"></i>
                </div>
            </div>

            <div class="absolute top-1/2 left-6 transform -translate-y-1/2 space-y-4 font-mono text-lg">
                <div class="cursor-pointer hover:underline">Profile </div>
                <div class="cursor-pointer hover:underline">Project </div>
                <div class="cursor-pointer hover:underline">Contact </div>
            </div>
            
        </div>

        <div class="w-3/4 bg-[#FFF8E7] relative flex flex-col items-center justify-center">
            
            <div class="absolute top-6 left-6 right-6 flex justify-between items-start">
                <div class="w-10 h-10 border-2 border-black bg-transparent"></div>

                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white">
                        <i class="fas fa-search text-sm"></i>
                    </div>
                    <div class="w-32 h-8 border-2 border-black bg-[#FFF8E7]"></div>
                    <div class="w-8 h-8 border-2 border-black flex items-center justify-center bg-white font-bold cursor-pointer hover:bg-red-500 hover:text-white transition">
                        X
                    </div>
                </div>
            </div>

            <h1 class="font-retro text-6xl md:text-8xl text-stroke mb-12 select-none">
                PORTOFOLIO
            </h1>

            <a href="{{ route('home') }}" class="inline-block bg-[#F49AC2] px-8 py-2 border-thick shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] active:translate-x-1 active:translate-y-1 active:shadow-none transition-all cursor-pointer no-underline group">
                <span class="font-retro text-2xl text-[#00A86B] tracking-widest group-hover:text-white">
                    START
                </span>
            </a>

        </div>
    </div>

</body>
</html>