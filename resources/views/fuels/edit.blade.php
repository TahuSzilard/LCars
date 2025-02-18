@extends('layout')
@section('content')
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        @include('fuels.error')
        <form action="{{ route('fuels.update', $body->id) }}" method="post">
            @csrf
            @method('PUT')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $body->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('fuels.index') }}">Mégse</a>
        </form>
    </div>
@endsection
