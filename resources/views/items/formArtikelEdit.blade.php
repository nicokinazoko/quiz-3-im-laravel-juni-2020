@extends('/layouts/master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
      Form Edit Artikel
    </div>
    <div class="card-body">
        <form action="/artikel/{{$artikel->id_artikel}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul_artikel">Judul Artikel</label>
                <input type="text" class="form-control" id="judul_artikel" placeholder="Judul Artikel" name="judul_artikel" value="{{$artikel->judul_artikel}}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Isi Artikel</label>
              <textarea class="form-control" id="isi_artikel" rows="5" name="isi_artikel" >{{$artikel->isi_artikel}}</textarea>
            </div>

            <div class="form-group">
                <label for="id_user">ID User</label>
                <input type="text" class="form-control" id="id_user" placeholder="ID User" name="id_user" value="{{$artikel->id_user}}">
            </div>

            <div class="form-group">
                <label for="nama_tags_1">Tags 1</label>
                <input type="text" class="form-control" id="nama_tags_1" placeholder="Tags 1" name="nama_tags_1" value="{{$artikel->tags_artikel_1}}">
            </div>

            <div class="form-group">
                <label for="nama_tags_2">Tags 2</label>
                <input type="text" class="form-control" id="id_user_2" placeholder="Tags 2" name="nama_tags_2" value="{{$artikel->tags_artikel_2}}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/artikel" class="btn btn-primary">Kembali</a>
        </form>
    </div>
  </div>
@endsection
