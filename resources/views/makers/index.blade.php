@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div class="fodiv">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    <a href="{{ route('makers.create') }}" title="Új">Új hozzáadása</a>
        <table>
            <thead>
                <tr><th>#</th><th>Megnevezés</th><th>Logo</th><th>Gombok</th></tr>
            </thead>
            <tbody>

                @foreach($makers as $maker)
                    <tr>
                        <th>{{ $maker->id }}</th>
                        <th>{{$maker->name}}</th>
                        <th>
                                <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="btn-del-maker"><i class="fa fa-trash-can trash" title="Töröl">törlés</i></button>
                                </form>

                                <a href="{{ route('makers.edit', $maker->id) }}"><button><i class="fa fa-edit edit" title="Módosít">módosítás</i></button></a>
                        </th>
                    </tr>
                @endforeach

            </tbody>
        </table>
    <!--
    @isset($abc)
        <div class="paginator">
            {{ $makers
                ->appends([
                    'sort_by' => request('sort_by'),
                    'sort_dir' => request('sort_dir'),
                ])
                ->links()

            }}
        </div>
    @endisset
    -->
</div>
@endsection
