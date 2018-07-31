@extends('layouts.frontend')
@section('content')


	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="{{asset('frontend/assets/img/team/team01.jpg')}}"  alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>{{$b->tgl_absen}}</h3>
							<p>{{$b->Siswa->Kelas->kelas }}</p>
							<p>{{$b->Siswa->nis }}</p>
							<p>{{$b->Siswa->nama}}</p>
							<p>{{$b->keterangan}}</p>
							
						</div>

						<!-- blog tags -->
						<!-- /reply form -->
					</div>
				</main>
				</div>
			</div>
		</div>

				@endsection
