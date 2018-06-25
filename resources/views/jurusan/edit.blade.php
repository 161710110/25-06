@extends('layouts.light')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
              <div class="panel-body">
                <h2 class="sub-header">Edit Jurusan<div class="btn btn-warning pull-right"><a href="{{ url()->previous() }}">Kembali</a></div></h2>
                <form action="{{ route('jurusan.update',$jurusan->id) }}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">nama</label> 
                        <input type="text" name="nama" class="form-control"  value="{{ $jurusan->nama }}" required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
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