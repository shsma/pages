@extends('layouts.main')

@section('title', 'Website info')

@section('content')

    <div class="table">
        <div class="row">
            <div style="display:table-cell; text-align:center;"><kbd>Weekly visitors</kbd></div>
            <div style="display:table-cell; text-align:center;"><kbd>Happy client</kbd></div>
            <div style="display:table-cell; text-align:center;"><kbd>Driven project</kbd></div>
            <div style="display:table-cell; text-align:center;"><kbd>Email received</kbd></div>

        </div>
        <div class="row">

            <div class="counter" data-count="{{rand(30, 90)}}">0</div>
            <div class="counter" data-count="{{rand(25, 33)}}">0</div>
            <div class="counter" data-count="{{rand(35, 45)}}">0</div>
            <div class="counter" data-count="{{rand(90, 125)}}">0</div>
        </div>
    </div>

@endsection