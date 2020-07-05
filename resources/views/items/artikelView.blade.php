@extends('/layouts/master');

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush




@section('content')
<a href="/artikel/create" class="btn btn-primary">Input Baru</a>
<a href="/" class="btn btn-primary">ERD</a>
<br>
@foreach ($artikel as $key => $artikels)

<div class="card shadow mb-4">
    <!-- Card Body -->
    <div class="card-body">
      <h2>Judul : {{$artikels->judul_artikel}}</h2>
      <a href="/artikel/{{$artikels->id_artikel}}" class="btn btn-primary">Detail</a>
      <a href="/artikel/{{$artikels->id_artikel}}/update" class="btn btn-primary">Update</a>
      <form action="/artikel/{{$artikels->id_artikel}}" method="post" style="display: inline">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-sm-danger">
            <i class="fas fa-trash"></i>
            </button>
        </form>
    </div>
  </div>
@endforeach

@endsection




