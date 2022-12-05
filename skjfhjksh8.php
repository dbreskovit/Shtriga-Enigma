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
    <title>1:57:10</title>
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
  <body id="Vendetta">
    <div id="grid"></div>
    <svg
      id="base-eye"
      class="eye"
      viewbox="0 0 1000 1000"
      xmlns="http://www.w3.org/2000/svg"
      fill="black"
    >
      <clipPath id="lids">
        <path
          id="lids-path"
          stroke-linejoin="round"
          stroke-linecap="round"
          d="M 50 500 Q 500 0 950 500 Q 500 850 50 500"
        />
      </clipPath>
      <g clip-path="url(#lids)">
        <rect class="whites" width="1000" height="1000" fill="#fff" />
        <g class="pupil-group">
          <circle class="pupil" cx="500" cy="500" r="150" fill="#000" />
          <circle class="glint" cx="450" cy="450" r="20" fill="#fff" />
        </g>
      </g>
      <use href="#lids-path" class="lids" stroke="#000" stroke-width="20" />
    </svg>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/109/three.min.js"></script>
    <script src="../source/js/script.js"></script>

    <div class="index">
      <div class="center">
        <div class="capitulo">
          <p class="text-center">
            Vi veri veniversum vivus vici. <br />
            Sócrates uma vez disse <br />
            "ipse se nihil scire id unum sciat"<br />
          </p>
        </div>
      </div>
      <span class="btnDica" onclick="dica('<!---->')"> ? </span>
    </div>
  </body>
  <footer>
    <div class="credits">
      Twitter: <a href="https://twitter.com/dbreskovit">@dbreskovit</a> &
      <a href="https://twitter.com/hartmannxonatan">@hartmannxonatan</a>
    </div>
  </footer>



  
  <!-- https://drive.google.com/file/d/1gFqqHdi5QQ2XJ46yYxIFBnOAXy53CMmf/view -->



</html>
