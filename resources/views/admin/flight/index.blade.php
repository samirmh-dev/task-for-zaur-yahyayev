@extends('admin/layout')

@section('content')
  <div class="table-responsive">
    <table class="table table-hover mg-b-0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Departure</th>
          <th>Destination</th>
          <th>Arrival</th>
          <th>Airline</th>
          <th>Price</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
       
        @isset ($flights)
          @foreach ($flights as $flight)

            <tr>
              <th scope="row">{{ $flight->id }}</th>
              <td>{{ $flight->departure }}</td>
              <td>{{ $flight->destination }}</td>
              <td>{{ $flight->arrival_date }} {{ $flight->arrival_time }}</td>
              <td>{{ $flight->airline }}</td>
              <td>{{ $flight->price }}</td>

              <td><a href="{{ route('flight.edit', ['id' => $flight->id]) }}">Edit</a></td>
              <td>
                <a href="{{ route('flight.destroy', ['id' => $flight->id]) }}"
                   onclick="event.preventDefault();
                              document.getElementById('delete-flight').action = '{{ route("flight.destroy", ["id" => $flight->id]) }}';
                                document.getElementById('delete-flight').submit();">
                    Delete
                </a>
              </td>
            </tr>

          @endforeach
        @endisset

      </tbody>
    </table>
  </div><!-- table-responsive -->

  <form id="delete-flight" method="post" style="display: none;">
      @method('delete')
      @csrf
  </form>

  <div class="form-layout-footer mg-t-30">
    <a href="{{ route('flight.create') }}" class="btn btn-primary bd-0">Add new flight</a>
  </div>
    
@endsection