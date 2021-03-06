@extends('layout.admin')
@section('title', 'Mahasiswa')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Form Input Mahasiswa</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <form action="{{ !empty($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="post" class="px-4">
                    @csrf
                    @if (!empty($mahasiswa))
                    @method('PUT')
                    @endif
                    <label class="form-label" for="nim">NIM</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="number" id="nim" class="form-control" name="nim" value="{{$mahasiswa->nim ?? ''}}" required>
                    </div>
                    <label class="form-label" for="nama">Nama</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="nama" class="form-control" name="nama" value="{{$mahasiswa->nama ?? ''}}" required>
                    </div>
                    <label class="form-label" for="kelas">Kelas</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="kelas" class="form-control" name="kelas" value="{{$mahasiswa->kelas ?? ''}}" required>
                    </div>
                    <label class="form-label" for="semester">Semester</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="number" id="semster" name="semester" class="form-control" value="{{$mahasiswa->semester ?? ''}}" required>
                    </div>
                    <div class="d-flex flex-row gap-2 mt-4">
                        <a class="btn btn-md btn-warning" href="/mahasiswa">Kembali</a>
                        <button type="submit" class="btn btn-md bg-gradient-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className = current[0].className.replace(" active bg-gradient-primary", "");
    current[1].className += " active bg-gradient-primary"
</script>

@endsection