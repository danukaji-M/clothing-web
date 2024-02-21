@php
    $user = session('user');

@endphp

@if ($user)
    <p>Welcome, {{ $user->name }}!</p>
    <p>{{$user->id}}</p>
@else
    <p>Welcome, guest!</p>
@endif
