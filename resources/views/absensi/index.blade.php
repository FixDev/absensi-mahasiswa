@extends('layout.admin')

@section('title', 'Absensi')

@section('content')

<h3>Absensi</h3>
<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className += " active bg-gradient-primary"
</script>
@endsection 
