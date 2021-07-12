@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">更新動物資料表</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('animals.update', $animal->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="ani_id">ani_id:</label>
                <input type="text" class="form-control" name="ani_id" value={{ $animal->ani_id }} />
            </div>
            <div class="form-group">
                <label for="ani_name">ani_name:</label>
                <input type="text" class="form-control" name="ani_name" value={{ $animal->ani_name }} />
            </div>
            <div class="form-group">
                <label for="ani_info">ani_info:</label>
                <input type="text" class="form-control" name="ani_info" value={{ $animal->ani_info }} />
            </div>
            <div class="form-group">
                <label for="ani_gentle">ani_gentle:</label>
                <input type="text" class="form-control" name="ani_gentle" value={{ $animal->ani_gentle }} />
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
</div>
@endsection