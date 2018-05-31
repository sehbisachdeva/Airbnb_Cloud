

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

                        Your Booking Conformation has been successful.<br/><br/>
                        <a class="btn btn-primary" href="{{ route('rooms') }}">Home Page</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
