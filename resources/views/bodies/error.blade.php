@if ($errors->any())
    <div class="alert alert-danger" color = "red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif