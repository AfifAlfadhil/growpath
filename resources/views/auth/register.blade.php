<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GrowPath - Register</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen w-screen overflow-hidden">
  <div class="grid grid-cols-1 lg:grid-cols-2 h-screen w-screen">

    <div class="bg-[#D97642] flex flex-col items-center justify-center text-white rounded-tr-[1rem] rounded-br-[1rem]">
      <div class="text-center">
        <img
          src="{{ asset('images/GambarPot.png') }}"
          alt="GrowPath Logo"
          class="w-64 h-64 object-contain mx-auto mb-8"
        />
        <h1 class="text-6xl font-extrabold mb-3 tracking-tight">GROWPATH</h1>
        <p class="text-2xl font-medium">Tumbuh setiap hari</p>
      </div>
    </div>

    <div class="bg-[#FFF8F0] flex flex-col justify-center px-12 lg:px-24">
      <div class="max-w-md w-full mx-auto">
        <h2 class="text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
          Buat akun barumu
        </h2>
        <p class="text-gray-700 text-lg mb-10">
          Sedikit lagi untuk memulai perjalanan kebiasaan baikmu!
        </p>

        <form method="POST" action="{{ route('register.post') }}" class="space-y-6">
          @csrf

          <div class="bg-[#FFE8D1] rounded-2xl px-6 py-4 flex items-center gap-4 border-2 border-transparent focus-within:border-[#D97642] transition-all">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <input
              type="text"
              name="username"
              placeholder="Username"
              required
              class="flex-1 bg-transparent outline-none text-gray-900 placeholder-gray-500 text-lg font-medium"
            />
          </div>

          <div class="bg-[#FFE8D1] rounded-2xl px-6 py-4 flex items-center gap-4 border-2 border-transparent focus-within:border-[#D97642] transition-all">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              class="flex-1 bg-transparent outline-none text-gray-900 placeholder-gray-500 text-lg font-medium"
            />
          </div>

          <div class="bg-[#FFE8D1] rounded-2xl px-6 py-4 flex items-center gap-4 border-2 border-transparent focus-within:border-[#D97642] transition-all">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <input
              type="password"
              name="password_confirmation"
              placeholder="Konfirmasi Password"
              required
              class="flex-1 bg-transparent outline-none text-gray-900 placeholder-gray-500 text-lg font-medium"
            />
          </div>

          <button
            type="submit"
            class="w-full bg-[#D97642] text-white font-bold text-xl py-5 rounded-2xl hover:bg-[#C66A3B] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-[1.02] active:scale-[0.98]"
          >
            Daftar
          </button>
        </form>

        <p class="text-center text-gray-700 mt-6 text-lg">
          Udah punya akun?
          <a href="{{ route('login') }}" class="text-[#D97642] font-semibold hover:underline">Masuk</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
