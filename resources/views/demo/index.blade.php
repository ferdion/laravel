<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>{{$judul}} </h3>
        <ul>

            @foreach ($buku as $key => $dion):
            <li>
                {{$dion->judul}} - {{$dion->tahun}}
            </li>
            @endforeach;

        </ul>

    </body>
</html>
