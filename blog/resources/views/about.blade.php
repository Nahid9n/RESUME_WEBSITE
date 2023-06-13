@extends('Layout.master')
@section('titlekey','about page')

@section('content')


<div class="container text-center">
        <img class="thumbnail rounded mb-2" src="{{asset('images/Nahid.png')}}" alt="">
        <h4 class="text-center text-dark p-1">MD.TANVIR HASHAN NAHID</h4>
        <h5 class="text-center text-dark ">B.Sc CSE</h5>
        <h5 class="text-center text-dark ">WEB DESIGNER & DEVELOPER</h5>
        <br><br>
        <h3 class="text-center bg-dark text-white p-3">PERSONAL INFORAMTION</h3>
        <br>

            <div class="row">
                <div class="col-md-12 text-center">
                            
                    <h6 class="text-center"> Father’s Name : Ahsen Habib </h6>
                    <h6 class="text-center"> Mother’s Name : Nazma Khanam</h6>
                    <h6 class="text-center"> Nationality : Bangladeshi</h6>
                    <h6 class="text-center">Date of Birth : 13 September, 1999 </h6>
                    <h6 class="text-center"> Religion : Islam</h6>
                    <h6 class="text-center"> Blood Group : B+</h6>
                    <h6 class="text-center"> Permanent Address : Dubar-char Dokkhin,Sherpur</h6>                   
                </div>
            </div>         
        <br>
</div>


<div class="container">
        <h3 class="text-center bg-dark text-white p-3">REFERENCE</h3>
        <br>

            <div class="row">
                <div class="col-md-6 text-center">
                            
                    <h6 class="text-center"> Name : Mukhlesur Rahman Khan </h6>
                    <h6 class="text-center"> Designation : Assistant General Manager</h6>
                    <h6 class="text-center"> Phone : 01769407679</h6>
                    <h6 class="text-center"> Organization : Alenga Pollibiddut Somiti , Tangail</h6>
                    <h6 class="text-center"> Address : Purabari Paboi Bazar , Jamalpur</h6>                
                </div>

                <div class="col-md-6 text-center">
                            
                    <h6 class="text-center"> Name : Ahsen Habib </h6>
                    <h6 class="text-center"> Designation : Businessman</h6>
                    <h6 class="text-center"> Phone : 01613544948</h6>
                    <h6 class="text-center"> Organization : Nahid Enterprise,Sherpur</h6>
                    <h6 class="text-center"> Address : Dubar-char Dokkhin,Sherpur</h6>                
                </div>
            </div>         
        <br>
    </div>

    <div class="container">
        <h3 class="text-center bg-dark text-white p-3">SIGNATURE</h3>
        <br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('/images/Signature121.png')}}" alt="">      
                          
                </div>
            </div>         
        <br>
    </div>
    



@endsection