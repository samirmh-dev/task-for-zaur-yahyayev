@extends('admin/layout')

@section('content')
  <div class="form-layout form-layout-4">
    <form method="post" action="{{ route('hotel.update', ['id' => $hotel->id]) }}">
      @method('patch')
      @csrf
      <div class="row">
        <label class="col-sm-4 form-control-label">Hotel name: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="name" value="{{ $hotel->name }}" class="form-control" placeholder="Enter hotel name">
          @error('name')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div><!-- row -->
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Stars: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="stars" value="{{ $hotel->stars }}" class="form-control" placeholder="Enter stars count">
          @error('stars')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
       <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">City: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="city" value="{{ $hotel->city }}" class="form-control" placeholder="Enter city">
          @error('city')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Adress: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="adress" value="{{ $hotel->adress }}" class="form-control" placeholder="Enter adress">
          @error('adress')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <input type="text" name="price" value="{{ $hotel->price }}" class="form-control" placeholder="Enter price">
          @error('price')
            <div class="alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="row mg-t-20">
        <label class="col-sm-4 form-control-label">Short description:</label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
          <textarea rows="2" name="description" class="form-control" placeholder="Enter short description">{{ $hotel->description }}</textarea>
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
        <button type="submit" class="btn btn-primary bd-0">Edit</button>
      </div><!-- form-layout-footer -->
    </form>
  </div><!-- form-layout -->

@endsection