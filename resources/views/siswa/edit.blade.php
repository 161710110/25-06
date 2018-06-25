@extends('layouts.light')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
              <div class="panel-body">
                <h2 class="sub-header">Edit Siswa<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>

                <form action="{{ route('siswa.update',$siswa->id) }}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
                        <label class="control-label">Nis</label> 
                        <input type="text" name="nis" class="form-control"  value="{{ $siswa->nis }}" required>
                        @if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">Nama</label> 
                        <input type="text" name="nama" class="form-control"  value="{{ $siswa->nama }}" required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('kelas_id') ? ' has-error' : '' }}">
                        <label class="control-label">Kelas</label>    
                        <select name="kelas_id" class="form-control">
                            @foreach($a as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('kelas_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kelas_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label><br />
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki"  ><strong> Laki Laki</strong> &nbsp;&nbsp;
                        <input type="radio" name="jenis_kelamin" value="Perempuan"  ><strong> Perempuan </strong>&nbsp;&nbsp;
                        @if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </form>
              </div>
            </div>
        
    </div>
</div>
@endsection