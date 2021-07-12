@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">新增動物資料</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('animals.store') }}">
          @csrf
          <div class="form-group">    
              <label for="ani_id">ani_id:</label>
              <input type="text" class="form-control" name="ani_id"/>
          </div>
          <div class="form-group">
              <label for="ani_name">ani_name:</label>
              <input type="text" class="form-control" name="ani_name"/>
          </div>
          <div class="form-group">
              <label for="ani_info">ani_info:</label>
              <input type="text" class="form-control" name="ani_info"/>
          </div>
          <div class="form-group">
              <label for="ani_gentle">ani_gentle:</label>
              <input type="text" class="form-control" name="ani_gentle"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection