@extends('layouts.light')
@section('content')	
<br>
		<div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Akumulasi</h4>
            <div class="pull-left">
			<form action="{{url('laporanabsensi')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" required="">
			<label>Sampai Tanggal</label>
			<input type="date" name="b" required="">
	        	<label class="control-label">Kelas</label>
	        	<select name="c" required="">
	        		@foreach($kelas as $aa)
	        		<option value="{{$aa->id}}">{{$aa->nama}}
	        		</option>
	        		@endforeach
	        	</select>
			<input type="submit" name="submit" class="btn btn-light" value="Submit">
			</form>	
			</div>
			</div>
@endsection