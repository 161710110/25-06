@extends('layouts.light')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
          <div class="row">
                <div class="col-lg-11">
                    <h2 class="title-1 m-b-25">Data Kelas</h2>
                    <div class="pull-right">
                      @role('admin')
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                      @endrole
                    </div>
          <div class="table-responsive table--no-card m-b-40">
          <table class="table table-borderless table-striped table-earning">
          <br>
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelas</th>
              <th>Jurusan</th>
              <th>Wali Kelas</th>
              <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($kelas as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nama}}</td>
              <td>{{ $data->jurusan->nama}}</td>
              <td>{{ $data->wali_kelas}}</td>
            <td>
              <a class="item" data-toggle="tooltip" data-placement="top" title=" Edit" href="{{ route('kelas.edit',$data->id) }}"><button><i class="pe-7s-edit"></i></a>
            </td>
            <td>
              <form method="post" action="{{ route('kelas.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus Data Ini ?')">
                <i class="pe-7s-trash"></i>
              </form>
            </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
        </div>
      </div>  
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('kelas.store') }}" method="post">
      {{csrf_field()}}
      
       <div class="form-group">
        <label class="control-label">Nama Kelas</label>
        <input type="text" name="nama" class="form-control" required="">
        </div>
      <div class="form-group">
            <label class="control-label">Nama Jurusan :</label>
            <select class="form-control" name="jurusan_id" required="">
              @foreach($jurusan as $dd)
              <option value="{{$dd->id}}">{{$dd->nama}}
              </option>
              @endforeach
            </select>
          </div>
      <div class="form-group">
        <label class="control-label">Wali Kelas</label>
        <input type="text" name="wali_kelas" class="form-control" required="">
        </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger">Submit</button>

        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

    </div>
  </div>
</div> 
@endsection