@extends('admin/layout')

@section('content')
  <div class="table-responsive">
    <table class="table table-hover mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>City</th>
          <th>Stars</th>
          <th>Price</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
       
        @isset ($hotels)
          @foreach ($hotels as $hotel)

            <tr>
              <th scope="row">{{ $hotel->id }}</th>
              <td>{{ $hotel->name }}</td>
              <td>{{ $hotel->city }}</td>
              <td>{{ $hotel->stars }}</td>
              <td>{{ $hotel->price }}</td>

              <td><a href="{{ route('hotel.edit', ['id' => $hotel->id]) }}">Edit</a></td>
              <td>
                <a href="{{ route('hotel.destroy', ['id' => $hotel->id]) }}"
                   onclick="event.preventDefault();
                              document.getElementById('delete-hotel').action = '{{ route("hotel.destroy", ["id" => $hotel->id]) }}';
                                document.getElementById('delete-hotel').submit();">
                    Delete
                </a>
              </td>
            </tr>

          @endforeach
        @endisset

      </tbody>
    </table>
  </div><!-- table-responsive -->

  <form id="delete-hotel" method="post" style="display: none;">
      @method('delete')
      @csrf
  </form>

  <div class="form-layout-footer mg-t-30">
    <a href="{{ route('hotel.create') }}" class="btn btn-primary bd-0">Add new hotel</a>
  </div>
    
@endsection