@extends('layout')

@section('content')
<h1>Üzemanyag</h1>
<div class="fodiv">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    <a href="{{ route('fuels.create') }}" title="Új">Új hozzáadása</a>
        <table>
            <thead>
                <tr><th>#</th><th>Megnevezés</th><th>Logo</th><th>Gombok</th></tr>
            </thead>
            <tbody>

                @foreach($fuels as $fuel)
                    <tr>
                        <th>{{ $fuel->id }}</th>
                        <th>{{$fuel->name}}</th>
                        <th>
                                <form action="{{ route('fuels.destroy', $fuel->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="btn-del-fuel"><i class="fa fa-trash-can trash" title="Töröl">törlés</i></button>
                                </form>

                                <a href="{{ route('fuels.edit', $fuel->id) }}"><button><i class="fa fa-edit edit" title="Módosít">módosítás</i></button></a>
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
