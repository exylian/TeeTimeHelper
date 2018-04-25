@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">Erzeuge TeeTimes </div>
        <div class="col-md-3">
            <button class="btn btn-primary"onclick="{{\App\Http\Controllers\SettingsController::generateTeetimes()}}">Starten</button>
        </div>
    </div>
</div>
@endsection
