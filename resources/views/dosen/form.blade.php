@extends('layout.admin')
@section('title', 'Dosen')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Form Input dosen</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <form action="{{ !empty($dosen) ? route('dosen.update', $dosen[0]->id) : route('dosen.store') }}" method="post" class="px-4">
                    @csrf
                    @if (!empty($dosen))
                    @method('PUT')
                    @endif
                    <label class="form-label" for="nidn">NIDN</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="number" id="nidn" class="form-control" name="nidn" value="{{$dosen[0]->nidn ?? ''}}" required>
                    </div>
                    <label class="form-label" for="nama">Nama</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="nama" class="form-control" name="nama" value="{{$dosen[0]->nama ?? ''}}" required>
                    </div>
                    <label class="form-label" for="matkul_id">Mata Kuliah</label>
                    <div class="input-group input-group-outline mb-3">
                        <select name="matkul_id" id="matkul_id" class="form-control" required>
                            <option value="">Pilih matkul</option>
                            @foreach ($matkul as $key => $value)
                            <option value="{{ $key+1 }}" @if ($key+1 == old('matkul_id', $dosen[0]->matkul_id ?? ''))
                                selected="selected"
                                @endif
                                >{{ $value->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-row gap-2 mt-4">
                        <a class="btn btn-md btn-warning" href="/dosen">Kembali</a>
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
    current[2].className += " active bg-gradient-primary"
</script>

@endsection