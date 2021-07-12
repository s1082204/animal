@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3" style="margin: 20px 0 20px 35%;">動物資料表</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>動物編號</td>
          <td>動物姓名</td>
          <td>動物資訊(來源)</td>
          <td>ani_gentle <a href="{{ url('animals/create') }}" style="margin:0 0 0 50px">前往新增</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($animals as $animal)
        <tr>
            <td>{{$animal->ani_id}}</td>
            <td>{{$animal->ani_name}}</td>
            <td>{{$animal->ani_info}}</td>
            <td>{{$animal->ani_gentle}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

<div>
</div>
@endsection