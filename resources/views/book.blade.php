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
                        <form action="{{ url('/book-add/'.$oneTrip->id) }}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Phone no.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="" id="" cols="30" rows="10"placeholder="Message" ></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="customRange1" class="form-label">How many people are joining the ride?</label>
                                    <div id="ranger1"></div>
                                    <input id="ranger" value="1" min="1" max="6" step="1" type="range" class="form-range" id="customRange1">
                                    <script>
                                        let x = document.getElementById('ranger');
                                       x.addEventListener("change",function(){
                                            document.getElementById('ranger1').innerHTML=document.getElementById('ranger').value;
                                        }) 
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
