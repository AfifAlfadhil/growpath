<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - GrowPath</title>
    @vite(['resources\css\app.css'])
</head>
<body class="bg-[green-200] font-sans min-h-screen flex flex-col items-center">
    
    <!--Navbar-->
    <nav class="w-full bg-[#78A44C] text-white py-4 shadow-md flex justify-between items-center px-8">
        <h1 class="text-2xl font-bold">GROWPATH</h1>
        <ul class="flex items-center space-x-8">
            <li><a href="/" class="hover:underline">HOME</a></li>
            <li><a href="#" class="hover:underline">INVENTORY</a></li>
            <li><a href="#" class="hover:underline">MARKET</a></li>
            <li><a hret="#" class="hover:underline">LEADERBOARD</a></li>
            <li>
                <a href="/profile" class="bg-white text-green-700 px-4 py-2 rounded-lg font-semibold flex items-center space-x-2">
                    <span>PROFILE</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 0 0 1 7.5 0ZM4.5 19.5a8.25 8.25 0 0 1 15 0v.75H4.5v-.75Z" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <!--Profile Section-->
    <section class="mt-12 bg-[#fffdd0] p-8 rounded-2xl shadow-lg flex flex-col md:flex-row gap-8 w11/12 md:w-3/4 lg:w-2/3">
        <!--Left: Avatar-->
        <div class="flex flex-col items-center flex-1">
            <div class="flex items-center space-x-2 mb-4">
                <h2 class="text-2xl font-bold bg-green-700 text-white px-4 py-1 rounded-full">Username123</h2>
                <button class="p-2 text-green-800 hover:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487a2.25 2.25 0 0 1 3.182 3.182L7.125 20.586a4.5 4.5 0 0 1-1.591.995l-2.934.977.977-2.934a4.5 4.5 0 0 1 .995-1.591L16.862 4.487z" />
                    </svg>
                </button>
            </div>

            <div class="w-48 h-48 bg-gray-300 border-4 border-green-700 rounded-lg flex items-center justify-center text-gray-600">
                Avatar
            </div>

            <button class="mt-4 bg-green-700 text-white px-6 py-2 rounded-lg hover:bg-green-800">
                Edit Avatar
            </button>
        </div>

        <!--Right: Stats-->
        <div class="flex-1 bg-[#fffdd0] p-6 rounded-xl border border-green-700 text-lg">
            <p class="mb-2">level ..............................................................<span class="font-semibold">20</span></p>
            <p class="mb-2">exp earned .........................................................<span class="font-semibold">2040</span></p>
            <p class="mb-2">gold ...............................................................<span class="font-semibold">67000</span></p>
            <p class="mb-2">task cleared .......................................................<span class="font-semibold">17</span></p>
            <p class="mb-2">time played ........................................................<span class="font-semibold">264h 15m</span></p>

            <button class="bg-white border border-green-700 text-green-700 px-6 py-2 rounded-lg hover:bg-green-700 hover:text-white transition">
                Logout
            </button>
        </div>
    </section>
    
</body>
</html>