@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} | Reservations
@endsection


@section('content')
    <div id='waitlist-page'>
        <div class='content-box'>
            <div class='row'>
                <div class='col-md-6'>
                    <h1>Get On The List</h1>
                    <form method="POST" action="/reservations">
                        @csrf
                        <div class="form-group">
                            <label for="inputfname">First Name</label>
                            <input
                                placeholder="First Name"
                                id="inputfname"
                                type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                name="fname"
                                value="{{ old('fname') }}"
                                required
                                autocomplete="fname"
                                autofocus
                            >
                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputlname">Last Name</label>
                            <input
                                placeholder="Last Name"
                                id="inputlname"
                                type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                name="lname"
                                value="{{ old('lname') }}"
                                required
                                autocomplete="lname"
                                autofocus
                            >
                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputemail">Email Address</label>
                            <input
                                placeholder="Email Address"
                                id="inputemail"
                                type="email"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus
                            >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputphone">Phone Number</label>
                            <input
                                placeholder="Phone Number"
                                id="inputphone"
                                type="tel"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                name="phone_number"
                                value="{{ old('phone_number') }}"
                                required
                                autocomplete="phone_number"
                                autofocus
                            >
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputguests">Guests #</label>
                            <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="inputguests">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('guests_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputtime">Time</label>
                            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="inputtime">
                                <option value="18">6:00 PM</option>
                                <option value="19">7:00 PM</option>
                                <option value="20">8:00 PM</option>
                                <option value="21">9:00 PM</option>
                                <option value="22">10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                    </form>
                </div>
                <div class='col-md-6'>
                    <p>
                        Please note: This is not a reservation. You will be added to the current wait list. You made have a short wait once you arrive while we prepare your order.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection