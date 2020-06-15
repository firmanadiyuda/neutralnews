@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row justify-content-center">

		<div class="col-lg-8 mb-5">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

				</ol>

				<div class="carousel-inner">

									<!-- <div class="carousel-item active">
						<img class="d-block w-100" src="https://designrevision.com/docs/shards/images/1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-white">Caption Title</h5>
							<p>Caption Subtitle</p>
						</div>
					</div>	 -->

					@foreach ($topview as $key => $tv)
						<div class="carousel-item {{$key == 0 ? 'active' : '' }}">
						<img class="d-block w-100" height="365px" src="/uploads/articles/{{$tv->image}}" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
						<a href="/{{$tv->slug}}">
							<h5 class="text-white">{{$tv->title}}</h5>
						</a>
						</div>
					</div>
					@endforeach


				</div>

				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>
		</div>


		<div class="col-lg-4 mb-5">

		<div class="card" style="max-height: 100%;">
				<div class="card-header text-center bg-primary text-dark"><b>Top Three</b></div>

				<div class="card-body row">
					<!-- @if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif -->

					<ol>
						@foreach ($topview as $topview)
							<li class="pt-2 pb-2">
								<a href="/{{ $topview->slug }}">{{ $topview->title }}</a>
								<span class="badge badge-danger">Baru</span>
							</li>
						@endforeach
					</ol>

				</div>
			</div>

		</div>

	</div>


	<div class="row justify-content-center">
		<div class="col-12 mb-5">

		<div class="card" style="max-height: 100%;">
			<div class="card-header text-center bg-primary text-dark"><b>Umum</b></div>

			<div class="card-body row justify-content-center">

				@foreach ($data as $dt)
					@if($dt->category->name == 'Umum')
						<div class="col-lg-4 mb-5">
							<div class="card" style="">
								<img height="200px" class="card-img-top" src="/uploads/articles/{{ $dt->image }}" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">{{ $dt->title }}</h4>
									<p class="card-text">{!! \Illuminate\Support\Str::words($dt->body, 20, '....') !!}</p>
									<a href="/{{ $dt->slug }}" class="btn btn-primary">Baca selengkapnya &rarr;</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach

			</div>
		</div>
	</div>
</div>


<div class="row justify-content-center">
		<div class="col-12 mb-5">

		<div class="card" style="max-height: 100%;">
			<div class="card-header text-center bg-primary text-dark"><b>Internasional</b></div>

			<div class="card-body row justify-content-center">

				@foreach ($data as $dt)
					@if($dt->category->name == 'Internasional')
						<div class="col-lg-4 mb-5">
							<div class="card" style="">
								<img height="200px" class="card-img-top" src="/uploads/articles/{{ $dt->image }}" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">{{ $dt->title }}</h4>
									<p class="card-text">{!! \Illuminate\Support\Str::words($dt->body, 20, '....') !!}</p>
									<a href="/{{ $dt->slug }}" class="btn btn-primary">Baca selengkapnya &rarr;</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach

			</div>
		</div>
	</div>
</div>


</div>


	


</div>
@endsection
