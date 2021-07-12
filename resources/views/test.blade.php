@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h2 style="margin:0 0 20px 40%">您已登出</h2>
                    <button style="margin:20px 0 0 43%"><a href = "{{ route('animals.index')}}" >回到首頁</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
