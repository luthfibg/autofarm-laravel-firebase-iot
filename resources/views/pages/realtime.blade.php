@extends('layouts.main')

@section('content-title')
    Realtime Data <span> <i>Refresh to show current data</i> </span>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h2>Status now: {{ $monitorized['kbp'] }}</h2>
                </div>
                <div class="col-12 col-md-4"></div>
                <div class="col-12 col-md-4">
                    {{-- @switch($value)
                        @case('0')
                            <button class="btn btn-primary"> Set On </button>
                            @break
                        @case('1')
                            <button class="btn btn-danger"> Set Off </button>
                            @break
                        @default
                            <button class="btn btn-primary"> Set On </button>
                            
                    @endswitch --}}
                </div>
            </div>
        </div>
    </div>
@endsection