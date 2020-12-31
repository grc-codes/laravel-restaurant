@extends('layouts.app')

@section('content')
    <div id='waitlist-page'>
        <div class='content-box'>
            <div class='row'>
                <div class='col-md-6'>
                    <h1>Get On The List</h1>
                    <form>
                        <div class="form-group">
                            <label for="firstnameinput">First Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="fname"
                                id="firstnameinput"
                                placeholder="Joe"
                            >
                        </div>
                        <div class="form-group">
                            <label for="lastnameinput">Last Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="lname"
                                id="lastnameinput"
                                placeholder="Budden"
                            >
                        </div>
                        <div class="form-group">
                            <label for="emailinput">Email Address</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="emailinput"
                                placeholder="name@example.com"
                            >
                        </div>
                        <div class="form-group">
                            <label for="phoneinput">Phone Number</label>
                            <input
                                type="text"
                                class="form-control"
                                name="phone"
                                id="phoneinput"
                                placeholder="718-298-5768">
                        </div>
                        <div class="form-group">
                            <label for="guestsinput">Guests #</label>
                            <select name="guests" class="form-control" id="guestsinput">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timeinput">Time</label>
                            <select name="time" class="form-control" id="timeinput">
                                <option value="18">6:00 PM</option>
                                <option value="19">7:00 PM</option>
                                <option value="20">8:00 PM</option>
                                <option value="21">9:00 PM</option>
                                <option value="22">10:00 PM</option>
                            </select>
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