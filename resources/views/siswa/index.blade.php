@extends('layouts.light')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
          <div class="row">
                <div class="col-lg-11">
                    <h2 class="title-1 m-b-25">Data Siswa</h2>
                    <div class="pull-right">
                      @role('admin')
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                      @endrole
                    </div>
          <div class="table-responsive table--no-card m-b-40">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for nis..">
            <style type="text/css">
              #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
            </style>

            <script type="text/javascript">
              function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
            </script>
          <table id="myTable" class="table table-borderless table-striped table-earning">
          <br>
            <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Jenis Kelamin</th>
              <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($siswa as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nis }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->kelas->nama }}</td>
              <td>{{ $data->jenis_kelamin }}</td>
            <td>
              <a class="item" data-toggle="tooltip" data-placement="top" title=" Edit" href="{{ route('siswa.edit',$data->id) }}"><button><i class="pe-7s-edit"></i></a>
            </td>
            <td>
              <form method="post" action="{{ route('siswa.destroy',$data->id) }}">
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
      <form action="{{ route('siswa.store') }}" method="post">
      {{csrf_field()}}

      <div class="form-group">
          <label class="control-label"> NIS</label>
          <input type="number" name="nis" class="form-control" required="">
        </div>

       <div class="form-group">
          <label class="control-label"> Nama siswa </label>
          <input type="text" name="nama" class="form-control" required="">
        </div>

        <div class="form-group">
            <label class="control-label">Kelas :</label>
            <select class="form-control" name="kelas_id" required="">
              @foreach($kelas as $dd)
              <option value="{{$dd->id}}">{{$dd->nama}}
              </option>
              @endforeach
            </select>
            </div>

        <div class="form-group">
          <label class="control-label"> Jenis Kelamin</label>
          <input type="radio" name="jenis_kelamin" value="Laki-Laki"  ><strong> Laki Laki</strong> &nbsp;&nbsp;
          <input type="radio" name="jenis_kelamin" value="Perempuan"  ><strong> Perempuan </strong>&nbsp;&nbsp;
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