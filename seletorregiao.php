<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seletor de Região</title>
    <link rel="stylesheet" href="estilo.css">
    </head>
<body>
    <div>
        <?php
            $estado = isset($_GET["estado"])?$_GET["estado"]:"Nenhum estado selecionado";
            echo "O estado selecionado foi $estado.<br>"; 
            
            switch($estado){
                
                case "Goiás":
                case "Mato-Grosso":
                case "Matro-Grosso do Sul":
                case "Distrito Federal":
                    echo "Região Centro-Oeste";
                    break;
                case "Acre":
                case "Amazonas":
                case "Amapá":
                case "Pará":
                case "Rondônia":
                case "Roraima":
                case "Tocantins":
                    echo "Região Norte";
                    break;
                case "Alagoas":
                case "Bahia":
                case "Ceará":
                case "Maranhão":
                case "Piauí":
                case "Pernambuco":
                case "Paraíba":
                case "Rio Grande do Norte":
                case "Sergipe":
                    echo "Região Nordeste";
                    break;
                case "Paraná":
                case "Rio Grande do Sul":
                case "Santa Catarina":
                    break;
                case "São Paulo":
                case "Rio de Janeiro":
                case "Minas Gerais":
                case "Espírito Santo":
                    echo"Região Sudeste";
                    break;
                default:
                    echo "Nenhuma região selecionada!";
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>
    </div>
</body>
</html>