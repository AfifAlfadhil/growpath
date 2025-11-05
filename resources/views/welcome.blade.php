<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GrowPath - Welcome</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

  <style>
    body {
      margin: 0;
      height: 100vh;
      width: 100vw;
      overflow: hidden;
      background-color: #D97642;
      will-change: transform;
    }

    .scene {
      position: relative;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .orange-panel {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #D97642;
      display: flex;
      justify-content: center;
      align-items: center;
      border-top-right-radius: 1rem;
      border-bottom-right-radius: 1rem;
      overflow: hidden;
      will-change: transform, width;
    }
 
    .orange-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #D97642;
      border-top-right-radius: 1rem;
      border-bottom-right-radius: 1rem;
      z-index: 1;
      will-change: width;
    }

    .branding {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: white;
      text-align: center;
      transform: translateX(0);
      will-change: transform;
    }

    .branding img {
      width: 16rem;
      height: 16rem;
      object-fit: contain;
      margin-bottom: 2rem;
      will-change: transform;
    }

    .white-panel {
      position: absolute;
      top: 0;
      right: -50%;
      width: 50%;
      height: 100%;
      background-color: #FFF8F0;
      will-change: transform;
    }
  </style>
</head>

<body>
  <div class="scene">
    <div class="orange-panel">
      <div class="orange-inner"></div>
      <div class="branding">
        <img src="{{ asset('images/GambarPot.png') }}" alt="GrowPath Logo" />
        <h1 class="text-6xl font-extrabold tracking-tight mb-3">GROWPATH</h1>
        <p class="text-2xl font-medium">Tumbuh setiap hari</p>
      </div>
    </div>

    <div class="white-panel"></div>
  </div>

  <script>
    gsap.ticker.fps(120);

    const tl = gsap.timeline({
      defaults: { duration: 0.45, ease: "power4.out" } 
    });

    tl.to(".branding", {
      x: "-22vw",
      duration: 0.45
    });

    tl.to(".white-panel", {
      x: "-100%",
      duration: 0.45
    }, "-=0.3");

    tl.to(".orange-inner", {
      width: "50%",
      duration: 0.4,
      ease: "power3.inOut"
    }, "-=0.35");

    //Redirect ke login
    tl.call(() => {
      setTimeout(() => {
        window.location.href = "{{ route('login') }}";
      }, 100);
    });
  </script>
</body>
</html>
