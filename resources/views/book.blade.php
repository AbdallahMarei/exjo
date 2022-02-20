@extends('layouts.app')

@section('content')
<div class="destination_text text-center">
            <h3>{{$oneTrip->name}}</h3>
            <p>{{$oneTrip->brief}}</p>
        </div>    
        <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Book</h3>
                        <p class="alert alert-danger">{{$oneTrip->capacity}} Seats Reamaining</p>
                        <form action="{{ url('/book-add/'.$oneTrip->id) }}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input name="phone" type="text" placeholder="Phone no.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="customRange1" class="form-label">How many people are joining the ride?</label>
                                    <div id="ranger1"></div>
                                    <input name='quantity' id="ranger" value="1" min="1" max="{{$oneTrip->capacity}}" step="1" type="range" class="form-range" id="customRange1">
                                    <div id="total_price" class="col-md-3">
                                    </div>
                                        <input id = "single-price" type="hidden" value="{{ $oneTrip->price }}">
                                    <script>
                                        let x = document.getElementById('ranger');
                                        document.getElementById('ranger1').innerHTML=document.getElementById('ranger').value;
                                       x.addEventListener("change",function(){
                                            document.getElementById('ranger1').innerHTML=document.getElementById('ranger').value;
                                            document.getElementById('total_price').innerHTML='Total Price : ' + document.getElementById('single-price').value * document.getElementById('ranger').value ;

                                        });
                                    </script>
                                </div>
                                <div class="col-lg-6">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        
        @endsection
