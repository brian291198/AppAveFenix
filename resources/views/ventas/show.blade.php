<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <title>Orden de Compra</title>
    <style>
        .title{
            color: #1567D5; /* Color de letras */
            font-weight: 800; /* Grosor de las letras */
            
        }
        .descripcion{
            color: black;
            margin-top: -5px;
        }
        body {
            height: 100vh;
            display: flex;
            /* align-items: center;
            justify-content: center; */
            background-color: #f0f0f0;
            margin-right: 28%;
            margin-left: 28%;
        }
        .espacio{
            padding-top: 5%; 
        }
        .Sub{
            color: #000000;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <div class="container">

        <table class="table text-center">
            <div class="text-center mt-5 espacio">
                <h1 class="title">EMPRESA DE TRANSPORTES "AVE FENIX" EMTRAFESA</h1>
                <h6 class="descripcion">AV. Túpac Amaru 185 Urb. Huerta Grande, Trujillo-Perú</h6>
                <h6 class="descripcion">☎ (044) 484120 - (044) 471521</h6>
                <h6 class="descripcion">RUC: 20133605291</h6>
            </div>
            
        </table>

        <table class="table text-center">
            <div class="text-center">
                <h1 class="title" style="margin-top: -6%;">--------------------------------------</h1>
            </div>
            
        </table>


        <table class="table">
            <div class="text-center">
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-12 ">
                        <h5 class="Sub" style="margin-top: -3%;">DATOS DE VIAJE</h5>
                        <h6 class="descripcion">N#:</h6>
                        
                    </div>
                    <div class="mb-3 col-sm-12 col-md-12 ">
                        <h6 class="Sub" style="text-align: left;">Pasajero:</h6>
                        <h6 class="Sub" style="text-align: left;">Destino:</h6>
                    </div>
                    
                    <div class="mb-3 col-sm-12 col-md-6" style="margin-top: -2%">
                        <h6 class="Sub" style="text-align: left;">Fecha Ida:</h6>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-6" style="margin-top: -2%">
                        <h6 class="Sub" style="text-align: left;">Fecha Retorno:</h6>
                    </div>
                </div>
            </div>
            
        </table>


            <div class="col-12" style="margin-top: -2%">
                <table class="table">
                    <thead style="background: #1567D5; color: #fff">
                        <th>Detalle de Servicio</th>
                        <th>Pasajes</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        <td>David Vigo</td>
                        <td>-</td>
                        <td>$</td>
                        <?php $sub_total=0; $igv=0; $sum?>
                        {{-- @foreach ($productos as $p)
                            <tr>
                                <td>{{$p->idproducto}}</td>
                                <td>{{$p->descripcion}}</td>
                                <td>{{$p->cantidad}}</td>
                                <td>{{$p->precio}}</td>
                                <td><?php $total=0;
                                    $total=$p->cantidad*$p->precio;
                                    $sub_total=$sub_total+$total;
                                    $number=number_format($total,2,'.','');
                                    echo $number;
                                ?></td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

            <div class="col-12 mt-3" style="text-align: right;">
                <div class="text-end">
                    <label for="">Sub-Total: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format($sub_total,2,'.','') ?></label><br>
                    <label for="">Igv: &nbsp;&nbsp;&nbsp;&nbsp; <?php $igv=$sub_total*0.18; echo $igv; ?></label><br>
                    <label for="">TOTAL: &nbsp;&nbsp;&nbsp;&nbsp; <?php $sum=$igv+$sub_total; echo $sum ?></label><br>
                </div>
            </div>
            <div class="col-12 mb-5">
                <strong>Presiona el siguiente botón para descargar el PDF:</strong>
                <button class="btn btn-success btn-sm" id="btnCrearPdf">Click aquí</button>
            </div>
        </div>
    </div>
</body>
{{-- <script>
    document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos el click del botón
    const $boton = document.querySelector("#btnCrearPdf");
    $boton.addEventListener("click", () => {
        const $elementoParaConvertir = document.body; // <-- Aquí puedes elegir cualquier elemento del DOM
        html2pdf()
            .set({
                margin: 1,
                filename: 'Orden_de_Compra.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a3",
                    orientation: 'portrait' // landscape o portrait
                }
            })
            .from($elementoParaConvertir)
            .save()
            .catch(err => console.log(err));
    });
});
</script> --}}
</html>