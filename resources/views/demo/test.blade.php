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
            <form action="{{route('buku.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-groub">
                    <label for="">Buku</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-groub">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" class="form-control">
                </div>
                <div class="form-groub">
                    <label for="">Penulis</label>
                    <input type="text" name="penulis" class="form-control">
                </div>

                <button type="submit" name="button">Tombol</button>
            </form>
        </div>
        <hr>
        <div class="row">
        <table class="table table-hover">
            <div>
                <body>
                <thead>
                <tr>
                    <th>judul</th>
                    <th>tahun</th>
                    <th>penulis</th>
                </tr>
                </thead>
                </body>
                @foreach ($buku as $key => $test):
                    <tr>
                        <td>{{$test->judul}}</td>
                        <td>{{$test->tahun}}</td>
                        <td>{{$test->penulis}}</td>

                        <td>
                            <a href="{{route ('buku.edit', $test->id)}}">Edit</a>
                            <a href="#"onclick="event.preventDefault(); document.getElementById('delete-form{{$test->id}}').submit();">Hapus</a>
                            <form id="delete-form{{$test->id}}" action="{{route('buku.destroy',$test->id)}}" method="POST" style="display: none;">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                            </form>
                        </td>
                    </tr>
                @endforeach;

            </table>

            </div>

        </div>
    </body>
</html>
