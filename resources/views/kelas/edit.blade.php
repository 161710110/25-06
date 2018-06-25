@extends('layouts.light')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
              <div class="panel-body">
                <h2 class="sub-header">Edit Kelas<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>

                <form action="{{ route('kelas.update',$kelas->id) }}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">nama</label> 
                        <input type="text" name="nama" class="form-control"  value="{{ $kelas->nama }}" required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('jurusan_id') ? ' has-error' : '' }}">
                        <label class="control-label">Jurusan</label>    
                        <select name="jurusan_id" class="form-control">
                            @foreach($a as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('jurusan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jurusan_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('wali_kelas') ? ' has-error' : '' }}">
                        <label class="control-label">Wali Kelas</label> 
                        <input type="text" name="wali_kelas" class="form-control"  value="{{ $kelas->wali_kelas }}" required>
                        @if ($errors->has('wali_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('wali_kelas') }}</strong>
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