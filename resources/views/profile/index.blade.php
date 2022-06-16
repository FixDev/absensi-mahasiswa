@extends('layout.admin')

@section('title', 'Profile')

@section('content')

<h3>Profile</h3>
<script>
    // Add active class to the current button (highlight it)
    var current = document.getElementsByClassName("nav-link text-white");
    current[0].className = current[0].className.replace(" active bg-gradient-primary", "");
    current[4].className += " active bg-gradient-primary"
</script>

@endsection