@extends('layouts.light')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
              <div class="panel-body">
                <h2 class="sub-header">Edit Absen<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>

                <form action="{{ route('absen.update',$absen->id) }}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal</label> 
                        <input type="date" name="tanggal" class="form-control"  value="{{ $absen->tanggal }}" required>
                        @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('siswa_id') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Siswa</label>    
                        <select name="siswa_id" class="form-control">
                            @foreach($a as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('siswa_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('siswa_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
                        <label class="control-label">Keterangan</label> 
                        <input type="radio" name="keterangan" value="Sakit"  ><strong> Sakit</strong> &nbsp;&nbsp;
                        <input type="radio" name="keterangan" value="Izin"  ><strong> Izin </strong>&nbsp;&nbsp;
                        <input type="radio" name="keterangan" value="Alfa"  ><strong> Alfa </strong>&nbsp;&nbsp;
                        @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
              </div>
            </div>
        
    </div>
</div>
@endsection