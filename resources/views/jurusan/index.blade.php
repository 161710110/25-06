@extends('layouts.light')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
          <div class="row">
                <div class="col-lg-11">
                    <h2 class="title-1 m-b-25">Jurusan</h2>
                    <div class="pull-right">
                      @role('admin')
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                      @endrole
                    </div>
          <div class="unit w-3-4">
            <div class="hero-callout">
            <table class="table table-borderless table-striped table-earning">              
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jurusan</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach($jurusan as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nama}}</td>
            <td>
              <a class="item" data-toggle="tooltip" data-placement="top" title=" Edit" href="{{ route('jurusan.edit',$data->id) }}"><button><i class="pe-7s-edit"></i></a>
            </td>
            <td>
              <form method="post" action="{{ route('jurusan.destroy',$data->id) }}">
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
      <form action="{{ route('jurusan.store') }}" method="post">
      {{csrf_field()}}
       <div class="form-group">
        <label class="control-label">Nama Jurusan</label>
        <input type="text" name="nama" class="form-control" required="">
        </div>
        
      <div class="form-group">
        <button type="submit" class="btn btn-danger">Submit</button>

        <button type="submit" class="btn btn-warning">Reset</button>
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