@extends('admin/layout')

@section('content')
  <div class="form-layout form-layout-4">
    <form method="post" action="{{ route('flight.store') }}">
      @csrf
      <div class="row">
        <label class="col-sm-4 form-control-label">Airline name: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="airline" class="form-control" placeholder="Enter airline name">
        </div>
      </div><!-- row -->
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Plane type: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="plane" class="form-control" placeholder="Enter plane type">
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
            <input type="text" name="date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
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
            </div><!-- input-group-prepend -->
            <input id="tpBasic" type="text" name="time" class="form-control" placeholder="Set time">
          </div>
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="price" class="form-control" placeholder="Enter price">
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Destination: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="destination" class="form-control" placeholder="Enter destination">
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Departure: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="departure" class="form-control" placeholder="Enter departure">
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Adult: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="adult" class="form-control" placeholder="Enter count">
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Short description: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <textarea rows="2" name="description" class="form-control" placeholder="Enter short description"></textarea>
        </div>
      </div>

      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Choose file: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
           <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div><!-- custom-file -->
        </div>
      </div>

      <div class="form-layout-footer mg-t-30">
        <button type="submit" class="btn btn-primary bd-0">Submit Form</button>
      </div><!-- form-layout-footer -->
    </form>
  </div><!-- form-layout -->
@endsection