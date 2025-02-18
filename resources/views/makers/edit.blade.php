@extends('layout')
@section('content')
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        @include('makers.error')
        <form action="{{ route('makers.update', $maker->id) }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $maker->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('makers.index') }}">Mégse</a>
        </form>
    </div>
@endsection
