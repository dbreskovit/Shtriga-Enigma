<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../../source/img/favicon.ico"
      type="image/x-icon"
    />
    <title>Shtriga | Home</title>
    <link rel="stylesheet" href="../source/css/style.css" />
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
  <body id="red">
    <?php include_once('nav.php') ?>
    <main class="section">
      <img src="../source/img/favicon.ico" alt="" />
      <h1>Shtriga</h1>
      <p id="demoFinish">0d 0h 0m 0s</p>
      <form action="index.php" method="get">
        <input type="hidden" name="resposta" value="escreva_sua_resposta_aqui">
        <button class="btn btn-primary btn-sm btn-dark" type="submit">Começar</button>
      </form>

      <button hidden id="btnModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
      
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title h3 text-black" id="exampleModalLongTitle">Vencedores</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4 class="text-danger">1º Lugar: Rafaela Gehrke - 3º INFO - Time Super Mário (22/09 21:13)</h4>
              <h4 class="text-success">2º Lugar: Willian Richter - 2º INFO - Time Zelda (22/09 21:58)</h4>
              <h4 class="text-primary">3º Lugar: Maria Alice Sperotto - 2º INFO - Time Sonic (22/09 22:13)</h4>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script>
        window.addEventListener('load', (event) => {
          document.getElementById('btnModal').click();
        });
    </script>
  </body>
</html>
