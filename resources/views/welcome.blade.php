        <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Para meu amor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="public/heart.png" type="image/x-icon" />
    <style>
      body {
        background: linear-gradient(to right, #fce7f3, #ede9fe);
      }
    </style>
  </head>

  <body class="">
    <div
      class="flex flex-col items-center justify-center w-full h-full text-center px-4 bg-purple-950"
    >
      <h1 class="text-slate-300 text-3xl mt-5">Feliz dia dos namorados!!!</h1>
      <p class="text-slate-300">toque no coração</p>
      <button
        onclick="toggleMusic()"
        id="playButton"
        class="m-4 hover:cursor-pointer"
      >
        <p class="text-slate-200 text-6xl">💖</p>
      </button>
      <div
        id="container"
        class="flex flex-col items-center justify-center text-center px-4 text-sm mb-2"
      ></div>
      <img src="{{ asset('alpino.jpeg') }}" alt="alpino" class="m-2" />
      <p class="text-slate-200 text-sm max-w-[286px]">
        Parabéns!!! Você ganhou uma barra de chocolate alpino! (Aproveite)
      </p>
      <img
        src="{{ asset('amorzinho/foto23.JPG') }}"
        alt="foto nossa"
        class="max-h-[380px] border-4 border-purple-500 border-b-4 rounded-2xl m-4"
      />
      <p class="text-slate-200 text-sm max-w-[286px]">
        Adoro esta foto, ela é espontânea e mostra como você me olha como se eu
        fosse algo incrivel, essa foto é a prova viva de que você me ama.
      </p>
      <h1 class="text-slate-300 mt-6">Oi meu amor</h1>
      <p class="text-slate-200 text-sm max-w-[286px] mb-4">
        Se você está lendo isso é por que eu não terminei o site :(, sinto muito
        meu amor, mas se você me der mais tempo eu consigo, tudo por você.
      </p>
      <h1 class="text-slate-300 mt-6">Olá amorzinho</h1>
      <p class="text-slate-200 text-sm max-w-[286px] mb-6">
        Espero que tenha gostado desse presente provavelmente inacabado, mas de
        coração, saiba que você é o amor da minha vida, sem você eu não teria
        nada que eu tenho hoje. Te amo.
      </p>
      <img
        id="imagemAleatoria"
        src="{{ asset('amorzinho/foto1.jpg') }}"
        alt="Imagem aleatória"
        class="max-h-[380px] border-4 border-purple-500 border-b-4 rounded-2xl m-4"
      />
      <p class="text-slate-300 text-sm max-w-[286px] mb-6">
        (Recarregue a página para ver algo)
      </p>
      <p class="text-2xl text-slate-200">(Ignore a ena)</p>
      <img src="{{ asset('ena-ref.png') }}" alt="ENA" class="max-h-[380px] m-4" />
      <p class="text-slate-200 max-w-[286px] m-4">
        Quando estou com você me sinto amarelo, você é mais linda que a lua,
        mais delicioa que o TURRON, você é oque eu pedi ao Grande Runas.
      </p>
      <h1 class="text-slate-300 mt-6">Jogo do Mauro</h1>
      <p class="text-slate-200 max-w-[286px] m-4">
        (Só dá pra jogar no computador)
      </p>
      <p class="text-slate-200 max-w-[286px] m-4">Mova-se com as setas</p>
      <iframe
        src="https://scratch.mit.edu/projects/185346/embed"
        allowtransparency="true"
        width="385"
        height="302"
        frameborder="0"
        scrolling="no"
        class="m-6"
        allowfullscreen
      ></iframe>
            <!-- Áudio -->
      <audio id="musica" loop>
        <source src="{{ asset('planos.mp3') }}" type="audio/mpeg" />
        Seu navegador não suporta áudio HTML5.
      </audio>
    </div>
    <script>
      const audio = document.getElementById("musica");
      const container = document.getElementById("container");
      const texto = document.createElement("p");

      function toggleMusic() {
        if (audio.paused) {
          audio.play();
          console.log("play");
          texto.textContent = "(aperte novamente para pausar)";
          container.appendChild(texto);
        } else {
          audio.pause();
          console.log("pause");
          container.removeChild(texto);
        }
      }
      window.onload = function () {
        console.log("carregou");
        // Gera um número aleatório entre 1 e 8
        const numeroAleatorio = Math.floor(Math.random() * 8) + 1;

        // Monta o nome do arquivo, ex: "foto3.jpg"
        document.getElementById(
          "imagemAleatoria"
        ).src = `amorzinho/foto${numeroAleatorio}.jpg`;
        // Define o src da imagem
      };
    </script>   
  </body>
</html>