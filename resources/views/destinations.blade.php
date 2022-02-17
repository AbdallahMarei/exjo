@extends('layouts.app')

@section('content')
<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>Pixel perfect design with awesome contents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="popular_places_area">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                @if($errors->any())
                    <div class="alert alert-dark">{{$errors->first()}}</div>
                @endif

                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select onchange="window.location.href=this.options[this.selectedIndex].value;">
                                                <option data-display="Country">Country</option>
                                                @foreach($country as $item )
                                                <option value="{{ url('/destinations/'.$item->id) }}">{{$item->name}}</option>

                                                @endforeach
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <select onchange="window.location.href=this.options[this.selectedIndex].value;">
                                                <option data-display="Travel type">Sort</option>
                                                <option value="{{ url('/destinations-h2l')}}">Price:Highest->Lowest</option>
                                                <option value="{{ url('/destinations-l2h')}}">Price:Lowest->Highest</option>

                                              </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="reset_btn">
                                <form action="{{url('/destinations')}}">
                                    <button class="boxed-btn4" type="submit">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($trip as $val)
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{ asset('/assets/uploads/trip/'.$val->image) }}" alt="">
                                    <a href="{{ URL::to('show-trip/' . $val->id) }}" class="prise">${{$val->price}}</a>
                                </div>
                                <div class="place_info">
                                    <a href="{{ URL::to('show-trip/' . $val->id) }}"><h3>{{$val->name}}</h3></a>
                                    <p>{{$val->country->name}}</p>
                                    <p>{{$val->brief}}</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <a href="{{ URL::to('show-trip/' . $val->id) }}">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{ URL::to('show-trip/' . $val->id) }}">{{$val->days}} Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection