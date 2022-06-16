@extends('layout.admin')

@section('title', 'Mahasiswa')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Table Mata Kuliah</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                foreach ($matkul as $mat) {
                                    $no = 1;
                                ?>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            {{$no}}
                                        </div>
                                    </td>
                                    <td>{{$mat->nama}}</td>
                                    <td class="align-middle text-center text-sm">{{$mat->semester}}</td>
                                    <td class="align-middle text-center">
                                        <a href="javascript:;" class="btn btn-primary btn-sm">
                                            <i class="material-icons text-md">visibility</i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-secondary btn-sm">
                                            <i class="material-icons text-md">edit</i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-danger btn-sm">
                                            <i class="material-icons text-md">delete</i>
                                        </a>
                                    </td>
                                <?php $no++;
                                } ?>
                            </tr>
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
    current[3].className += " active bg-gradient-primary"
</script>

@endsection