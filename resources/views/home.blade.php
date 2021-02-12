@extends('layouts.app')

@section('content')
    @include('flash-message')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-box">
                <h1>Book Now!</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('bookings.store') }}" id="main-form">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" name="name" placeholder="Full Name"/>
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                id="email"
                                type="email"
                                name="email"
                                placeholder="Email"
                        />
                    </div>
                    <div class="form-group">
                        <input class="form-control"
                                id="phone"
                                type="text"
                                name="phone"
                                placeholder="Phone"/>
                    </div>
                    <div class="form-group">
                        <select name="booking_option_id" id="booking_option_id" class="form-control">
                            <option value="">Choose your room</option>
                            @foreach($options as $option)
                                <option value="{{ $option->id }}">{{ $option->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Arrival date</label>
                        <input
                                class="form-control"
                                id="arrival"
                                type="date"
                                name="arrival_date"
                        />
                    </div>
                    <div class="form-group">
                        <label for="departure">Departure date</label>
                        <input
                                class="form-control"
                                id="departure"
                                type="date"
                                name="departure_date"
                                placeholder=""
                        />
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                id="personNumber"
                                type="number"
                                name="persons_num"
                                placeholder="Count of persons"
                        />
                    </div>
                        <div class="form-group">
                            <button onclick="submitForm('#main-form')" id="submit-button"
                                    class="btn btn-primary">Save</button>
                            <button type="reset" onclick=""
                                    class="btn btn-secondary">Close</button>
                        </div>
{{--                    <button class="btn btn-primary btn-lg btn-block" type="submit" >Add Book</button>--}}
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mt-lg-3">
            <div class="text-center mt-lg-3 mb-lg-3">
                <div class="alert alert-info" role="alert">
                    Total of Booking : <span style="font-weight: bold;">{{ $count_of_bookings }}</span>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                @forelse($bookings as $booking)
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button
                                    class="btn btn-link btn-block text-left"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                            >
                                Booking #{{ $booking->id }}
                            </button>
                        </h2>
                    </div>

                    <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: {{ $booking->user->name }}</li>
                                <li class="list-group-item">Email: {{ $booking->user->email }}</li>
                                <li class="list-group-item">Phone: {{ $booking->user->phone }}</li>
                                <li class="list-group-item">Date of arrival: {{ $booking->arrival_date }}</li>
                                <li class="list-group-item">Date of departcher: {{ $booking->departure_date }}</li>
                                <li class="list-group-item">Number of persons: {{ $booking->persons_num }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button
                                    class="btn btn-link btn-block text-left"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                            >
                                There Isn't Any Book
                            </button>
                        </h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        function submitForm(id) {
            $(id).submit();
        }
    </script>
@endsection