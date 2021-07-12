@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3" style="margin: 20px 0 20px 35%;">動物資料表</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ani_id</td>
          <td>ani_name</td>
          <td>ani_info</td>
          <td>ani_gentle</td>
          <td colspan = 2>Actions<a href="http://127.0.0.1/zoo/public/animals/create" style="margin:0 0 0 50px">前往新增</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($animals as $animal)
        <tr>
            <td>{{$animal->ani_id}}</td>
            <td>{{$animal->ani_name}}</td>
            <td>{{$animal->ani_info}}</td>
            <td>{{$animal->ani_gentle}}</td>
            
            <td>
                <a href="{{ route('animals.edit',$animal->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('animals.destroy', $animal->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  
<div>
</div>
@endsection