@extends('layout.admin')

@section('title', 'Dosen')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Table Dosen</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="d-flex align-items-end flex-column">
                    <a class="btn btn-warning btn-lg mx-3" href="/dosen/create">
                        <i class="material-icons text-lg">add</i>
                        Tambah</a>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIDN</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Kuliah</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dosen as $dsn) {
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            {{$no}}
                                        </div>
                                    </td>
                                    <td>{{$dsn->nidn}}</td>
                                    <td class="align-middle text-center text-sm">{{$dsn->nama}}</td>
                                    <td class="align-middle text-center text-sm">{{$dsn->matkul->nama ?? '-'}}</td>
                                    <td class="align-middle text-center">
                                        <form method="post" action="{{route('dosen.destroy', $dsn->id)}}">
                                            <a href="/dosen/{{$dsn->id}}" class="btn btn-primary btn-sm">
                                                <i class="material-icons text-md">visibility</i>
                                            </a>
                                            <a href="/dosen/{{$dsn->id}}/edit" class="btn btn-secondary btn-sm">
                                                <i class="material-icons text-md">edit</i>
                                            </a>
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="material-icons text-md">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
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
