@if ($errors->any())
<div class="alert alert-danger">
    @if ($errors->count() === 1)
    {{ $errors->first() }}
    @else
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
@endif

@if (session()->has('message'))
<div class="alert alert-{{ session('type') }}">
    {{ session('message') }}
</div>
@endif