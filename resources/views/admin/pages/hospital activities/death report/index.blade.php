@extends('admin.master')
@section('content')
<h1>{{__('Death Report')}}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="d-print-none btn btn-success" href="{{route('death_report.create')}}">Create Death Report</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="d-print-none btn btn-info" href="{{route('death.report.csv')}}">
        CSV
      </a>
      <a class="d-print-none btn btn-info" href="{{route('death.report.excel')}}">
        Excel
      </a>
      <a class="d-print-none btn btn-info" href="">
        PDF
      </a>
      <a onclick="{window.print()}" class="d-print-none btn btn-info" href="">
        Print    
      </a>
  </div>
</div>
<br><br>
<div>


<table class="table" id="dataTable" style="text-align: center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Patient ID</th>
        <th scope="col">Date</th>
        <th scope="col">Title</th>
        <th scope="col">Doctors Name</th>
        <th class="d-print-none" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($deathReport as $key=>$item)
          <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$item->patient_id}}</td>
              <td>{{$item->date}}</td>
              <td>{{$item->title}}</td>
              <td>{{optional($item->doctor)->name}}</td>
              <td class="d-print-none">
                <div style="display: flex ">
                <a style="margin-left: 10px" class="btn btn-success btn-sm" href="{{route('death_report.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                <a style="margin-left: 3px" class="btn btn-warning btn-sm m" href="{{route('death_report.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                <form style="margin-left: 5px" action="{{route('death_report.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                </form>
                </div>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection







