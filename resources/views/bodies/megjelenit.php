@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <table>
        <thead>
            <tr><th>#</th><th>Megnevezés</th></tr>
        </thead>

        <tbody>
        @foreach($bodies as $body)
            <tr class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}"></tr>
            <td>{{ $body->id }}</td>
            <td>{{ $body->name }}</td>
            <td><img src = "{{ $body->logo}}"></td>
        @endforeach
        </tbody>
    </table>
</div>