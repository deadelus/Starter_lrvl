@extends('layouts.app')

@section('content')
<form method="POST" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="dossier" value="{{ old('username') }}">
    <button type="submit">Envoyer</button>
</form>
@endsection
