<?php
$desde = '';
$hasta = '';
$valor = '';
$resultado = '';
//Convertir medida standar de metros
function convertir_a_metros($valor, $unidad_desde)
{
    switch ($unidad_desde) {
        case 'Milimetro':
            return $valor / 1000;
            break;
        case 'Centimetro':
            return $valor / 100;
            break;
        case 'Decimetro':
            return $valor / 10;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Decametro':
            return $valor * 10;
            break;
        case 'Hectometro':
            return $valor * 100;
            break;
        case 'Kilometro':
            return $valor * 1000;
            break;
        default:
            return "Ingresa una unidad de medida de las opciones";
            break;
    }
}

function convertir_desde_metros($valor, $unidad_hasta)
{
    switch ($unidad_hasta) {
        case 'Milimetro':
            return $valor * 1000;
            break;
        case 'Centimetro':
            return $valor * 100;
            break;
        case 'Decimetro':
            return $valor * 10;
            break;
        case 'Metro':
            return $valor * 1;
            break;
        case 'Decametro':
            return $valor / 10;
            break;
        case 'Hectometro':
            return $valor / 100;
            break;
        case 'Kilometro':
            return $valor / 1000;
            break;
        default:
            return "Ingresa una unidad de medida de las opciones";
            break;
    }
}


if (isset($_POST['convertir'])) {
    //Obtener los valores
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    $calculoDesde = convertir_a_metros($valor, $desde);
    $calculoHasta = convertir_desde_metros($calculoDesde, $hasta);
    $resultado = $calculoHasta;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Udemy/MASTER%20PHP/convertidor-longitud/styles/style.css?v=<?php echo time(); ?>">
    <title>Conversor de Longitud</title>
</head>

<body>
<div class="wrapper">
    <div class="animated-bg">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
        <h1 class="text-center text-light py-3 mt-4">Conversor de Longitud</h1>

        <div class="container py-5">
            <form class="card-form" method="POST">
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <label class="" for="valor">VALOR: </label>
                        <input type="number" name="valor" class="form-control" value="">

                    </div>

                    <div class="col-sm-4">
                        <label for="desde" class="fomr-label ">Desde: </label>
                        <select class="form-select" name="desde">
                            <option selected>--Seleccione un valor--</option>
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decametro">Decámetro</option>
                            <option value="Hectometro">Hectómetro</option>
                            <option value="Kilometro">Kilómetro</option>

                        </select>
                    </div>

                    <div class="col-sm-4">
                        <label for="hasta" class="fomr-label ">Hasta: </label>
                        <select class="form-select" name="hasta">
                            <option selected>--Seleccione un valor--</option>
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decametro">Decámetro</option>
                            <option value="Hectometro">Hectómetro</option>
                            <option value="Kilometro">Kilómetro</option>

                        </select>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-sm-4">
                        <button type="submit" name="convertir" class="btn btn-warning w-100 py-4">CONVERTIR</button>
                    </div>

                    <div class="col-sm-8">
                        <div class="mb-3">
                            <label for="valor" class="">RESULTADO: </label>
                            <input type="text" name="resultado" class="form-control" value="<?php if (isset($resultado)) echo $resultado ?>">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>