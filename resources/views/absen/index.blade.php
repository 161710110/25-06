@extends('layouts.light')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
          <div class="row">
                <div class="col-lg-11">
                    <h2 class="title-1 m-b-25">Absen</h2>
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
              <th>Tanggal</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Keterangan</th>
              <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($absen as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->tanggal}}</td>
              <td>{{ $data->siswa->nama}}</td>
              <td>{{ $data->siswa->kelas->nama}}</td>
              <td>&#9899;{{ $data->keterangan}}</td>
            <td>
              <a class="item" data-toggle="tooltip" data-placement="top" title=" Edit" href="{{ route('absen.edit',$data->id) }}"><button><i class="pe-7s-edit"></i></a>
            </td>
            <td>
              <form method="post" action="{{ route('absen.destroy',$data->id) }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">

                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
      <form action="{{ route('absen.store') }}" method="post">
      {{csrf_field()}}
      
       <div class="form-group">
        <label class="control-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required="">
        </div>

      <div class="form-group">
            <label class="control-label">Kelas</label>
            <select class="form-control kelas" name="kelas_id" required="" id="kelas">
              @foreach($kelas as $data)
              <option value="{{$data->id}}">{{$data->nama}}
              </option>
              @endforeach
            </select>
            </div>

            <div class="form-group">
            <label class="control-label">Nama :</label>
            <select class="form-control" name="siswa_id" required="" id="ngaran">
              @foreach($siswa as $data)
              <option value="{{$data->id}}">{{$data->nama}}</option>
              @endforeach
            </select>
            </div>

      <div class="form-group">
        <label class="control-label">Keterangan</label>
        <input type="radio" name="keterangan" value="Sakit"  ><strong> Sakit</strong> &nbsp;&nbsp;
        <input type="radio" name="keterangan" value="Izin"  ><strong> Izin </strong>&nbsp;&nbsp;
        <input type="radio" name="keterangan" value="Alfa"  ><strong> Alfa </strong>&nbsp;&nbsp;
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
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#kelas').change(function() {
      $('#ngaran').html('');
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filter/kelas/' + $(this).val(),
        success : function(data){
          $('#ngaran').append(data);
        },
        error : function() {
          $('#ngaran').html('Tidak Ada Hasil');
        }

      });     
    });
    $('#class').change(function() {
      $('#name').html('');
      $.ajax({
        method : 'GET',
        dataType: 'html',
        url : 'filter/kelas/' + $(this).val(),
        success : function(data){
          $('#name').append(data);
        },
        error : function() {
          $('#name').html('Tidak Ada Hasil');
        }

      });     
    })
  });
</script>
@endsection