@extends('Layout.master')
@section('titlekey','Qualification page')

@section('content')

    
    <span class="rounded d-block m-4 fs-1 bg-dark text-white text-center">EDUCATIONAL QUALIFICATION</span>

           

    <div class="container qualification mt-4 mb-4">
        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card p-2 mb-2">
                    <img src="{{asset('/images/aiub.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title  ">American International University-Bangladesh (AIUB)</h4>
                        <h6 class="card-title  ">B.Sc. in Computer Science and Engineering (CSE)</h6>
                        <p class="card-text" style="text-align:justify">CGPA: 3.44 out of 4.00</p>
                        <p class="card-text" style="text-align:justify">2022</p>
                        <a href="{{url('https://www.aiub.edu')}}" class="btn btn-primary">Learn More</a>
                    </div>
                    </div>
            </div>
            <div class="col-md-4 mt-3">
            <div class="card p-2">
                    <img src="{{asset('/images/college.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">SHERPUR GOVT. COLLEGE (H.S.C.)</h4>
                        <h6 class="card-title ">SCIENCE GROUP</h6>
                        <p class="card-text" style="text-align:justify">GPA: 4.75 out of 5.00.</p>
                        <p class="card-text" style="text-align:justify">2016.</p>
                        <a href="{{url('https://sherpurgovtcollege.edu.bd')}}" class="btn btn-primary">Learn More</a>
                    </div>
                    </div>

            </div>
            <div class="col-md-4 mt-3">
            <div class="card p-2">
                    <img src="{{asset('/images/victoria.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title  ">SHERPUR VICTORIA ACADEMY (S.S.C)</h4>
                        <h6 class="card-title ">SCIENCE GROUP</h6>
                        <p class="card-text" style="text-align:justify">GPA: 5.00 out of 5.00.</p>
                        <p class="card-text" style="text-align:justify">2014.</p>

                        <a href="{{url('https://www.aiub.edu')}}" class="btn btn-primary">Learn More</a>
                    </div>
                    </div>

            </div>
                


            
        </div>
    </div>


@endsection