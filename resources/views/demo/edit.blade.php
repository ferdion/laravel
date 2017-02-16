<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">

        <title>Coba Laravel Bootstap</title>
    </head>
    <body>
        <h1>Buku</h1>
        <div class="container">
            <form action="{{route('buku.update', $buku->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-groub">
                    <label for="">Buku</label>
                    <input type="text" name="judul" class="form-control" value="{{$buku->judul}}">
                </div>
                <div class="form-groub">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="{{$buku->tahun}}">
                </div>
                <div class="form-groub">
                    <label for="">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="{{$buku->penulis}}">
                </div>

                <button type="submit" name="button">Tombol</button>
            </form>
            </div>
        </div>
    </body>
</html>
