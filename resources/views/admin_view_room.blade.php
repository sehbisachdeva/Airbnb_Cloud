

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


                        <form method="post" >

                            <fieldset>
                                <legend>Book Now</legend>

                                <p class="row">
                                    <label for="room_id" class="col-md-4">
                                        <span>Room ID: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="room_id" name="room_id" disabled value="{{$room->room_id}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="host_id">
                                        <span>Host ID: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="host_id" name="host_id" disabled value="{{$room->host_id}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="room_type">
                                        <span>Room Type: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="room_type" name="room_type" disabled value="{{$room->room_type}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="neighborhood">
                                        <span>Neighbourhood </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="neighborhood" name="neighborhood" disabled value="{{$room->neighborhood}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="reviews">
                                        <span>Total Reviews: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="reviews" name="reviews" disabled value="{{$room->reviews}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="overall_satisfaction">
                                        <span>Overall Satisfaction: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="overall_satisfaction" disabled name="overall_satisfaction" value="{{$room->overall_satisfaction}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="accommodates">
                                        <span>Accommodates: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="accommodates" name="accommodates" value="{{$room->accommodates}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="bedrooms">
                                        <span>Number of Bedrooms: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="bedrooms" disabled name="bedrooms" value="{{$room->bedrooms}}">
                                </p>

                                <p>
                                    <label class="col-md-4" for="price">
                                        <span>Price: </span>
                                    </label>
                                    <input class="col-md-4" type="text" id="price" name="price" value="${{$room->price}}">
                                </p>


                            </fieldset>





                            {{--<input type="submit" name="submit" value="Book Now">--}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
