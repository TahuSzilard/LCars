@extends('layout')
@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <h1>Modellek</h1>
</head>

<div class="fodiv">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Megnevezés</th>
                    <th>Műveletek</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($models as $model)
                <tr>
                        <th>{{ $model->id }}</th>
                        <th>{{$model->name}}</th>
                    <th>
                        @if(auth()->check())
                            <form action="{{ route('models.destroy', $model->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-model"><i class="fa fa-trash-can trash" title="Töröl"></i></button>
                            </form>

                            <a href="{{ route('models.edit', $maker->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a>

                        @endif
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
