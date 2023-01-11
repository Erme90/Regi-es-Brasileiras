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
    <div class="respostaform">
        <?php
            $estado = isset($_GET["estado"])?$_GET["estado"]:"Nenhum estado selecionado";
            echo "Estado selecionado: $estado.<br><br>"; 
            
            switch($estado){
                
                case "Goiás":
                case "Mato Grosso":
                case "Mato Grosso do Sul":
                case "Distrito Federal":
                    echo "<span style='color:#550c99;'>Região Centro-Oeste</span>";
                    break;
                case "Acre":
                case "Amazonas":
                case "Amapá":
                case "Pará":
                case "Rondônia":
                case "Roraima":
                case "Tocantins":
                    echo "<span style='color:#0b7327'>Região Norte</span>";
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
                    echo "<span style='color:#cc1225;'>Região Nordeste</span>";
                    break;
                case "Paraná":
                case "Rio Grande do Sul":
                case "Santa Catarina":
                    echo "<span style='color:#354ef2';>Região Sul</span>";
                    break;
                case "São Paulo":
                case "Rio de Janeiro":
                case "Minas Gerais":
                case "Espírito Santo":
                    echo"<span style='color:#f26535';>Região Sudeste</span>";
                    break;
                default:
                    echo "Nenhuma região selecionada!";
            }
        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botão">Voltar</a>
    </div>
</body>
</html>