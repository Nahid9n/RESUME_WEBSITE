@extends('Layout.master')
@section('titlekey','TANVIR HASAN NAHID')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid background d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12  text-center  mt-4 ">
                <img class="thumbnail rounded" src="{{asset('images/Nahid.png')}}" alt="">
                <h1 class="bg-light rounded mt-3">MD.TANVIR HASHAN NAHID</h1>
                <span class="bg-light fs-3 rounded"><i class="bi bi-mortarboard"></i> B.Sc CSE</span><br>
                <span class="bg-light fs-4 rounded">WEB DEVELOPER</span>
            </div>
        </div>
    </div>



    <div class="container">
        <h3 class="text-center bg-dark text-white mt-3 p-3">CARRER OBJECT</h3>
        <br>
        <p>Seeking a position in the field of Computer Science where I can utilize my skills to further work towards personal and professional development and contribute towards the prosperity of the organization. I am a quick learner and I will give my best effort to reach the goals and objectives of the organization.</p>
        <br>
    </div>

    <div class="container">
        <h3 class="text-center bg-dark text-white p-3">LANGUAGE PROFICIENCY</h3>
        <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul style="list-style-type: none;">
                        <li>BANGLA</li>
                        <li>ENGLISH</li>
                        <li>HINDI</li>
            </ul>
        </div>
            </div>
            
        <br>
    </div>



    <div class="container">
        <h3 class="text-center bg-dark text-white p-3">ACTIVITIES</h3>
        <br>

            <div class="row">
                <div class="col-md-12 text-center">
                            <ul style="list-style-type: none;">
                    <h5 class="text-center">Extracurricular Activities </h5>
                    <hr> 
                        <li><i class="bi bi-bandaid-fill"></i> Sports </li>
                        <li><i class="bi bi-house"></i> Clubs</li>
                        <hr> 
                        <h5  class="text-center">Interest</h5>
                        <hr>
                        <li><i class="bi bi-book"></i> Reading books</li>
                        <li><i class="bi bi-airplane"></i> Travelling</li>
                        <li><i class="bi bi-toggles"></i> Swimming</li>
                        <li><i class="bi bi-camera"></i> Nature Photography</li>
                        <li><i class="bi bi-bandaid-fill"></i> Cricket</li>
                        <li><i class="bi bi-globe"></i> Football</li>

                    </ul>
                </div>
            </div>
        




            
        <br>
    </div>

    <div class="container r contactme p-3">
        <div class="row">
            <div class="col-md-6 text-center">
                <form> 
                    <fieldset>
                            <legend class="text-center mt-3 fs-3">Contact Me</legend>
                            <hr>
                                
                                    <label for="exampleInputEmail1" class="form-label mt-2">Your Name</label>
                                    <input type="text" class="form-control border border-1" id="exampleInputEmail1 " aria-describedby="emailHelp">
                                    <label for="exampleInputEmail1" class="form-label mt-2">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <label for="exampleInputEmail1" class="form-label mt-2">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                    <label for="exampleInputEmail1" class="form-label mt-2">Your Message</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>

                                <button type="submit" style="width:100%;" class="btn btn-primary">Send Me</button>
                        
                     </fieldset>  
                 </form>
            </div>
            <div class="col-md-6 mt-3">
            <h3 class="text-center text-dark">My Location</h3><hr>
                    <iframe class="p-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.926102173341!2d90.42111147600289!3d23.821226686052267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64f90894163%3A0xf320222e83114855!2sKuratoli%20Kendriya%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1685461551903!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>









    
    
</body>
</html>


@endsection