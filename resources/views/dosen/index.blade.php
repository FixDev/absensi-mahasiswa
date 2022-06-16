@extends('layout.admin')

@section('title', 'Dosen')

@section('content')

<h3>Dosen</h3>
<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className = current[0].className.replace(" active bg-gradient-primary", "");
    current[2].className += " active bg-gradient-primary"
</script>

@endsection