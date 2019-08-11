@extends('admin/layout')

@section('content')
  <div class="form-layout form-layout-4">
    <form method="post" action="{{ route('flight.store') }}">
      @csrf
      <div class="row">
        <label class="col-sm-4 form-control-label">Airline name: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="airline" value="{{ old('airline') }}" class="form-control" placeholder="Enter airline name">
          @error('airline')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div><!-- row -->
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Plane type: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="plane" value="{{ old('plane') }}" class="form-control" placeholder="Enter plane type">
          @error('plane')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Estimate arrival date: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
              </div>
            </div>
            <input type="text" name="arrival_date" value="{{ old('arrival_date') }}" class="form-control fc-datepicker" placeholder="YYYY-MM-DD">
            @error('arrival_date')
              <div class="alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Estimate arrival time: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
              </div>
            </div>
            <input id="tpBasic" type="text" name="arrival_time" value="{{ old('arrival_time') }}" class="form-control" placeholder="Set time">
            @error('arrival_time')
              <div class="alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="Enter price">
          @error('price')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Destination: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="destination" value="{{ old('destination') }}" class="form-control" placeholder="Enter destination">
          @error('destination')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Departure: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="departure" value="{{ old('departure') }}" class="form-control" placeholder="Enter departure">
          @error('departure')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Adult: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="adult" value="{{ old('adult') }}" class="form-control" placeholder="Enter count">
          @error('adult')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Short description:</label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <textarea rows="2" name="description" class="form-control" placeholder="Enter short description">{{ old('description') }}</textarea>
        </div>
      </div>
      <div class="form-layout-footer mg-t-30">
        <button type="submit" class="btn btn-primary bd-0">Add</button>
      </div><!-- form-layout-footer -->
    </form>
  </div><!-- form-layout -->

@endsection