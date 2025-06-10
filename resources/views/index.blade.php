<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para meu amor</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background: linear-gradient(to right, #fce7f3, #ede9fe);
        }
    </style>
</head>


<body class="flex flex-col items-center justify-center w-full text-center px-4">

    <h1 class="text-slate-800 text-3xl">Feliz dia dos namorados!!!</h1>
    <p>toque no coração</p>
    <button onclick="toggleMusic()" id="playButton" class="m-4">
        <img src="{{ asset('heart.png') }}" alt="coração" class="max-h-20">
    </button>

        <img src="{{ asset('amorzinho/foto23.JPG') }}" alt="foto nossa"
        class="max-h-[380px] border-4 border-purple-500 border-b-4 rounded-2xl m-4">
        <p class="text-sm max-w-[286px]">
            Adoro esta foto, ela é espontânea e mostra como você me olha como se eu fosse
            algo incrivel, essa foto é a prova viva de que você me ama
        </p>

        <img src="{{ asset('assets/ena-joel-g.gif') }}" alt="">
    <!-- Áudio -->
    <audio id="musica" loop>
        <source src="{{ asset('planos.mp3') }}" type="audio/mpeg">
        Seu navegador não suporta áudio HTML5.
    </audio>

    <script>
        const audio = document.getElementById("musica");

        function toggleMusic() {
            if (audio.paused) {
                audio.play();
                console.log('play');
            } else {
                audio.pause();
                console.log('pause');
            }
        }
    </script>

</body>

</html>