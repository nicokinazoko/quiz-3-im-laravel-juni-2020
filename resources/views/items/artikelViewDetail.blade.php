@extends('/layouts/master');

@section('content')
<br>
<a href="/artikel" class="btn btn-primary">Kembali</a>
{{-- @foreach ($artikel as $artikels) --}}

<div class="card shadow mb-4">
    <!-- Card Body -->
    <div class="card-body">
      <h2>Judul : {{$artikel->judul_artikel}}</h2>
      <h5>slug : {{$artikel->slug_artikel}}</h5>
      <h5>{{$artikel->isi_artikel}}</h5>
      <a href="#" class="btn btn-success">{{$artikel->tags_artikel_1}}</a>
      <a href="#" class="btn btn-success">{{$artikel->tags_artikel_2}}</a>
    </div>
  </div>
{{-- @endforeach --}}

@endsection
