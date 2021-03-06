@extends('admin/layout')

@section('content')
  <div class="form-layout form-layout-4">
    <form method="post" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <label class="col-sm-4 form-control-label">Hotel name: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter hotel name">
          @error('name')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div><!-- row -->
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Stars: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="stars" value="{{ old('stars') }}" class="form-control" placeholder="Enter stars count">
          @error('stars')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
       <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">City: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="Enter city">
          @error('city')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Adress: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="adress" value="{{ old('adress') }}" class="form-control" placeholder="Enter adress">
          @error('adress')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
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
        <label class="col-sm-4 form-control-label">Short description:</label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <textarea rows="2" name="description" class="form-control" placeholder="Enter short description">{{ old('description') }}</textarea>
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Choose file:</label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
           <div class="dropzone" id="my-dropzone">
           
          </div>
        </div>
      </div>
      <div class="form-layout-footer mg-t-30">
        <button type="submit" class="btn btn-primary bd-0">Add</button>
      </div><!-- form-layout-footer -->
    </form>
  
  </div><!-- form-layout -->
  
@endsection