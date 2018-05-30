@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sydney Airbnb Room Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                        <table id ="room_table">
                            <tr>
                                <th>Room ID</th>
                                <th>Room Neighbourhood</th>
                                <th>Room Type</th>
                                <th>Price</th>
                                <th>Book Now</th>
                            </tr>

                            @foreach($rooms as $room)
                                <tr>

                                    <td>{{$room->room_id}}</td>
                                    <td>{{$room->neighborhood}}</td>
                                    <td>{{$room->room_type}}</td>
                                    <td>${{$room->price}}</td>
                                    @if ($room->booked) <td style ="background-color:red"> Booked </td> @else <td style ="background-color:green">  Available @endif</td>
                                    <td><a class="btn btn-dark" href="room/{{$room->room_id}}}">View Details</a></td>


                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
