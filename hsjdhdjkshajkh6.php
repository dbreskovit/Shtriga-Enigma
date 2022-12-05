<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../source/img/favicon.ico"
      type="image/x-icon"
    />
    <title>Mima Renard</title>
    <link rel="stylesheet" href="../source/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <script src="../source/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
  </head>
  <body id="code">
    <style>
      body {
        color: white;
        background: black;
      }
    </style>      
    <script>
      window.addEventListener("load", function(event) {
          go();
      });
      // format: [length, on_or_off]
      var SHORT = [1, true];
      var LONG = [3, true];
      var GAP = [1, false];
      var CHAR_GAP = [3, false];
      var WORD_GAP = [7, false];
      
      var INSTRS = {
        '.': SHORT,
        '-': LONG,
        ' ': CHAR_GAP,
        '/': WORD_GAP,
      };
      
      var TICK_MS = 150;
      
      var CHARS = {
        '0': '-----',
        '1': '.----',
        '2': '..---',
        '3': '...--',
        '4': '....-',
        '5': '.....',
        '6': '-....',
        '7': '--...',
        '8': '---..',
        '9': '----.',
      
        'A': '.-',
        'B': '-...',
        'C': '-.-.',
        'D': '-..',
        'E': '.',
        'F': '..-.',
        'G': '--.',
        'H': '....',
        'I': '..',
        'J': '.---',
        'K': '-.-',
        'L': '.-..',
        'M': '--',
        'N': '-.',
        'O': '---',
        'P': '.--.',
        'Q': '--.-',
        'R': '.-.',
        'S': '...',
        'T': '-',
        'U': '..-',
        'V': '...-',
        'W': '.--',
        'X': '-..-',
        'Y': '-.--',
        'Z': '--..',
      
        '+': '.-.-.',
        '-': '-....-',
        '_': '..--.-',
        '"': '.-..-.',
        ' ': '/',
      };
      
      function str2morse(s) {
        var r = [];
      
        s = s.toUpperCase();
        for (var i = 0; i < s.length; i++) {
          r.push(CHARS[s[i]]);
        }
        return r.join(' ');
      }
      
      function morse2instructions(m) {
        var r = [];
        var p = false;
      
        m = m.replace(' / ','/');
        for (var i = 0; i < m.length; i++) {
          if (m[i] == '-' || m[i] == '.') {
            if (p) {
              r.push(GAP);
            }
            p = true;
          } else {
            p = false;
          }
          r.push(INSTRS[m[i]]);
        }
        return r;
      }
      
      var TIMER = 0;
      
      function play_instructions(ins, div) {
        ins = ins.slice();
      
        var f = function() {
          if (!ins.length) {
            div.style.backgroundColor = 'black';
            TIMER = 0;
            return;
          }
      
          var c = ins.shift();
          var cl;
          var bg = 0;
          if (c[1]) {
            bg = 'white';
            cl =  'black';
          } else {
            bg = 'black';
            cl = 'white';
          }
          div.style.backgroundColor = bg;
          div.style.color = cl;
          TIMER = window.setTimeout(f, c[0] * TICK_MS);
        };
      
        f();
      }
      
      function stop() {
        if (TIMER) {
          window.clearTimeout(TIMER);
        }
        TIMER = 0;
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
      }
      
      

      function go() {
        stop();
      
        var txt = "1692";
        TICK_MS = parseInt(150) || 150;
        play_instructions(morse2instructions(str2morse(txt)), document.body);
      }
      
      </script>
    <div class="index">
      <div class="center">
        <div class="capitulo">
          <p>
            A mudança foi algo ao qual não tardou chegar, começou como pequenos
            sons que não tardaram a ser guturais como o som das árvores caindo.
            Ao passo que a primeira máquina invadiu aquela floresta outrora
            sagrada toda sua magia despertou e a cidade viria a ser engolida por
            ela.
          </p>
          <p>
            O tempo se fechou e a pior tempestade já vista se instalou, a água
            caia dos céus em uma torrente rápida, os raios retumbavam como os
            mantidos corações acelerados com o medo dentro daqueles que ali
            viviam. Essa tempestade também trouxe a chegada de uma jovem bela e
            solitária para a cidade. Ela sim se lembrava de suas promessas, seu
            nome era Sarah Good, seu nome outrora fora Mima.
          </p>
        </div>
      </div>
    </div>
    <span
      class="btnDica"
      onclick="dica('Você não acha que já te damos dicas de mais?');"
    >
    ?
    </span>
  </body>
  <footer>
    <div class="credits">
      Twitter: <a href="https://twitter.com/dbreskovit">@dbreskovit</a> &
      <a href="https://twitter.com/hartmannxonatan">@hartmannxonatan</a>
    </div>
  </footer>
</html>
