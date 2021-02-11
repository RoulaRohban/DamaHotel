@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-box">
                <h1>Book Now!</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" name="Name" placeholder="Full Name"/>
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                id="email"
                                type="email"
                                name="Email"
                                placeholder="Email"
                        />
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                id="phone"
                                type="phone"
                                name="Phone"
                                placeholder="Phone"
                        />
                    </div>
                    <div class="form-group">
                        <div class="dropdown">
                            <button
                                    class="btn btn-secondary dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                            >
                                Choose your room
                            </button>
                            <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenuButton"
                            >
                                <a class="dropdown-item" href="#">Single Room</a>
                                <a class="dropdown-item" href="#">Single Room With View</a>
                                <a class="dropdown-item" href="#">Deluxe Room</a>
                                <a class="dropdown-item" href="#">Sweet</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Arrival date</label>
                        <input
                                class="form-control"
                                id="arrival"
                                type="date"
                                name="Arrival"
                        />
                    </div>
                    <div class="form-group">
                        <label for="departure">Departure date</label>
                        <input
                                class="form-control"
                                id="departure"
                                type="date"
                                name="Departure"
                                placeholder=""
                        />
                    </div>
                    <div class="form-group">
                        <input
                                class="form-control"
                                id="personNumber"
                                type="number"
                                name="PersonNumber"
                                placeholder="Count of persons"
                        />
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mt-lg-3">
            <div class="text-center mt-lg-3 mb-lg-3">
                <div class="alert alert-info" role="alert">
                    Total of Booking : <span style="font-weight: bold;">25</span>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
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
                                Booking #1
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
                                <li class="list-group-item">Full Name:</li>
                                <li class="list-group-item">Email:</li>
                                <li class="list-group-item">Phone:</li>
                                <li class="list-group-item">Date of arrival:</li>
                                <li class="list-group-item">Date of departcher:</li>
                                <li class="list-group-item">Number of persons:</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                            >
                                Collapsible Group Item #2
                            </button>
                        </h2>
                    </div>
                    <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident.
                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button
                                    class="btn btn-link btn-block text-left collapsed"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                            >
                                Collapsible Group Item #3
                            </button>
                        </h2>
                    </div>
                    <div
                            id="collapseThree"
                            class="collapse"
                            aria-labelledby="headingThree"
                            data-parent="#accordionExample"
                    >
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                            aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident.
                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable
                            VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
