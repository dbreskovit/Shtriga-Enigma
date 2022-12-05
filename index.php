<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="shortcut icon"
      href="../../source/img/favicon.ico"
      type="image/x-icon"
    />
</head>
<body>
    <?php
        ini_set('display_errors', true); //Para não mostrar os erros no lugar do resultado
        error_reporting(E_ALL|E_STRICT);
    
        if(!empty($_GET) && $_SERVER['REQUEST_METHOD'] == 'GET'){
            $answer = $_GET['resposta'];

            switch ($answer) {
                case 'escreva_sua_resposta_aqui':
                    include_once('hddjfhdjsdh1.php');
                    break;
                case 'onze':
                    include_once('jjasdhjshjkh2.php');
                    break;
                case 'vermelho':
                    include_once('jdshjkdahkjhdj3.php');
                    break;
                case '108':
                    include_once('download108.php');
                    break;
                case 'lefanu':
                    include_once('sifhjahjkhdj4.php');
                    break;
                case 'trespassing':
                    include_once('sdhjksdhjk5.php');
                    break;
                case 'e porque voce e tao resistente, eles pensaram que voce nao sentia':
                    include_once('hsjdhdjkshajkh6.php');
                    break;
                case '1692':
                    include_once('sdkjhsdkjh7.php');
                    break;
                case 'cancoes':
                    include_once('skjfhjksh8.php');
                    break;
                case 'ideias sao a prova de balas':
                    include_once('sdhfjhskj9.php');
                    break;
                case 'nemerb':
                    include_once('jkjsaklkjnjk10.php');
                    break;
                case 'bremen':
                    include_once('Erro09.php');
                    break;
                case 'hexen':
                    include_once('Erro10.php');
                    break;
                case 'les yeux':
                    include_once('ajajcjsksjFINAL.php');
                    break;
                default:
                    include_once('Error.php');
                    break;
            }
        } else{
            include_once('inicio.php');
        }
    ?>
    <script>
        function openImg(){
            window.open('/source/img/b4db343d51264dd6936b234d300008ab.png', '_blank');
        }
    </script>
</body>
</html>