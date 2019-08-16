@extends('front/layout')

@section('content')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

	<div class="slider-parallax-inner">

		<div class="fslider" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
			<div class="flexslider" style="height: 100% !important;">
				<div class="slider-wrap" style="height: inherit;">
					<div class="slide" style="background: url('{{asset('images/slider/1.jpg')}}') center center; background-size: cover; height: 100% !important;"></div>
					<div class="slide" style="background: url('{{asset('images/slider/2.jpg')}}') center center; background-size: cover; height: 100% !important;"></div>
					<div class="slide" style="background: url('{{asset('images/slider/3.jpg')}}') center center; background-size: cover; height: 100% !important;"></div>
				</div>
			</div>
		</div>

		<div id="travel-slider-overlay">

			<div class="vertical-middle">

				<div class="container clearfix">

					<div class="tabs travel-organiser-tabs clearfix">

						<ul class="tab-nav clearfix">
							<li><a href="#tab-flights"><i class="icon-plane"></i><span class="d-none d-md-inline-block">Flights</span></a></li>
							<li><a href="#tab-hotels"><i class="icon-building"></i><span class="d-none d-md-inline-block">Hotels</span></a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-flights">
								<div class="heading-block nobottomborder bottommargin-sm clearfix">
									<h4 class="fleft">Book your Flights</h4>
									<div class="clear"></div>
								</div>
								<form action="{{ route('flight-search') }}" method="post" class="nobottommargin">
									@csrf
									<div class="row">
										<div class="col-md-6 col-12 bottommargin-sm">
											<label for="">From</label>
											<input type="text" name="from" value="{{ old('from') }}" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
											@error('from')
								            	<div class="alert-danger">{{ $message }}</div>
								          	@enderror
										</div>
										<div class="col-md-6 col-12 bottommargin-sm">
											<label for="">To</label>
											<input type="text" name="to" value="{{ old('to') }}" class="sm-form-control" placeholder="Eg. New York, United States">
											@error('to')
								            	<div class="alert-danger">{{ $message }}</div>
								          	@enderror
										</div>
										<div class="clear"></div>
										<div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
											<div class="row">
												<div class="col-md-6 col-6">
													<label for="">Departure</label>
													<input type="text" name="departure" value="" class="fc-datepicker sm-form-control tleft" placeholder="YYYY-MM-DD">
													@error('departure')
										            	<div class="alert-danger">{{ $message }}</div>
										          	@enderror
												</div>
												<div class="col-md-6 col-6">
													<label for="">Return</label>
													<input type="text" name="return" value="" class="fc-datepicker sm-form-control tleft" placeholder="YYYY-MM-DD">
													@error('return')
										            	<div class="alert-danger">{{ $message }}</div>
										          	@enderror
												</div>
											</div>
										</div>
										<div class="col-md-3 bottommargin-sm">
											<label for="">Adults</label>
											<input type="number" name="adult" min="1" value="{{ old('adult') }}" class="sm-form-control" placeholder="2">
											@error('adult')
								            	<div class="alert-danger">{{ $message }}</div>
								          	@enderror
										</div>
										<div class="col-md-12">
											<button class="button button-3d nomargin rightmargin-sm">Search Flights</button>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-content clearfix" id="tab-hotels">
								<div class="heading-block nobottomborder bottommargin-sm clearfix">
									<h4 class="fleft">Book your Hotels</h4>
									<div class="clear"></div>
								</div>
								<form action="{{ route('hotel-search') }}" method="post" class="nobottommargin">
									@csrf
									<div class="row">
										<div class="col-md-12 bottommargin-sm">
											<label for="">City</label>
											<input type="text" name="city" value="{{ old('city') }}" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
											@error('city')
								            	<div class="alert-danger">{{ $message }}</div>
								          	@enderror
										</div>
										<div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
											<div class="row">
												<div class="col-md-6 col-6">
													<label for="">Departure</label>
													<input type="text" name="check-in" value="" class="fc-datepicker sm-form-control tleft" placeholder="YYYY-MM-DD">
													@error('check-in')
										            	<div class="alert-danger">{{ $message }}</div>
										          	@enderror
												</div>
												<div class="col-md-6 col-6">
													<label for="">Return</label>
													<input type="text" name="check-out" value="" class="fc-datepicker sm-form-control tleft" placeholder="YYYY-MM-DD">
													@error('check-out')
										            	<div class="alert-danger">{{ $message }}</div>
										          	@enderror
												</div>
											</div>
										</div>
										<div class="col-md-3 bottommargin-sm">
											<label for="">Rooms</label>
											<input type="number" name="rooms" min="1" value="{{ old('rooms') }}" class="sm-form-control" placeholder="2">
											@error('rooms')
								            	<div class="alert-danger">{{ $message }}</div>
								          	@enderror
										</div>
										<div class="col-md-12">
											<button class="button button-3d nomargin rightmargin-sm">Search Hotels</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection('content')

@section('script')
<script type="text/javascript">
	$(function() {
		// Datepicker
	    $('.fc-datepicker').datepicker({
	     	format: 'yyyy-mm-dd'
	    });

	    @if(old('departure') !== null)
	      $('input[name="departure"]').val("{{ old('departure') }}");
	    @endif
	    @if(old('return') !== null)
	      $('input[name="return"]').val("{{ old('return') }}");
	    @endif

	    @if(old('check-in') !== null)
	      $('input[name="check-in"]').val("{{ old('check-in') }}");
	    @endif
	    @if(old('check-out') !== null)
	      $('input[name="check-out"]').val("{{ old('check-out') }}");
	    @endif

	    @foreach($errors->all() as $error)
			@foreach($validatedHotelFields as $field)
				@if(strpos($error, $field) == true)
					document.getElementById('ui-id-2').click();
				@endif
			@endforeach
		@endforeach
	    	
	});
</script>
@endsection('script')
