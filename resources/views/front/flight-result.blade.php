@extends('front/layout')

@section('content')
<section id="page-title" class="page-title-center page-title-parallax page-title-dark" style="background-image: url('{{asset('images/hotels/page-title.jpg')}}'); background-position: center center; padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

	<div class="container clearfix">
		<h1>{{ $flightCount }} Flights Found</h1>

		@isset($first)
			<span>{{ $first->departure }}&nbsp;&nbsp;<i class="icon-map-marker"></i>&nbsp;&nbsp;{{ $first->destination }}</span>
		@endisset

	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin col_last clearfix" style="width: 100%">

				<!-- Posts
				============================================= -->
				<div id="posts" class="small-thumbs">

					@isset($flights)
						@foreach($flights as $flight)

							<div class="entry clearfix">
								<div class="row clearfix">
									<div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
									<div class="col-lg-10 col-md-8">
										<div class="entry-c">
											<div class="entry-title">
												<h2><a href="blog-single.html">{{ $flight->airline }}</a></h2>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-plane"></i><a href="#">{{ $flight->plane }}</a></li>
												<li><i class="icon-time"></i><a href="#"> Estimate arrival: {{ date("j F Y", strtotime($flight->arrival_date)) }} {{ date("g:i A", strtotime($flight->arrival_time)) }}</a></li>  
											</ul>
											<div class="entry-content">
												<p class="nobottommargin">
													{{ $flight->description }}
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 center">
										<div class="hotel-price">
											<i class="icon-dollar"></i>{{ $flight->price }}
										</div>
										<small><em>Price per person*</em></small><br>
										<a href="#"class="button button-rounded topmargin-sm">Buy ticket</a>
									</div>
								</div>
							</div>

						@endforeach
						{{ $flights->appends($filter)->links() }}
					@endisset
					
				</div>

			</div>

		</div>

	</div>

</section><!-- #content end -->
@endsection('content')

@section('go-to-top')
<div id="gotoTop" class="icon-angle-up"></div>
@endsection('go-to-top')

@section('script')
<script>
	$(function() {
		$('.travel-date-group').datepicker({
			autoclose: true,
			startDate: "today"
		});
	});
</script>
@endsection('script')
