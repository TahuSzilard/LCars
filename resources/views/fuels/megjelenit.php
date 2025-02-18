@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <table>
        <thead>
            <tr><th>#</th><th>Megnevezés</th></tr>
        </thead>

        <tbody>
        @foreach($fuels as $fuel)
            <tr class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}"></tr>
            <td>{{ $fuel->id }}</td>
            <td>{{ $fuel->name }}</td>
            <td><img src = "{{ $fuel->logo}}"></td>
        @endforeach
        </tbody>
    </table>
</div>