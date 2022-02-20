@extends('layouts.app')

@section('content')
    <div class="container" style="min-height: 70vh">
        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user mr-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profile Information
                            </a>

                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-settings mr-2">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg>Account Settings
                            </a>



                            <a href="#Booking" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>Booking
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg></a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg></a>
                            </li>

                            <li class="nav-item">
                                <a href="#Booking" data-toggle="tab" class="nav-link has-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <h6>YOUR PROFILE INFORMATION</h6>
                            <hr>
                            <form>

                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input disabled type="text" class="form-control" id="fullName"
                                        aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                        value="{{ $userD->name }}">

                                </div>
                                <div class="form-group">
                                    <label for="bio">Email</label>
                                    <input disabled type="text" class="form-control" id="fullName"
                                        aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                        value="{{ $userD->email }}">

                                </div>
                                <div class="form-group">
                                    <label for="url">Phone</label>
                                    <input disabled name="phone" type="text" class="form-control" id="url"
                                        placeholder="Enter your website address" value="{{ $userD->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input disabled name="location" type="text" class="form-control" id="location"
                                        placeholder="Enter your location" value="{{ $userD->location }}">
                                </div>

                                {{-- <button type="button" class="btn btn-primary">Update Profile</button>
                <button type="reset" class="btn btn-light">Reset Changes</button> --}}
                            </form>
                        </div>
                        <div class="tab-pane" id="account">
                            <h6>ACCOUNT SETTINGS</h6>
                            <hr>
                            <form method="POST" action="{{ url('updateUser/' . $userD->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="fullName"
                                        aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                        value="{{ $userD->name }}">

                                </div>
                                <div class="form-group">
                                    <label for="bio">Email</label>
                                    <input name="email" type="text" class="form-control" id="fullName"
                                        aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                        value="{{ $userD->email }}">

                                </div>
                                <div class="form-group">
                                    <label for="url">Phone</label>
                                    <input name="phone" type="text" class="form-control" id="url"
                                        placeholder="Enter your website address" value="{{ $userD->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input name="location" type="text" class="form-control" id="location"
                                        placeholder="Enter your location" value="{{ $userD->location }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Profile</button>

                            </form>
                        </div>

                        <div class="tab-pane" id="Booking">
                            <h6>Booking Information</h6>
                            <hr>
                            {{-- <form>
                <div class="form-group">
                  <label class="d-block mb-0">Payment Method</label>
                  <div class="small text-muted mb-3">You have not added a payment method</div>
                  <button class="btn btn-info" type="button">Add Payment Method</button>
                </div>
                <div class="form-group mb-0">
                  <label class="d-block">Payment History</label>
                  <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                </div>
              </form> --}}

                            <h3>Your Bookings:</h3>
                            <div className='customProfile'>
                                <table style="width: 100%">
                                    <tr>
                                        <th>Reserved Name</th>
                                        <th>Trip</th>
                                        <th>Phone</th>
                                        <th>Number of Passengers</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>


                                    @foreach($reservation as $item)
                                        <tr class="border">
                                            <td >{{ $item->name }}</td>
                                            <td >{{ $item->trip->name }}</td>
                                            <td >{{ $item->phone }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->totalPrice }} JD</td>
                                            <td>{{ $item->status }}</td>
                                            @if($item->status == 'pending')
                                            <td><a href="{{url('/delete-reserve/'.$item->id.'/'.$item->trip_id)}}" style="color:red">Delete</a></td>
                                            @endif
                                         </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
