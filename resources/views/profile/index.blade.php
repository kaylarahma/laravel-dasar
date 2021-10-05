<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
    $nama = 'Kayla Rahmanisa';
    $umur = 17;
    $skul = "SMK ASSALAAM BANDUNG";
    $hum = "Jl.Sukamenak Bandung";
    $lahir = "25 Oktober 2004";

    $status = 2;
@endphp

<h3>Hallo Perkenalkan Nama Saya {{$nama}} <br></h3>
<h3>Saya Berumur {{$umur}} Tahun<br></h3>
<h3>Sekolah Saya di {{$skul}} <br></h3>
<h3>Rumah Saya di {{$hum}} <br></h3>
<h3></h3>Dan saya lahir pada {{$lahir}} <br></h3>

@if($status == 1)
    Status Saya Lulus
@else
    Status Saya Tidak Lulus
@endif
<br><br>
@switch($status)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch
<br><br>

@for ($i = 0; $i < 10; $i++)
@if ($i % 2 == 0)
    bilangan {{$i}} merupakan Genap <br>
@else
    bilangan {{$i}} merupakan Ganjil <br>
@endif
@endfor

</body>
</html>
